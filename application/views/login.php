<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

  
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <h2>ระบบแจ้งเตือนแผนผลิต</h2>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">เข้าสู่ระบบเพื่อเริ่มเข้าจัดการระบบ</p>
        <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>
            </div>
        <?php } ?>

        <form action="<?php echo base_url(); ?>loginMe" method="post">
          <div class="form-group has-feedback">
            <label>ผู้ใช้งาน:</label>
            <input type="text" class="form-control" placeholder="Email" name="email" required />
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label for="pwd">รหัสผ่าน:</label>
            <input type="password" class="form-control" placeholder="Password" name="password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <!-- <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>  -->
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-success btn-block btn-flat" value="ล็อกอิน" />
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
