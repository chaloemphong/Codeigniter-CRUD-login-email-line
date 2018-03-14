<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-edit"></i> ข้อมูลแผนผลิต
        <small>รายละเอียดข้อมูลแผนการผลิต</small>
      </h1>
        <ol class="breadcrumb">
        <li><a href="<?php echo base_url();  ?>"><i class="fa fa-home"></i> หน้าหลัก</a></li>
        <li><a href="<?php echo base_url('plan');  ?>">ข้อมูลแผนผลิต</a></li>
        <li class="active">แก้ไขข้อมูล</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title"> วันที่: <?php echo date('d/m/Y',strtotime($result->date)); ?>    <i class="fa fa-clock-o"></i><?php echo $result->time; ?></h3>
                    </div>

                  
                    <form role="form" id="addUser"    action="<?php echo base_url(''); ?>" method="post">
                  <div class="box-body">
                      <div class="row">
                              <div class="col-md-8">
                                <input type="hidden" class="form-control required" id="file_pdf" name="file_pdf" value="<?php echo $result->file_pdf; ?>">
                              <input type="hidden" class="form-control required" id="id_auto" name="id_auto" value="<?php echo $result->id_auto; ?>">

                              <div class="form-group">
                                  <label>Sc</label>
                                  <input type="text" readonly="" class="form-control required" id="sc" name="sc" value="<?php echo $result->sc; ?>">
                              </div>


                           <div class="form-group">
                              <label for="comment">หมายเหตุ:</label>
                              <textarea readonly="" class="form-control required" name="comment" rows="5" id="comment" value="<?php echo $result->comment; ?>"><?php echo $result->comment; ?></textarea>
                            </div>

                         <div class="form-group">                            
  <a target="_blank" href="<?php echo base_url()."uploads/".$result->file_pdf; ?>"><img src="<?php echo base_url('uploads/cum.png'); ?>"  height="50" width="50"></a>
                      <a target="_blank" href="<?php echo base_url()."uploads/".$result->file_pdf; ?>"><label>คลิกไฟล์</label></a>
                           </div>


                         </div>
                      </div>
                  </div>
                  <div class="box-footer">
                   
                        <a href="<?php echo base_url('plan');  ?>"><button type="button" class="btn btn-danger"><i class="fa fa-history"></i> ย้อนกลับ</button></a>
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
