<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-table"></i> ข้อมูลแผนผลิต
        <small>เพิ่ม, แก้ไข, ลบ</small>
      </h1>
          <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');  ?>"><i class="fa fa-home "></i>หน้าหลัก</a></li>
         <li class="active">ข้อมูลแผนผลิต</li>
      </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12">
      <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <a class="btn btn-success btn-sm" href="<?php echo base_url('plan/addnew'); ?>"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>
                </div>
            </div>
      <div class="col-md-8">
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
      </div>

        </div>


              <div class="box box-success">
                <div class="box-header">
                    <h4 class="box-title">รายการทั้งหมด</h4>                    
                </div>
                <div class="col-md-12">
                <div class="box-body table-responsive no-padding">
                  <table id="example1" class="table table-hover table-bordered">
                      <thead style="background-color: #cccccc;">
                    <tr>
                      <th width="4%">#</th>
                      <th width="7%" class="text-center">วันที่</th>
                      <th width="7%" class="text-center">เวลา</th>
                      <th width="7%" class="text-center">Sc</th>
                      <th width="30%" class="text-center">หมายเหตุ</th>
                      <th width="10%" class="text-center">เปลี่ยนแปลง</th>
                      <th width="8%" class="text-center">สถานะ</th>
                      <th width="9%" class="text-center">จัดการข้อมูล</th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php
                   
                        $i = 0;
                        foreach($result as $record)
                        { $i++;
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td class="text-center"><?php echo  date("d-m-Y", strtotime($record->date)) ; ?></td>
                      <td class="text-center"><?php echo $record->time; ?></td>
                      <td class="text-right"><?php echo $record->sc; ?></td>
                      <td><?php echo $record->comment; ?></td>
                      <td></td>
                      <td class="text-center">
                       <?php if ($record->statun == ''){ ?>

                                  <span class="label label-warning">รอดำเนินการ</span>

                             <?php  } elseif($record->statun == 1) { ?>

                             <span class="label label-success">อนุมัติแผน</span>
                              
                             <?php }  ?>
                      </td>
                      <td class="text-center">
                      
                        
                      <?php
                       if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
                        {
                      ?>
                          

                            <a href='<?php echo base_url()."dashboard/show_plan/".$record->id_auto; ?>'><button type="button" class="btn btn-success  btn-xs"><i class="fa  fa-search"></i></button></a>

                        <a href="<?php echo base_url()."dashboard/edit_plan/".$record->id_auto; ?>"><button type="button" class="btn btn-warning  btn-xs"><i class="fa fa-edit"></i></button></a>


                       <a href="  JavaScript:if(confirm('ต้องการลบข้อมูลหรือไม่ ?')==true){window.location='<?php echo base_url('plan/delete/'.$record->id_auto);?>';}"><button type="button" class="btn btn-danger  btn-xs"><i class="fa fa-trash-o"></i></button></a>

                      <?php
                      }else{
                      ?>
                          <a target="_blank" href='<?php echo base_url()."uploads/".$record->file_pdf; ?>'><button type="button" class="btn btn-success  btn-xs"><i class="fa  fa-search"></i></button></a>
                        <a href="<?php echo base_url()."dashboard/edit_plan/".$record->id_auto; ?>"><button type="button" class="btn btn-primary  btn-xs"><i class="fa fa-edit"></i></button></a>
                       
                     <?php } ?>
                      </td>
                    </tr>

                    <?php
                      }
                    
                    ?>
                     </tbody>
                  </table>

                </div><!-- /.box-body -->
              </div>
                <div class="box-footer clearfix">
                  <!-- Show pagination links -->
                    <?php/* echo $Links ;*/ ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

