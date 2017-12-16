<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();

        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters(
            $this->config->item('error_start_delimiter', 'ion_auth'),
            $this->config->item('error_end_delimiter', 'ion_auth')
        );

        $this->load->library(array('ion_auth'));
		$this->lang->load('auth');


    }

    public function index(){

		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
        }
        $data['detail'] =  $this->ion_auth_model->get_user_detail();
        $data['sett'] = $this->setting_model->get_setting();
		$data['email'] = $this->session->userdata( 'email' );
		$data['name'] = $this->session->userdata( 'full_name' );
		$data['activeTab'] = "home";
		$data['activeTab2'] = "none";
        $this->load->view('template/dash_header', $data);
        $this->load->view('template/dash_left_menu', $data);
		$this->load->view('backoffice/home', $data);
		$this->load->view('template/dash_footer');

    }

    public function setting_general(){

        if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('login', 'refresh');
		}

        $data['user'] = $this->ion_auth->user(
            $this->session->userdata( 'id' )
            )->row();

        $data['detail'] =  $this->ion_auth_model->get_user_detail();

        $data['sett'] = $this->setting_model->get_setting();
		$data['email'] = $this->session->userdata( 'email' );
		$data['name'] = $this->session->userdata( 'full_name' );
		$data['activeTab'] = "setting";
		$data['activeTab2'] = "sett_general";
        $this->load->view('template/dash_header', $data);
        $this->load->view('template/dash_left_menu', $data);
		$this->load->view('backoffice/setting_general', $data);
		$this->load->view('template/dash_footer');
    }

    public function user_management(){

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()){
			// redirect them to the login page
			redirect('login', 'refresh');
        }

        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() :
        $this->session->flashdata('message');

		//list the users
        $data['users'] = $this->ion_auth->users()->result();
        $data['detail'] =  $this->ion_auth_model->get_user_detail();

		foreach ($data['users'] as $k => $user){
            $data['users'][$k]->groups = $this->ion_auth
            ->get_users_groups($user->id)->result();
        }
        foreach ($data['users'] as $k => $user){

            $data['users'][$k]->detail = $this->ion_auth
            ->get_user_details($user->id)->result();
        }

        $data['sett'] = $this->setting_model->get_setting();

		$data['groups'] = $this->ion_auth->groups()->result_array();
		$data['csrf'] = $this->_get_csrf_nonce();
		$data['totalUser'] = $this->ion_auth_model->get_user_total();
		$data['email'] = $this->session->userdata( 'email' );
		$data['name'] = $this->session->userdata( 'full_name' );
		$data['activeTab'] = "setting";
		$data['activeTab2'] = "sett_user";
        $this->load->view('template/dash_header', $data);
        $this->load->view('template/dash_left_menu', $data);
		$this->load->view('backoffice/setting_user_management', $data);
		$this->load->view('template/dash_footer');
    }


	/**
	 * @return array A CSRF key-value pair
	 */
	public function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

}