<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-table"></i> ข้อมูลแผนผลิต
        <small>เพิ่ม / แก้ไขข้อมูล</small>
      </h1>
        <ol class="breadcrumb">
        <li><a href="<?php echo base_url();  ?>"><i class="fa fa-home"></i> หน้าหลัก</a></li>
        <li><a href="<?php echo base_url('plan');  ?>">ข้อมูลแผนผลิต</a></li>
        <li class="active">เพิ่มข้อมูล</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">รายละเอียดข้อมูลแผน</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->


                      <form role="form" id="addUser"  enctype="multipart/form-data"   action="<?php echo base_url('addNew_data'); ?>" method="post">
                        <div class="box-body">
                            <div class="row">
                                    <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Sc</label>
                                        <input type="text" class="form-control required" id="sc" name="sc">
                                    </div>



                                 <div class="form-group">
                                    <label for="comment">หมายเหตุ:</label>
                                    <textarea class="form-control required" name="comment" rows="5" id="comment"></textarea>
                                  </div>



                                <div class="form-group">
                                   <label for="comment">ไฟล์:</label>
                                   <input type="file" class="form-control required" name="userfile"  id="userfile">
                                 </div>
                               </div>


                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> บันทึก</button>
                            <button type="reset" class="btn btn-danger"><i class="fa fa-history"></i> ล้าง</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php

                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
                <?php } ?>
                <?php
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
