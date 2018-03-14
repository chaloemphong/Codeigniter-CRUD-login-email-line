<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>


    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>

  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>ระบบ</b>แจ้งเตือน</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ระบบ</b>แจ้งเตือน</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <i class="fa fa-history"></i>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $name; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $name; ?>
                      <small><?php echo $role_text; ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> แก้ไขรหัสผ่าน</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>หน้าหลัก</span></i>
              </a>
            </li>
           <!-- <li class="treeview">
              <a href="#" >
                <i class="fa fa-plane"></i>
                <span>New Task</span>
              </a>
            </li> -->
           
            <?php
            if($role != ROLE_ADMIN || $role != ROLE_MANAGER)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url('plan'); ?>" >
                <i class="fa fa-cloud-upload"></i>
                <span>แผนการผลิต</span>
              </a>
            </li>

            <?php }else{ ?> 
              <li class="treeview">
              <a href="<?php echo base_url('plan'); ?>" >
                <i class="fa fa-cloud-upload"></i>
                <span>แผนการผลิต</span>
              </a>
            </li>

            <?php
            }
            ?>

            <?php
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>จัดการผู้ใช้</span>
              </a>
            </li>
            
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>