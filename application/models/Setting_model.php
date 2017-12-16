<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting_model extends CI_Model {

    public function get_setting(){
        $query = $this->db->get('site_setting');
        return $query->result_array();

    }
    // public function site_maintenance($uid){

    //     if(empty($_POST["siteStatus"]) ) {
	// 		$status = 'N';
	// 	} else {
	// 		$status = 'Y';
	// 	}

	// 	$data = array(
	// 		'maintenance_status' => $status
	// 	);

	// 	$this->db->where('',);
	// 	$this->db->update('site_setting', $data);
	// 	return true;

    // }

}
