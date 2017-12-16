    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-bg-blue-grey">
                    <li><a href="javascript:void(0);"><i class="material-icons">home</i> Dashboard</a></li>
                </ol>
            </div>

            <?php if($this->ion_auth->is_admin()): ?>
                    <p>anda adalah admin</p>
            <?php endif ?>

            <?php if(!$this->ion_auth->is_admin() ): ?>
                    <p>anda bukan admin, anda adalah pengguna</p>
            <?php endif ?>

        </div>
    </section>