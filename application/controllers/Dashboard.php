<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Dashboard extends BaseController
{  

    public function __construct() {
        parent::__construct();
        $this->load->model('Crud_model');      
        $this->load->library('Line_notify');
        $this->isLoggedIn();  
       
    }

    
     

  //แสดงหน้าฟอร์มเพิ่มข้อมูล
      public function add(){
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
               
         $this->global['pageTitle'] = 'ระบบแจ้งเตือนแผนการผลิต : Plan/AddData';        
        $this->loadViews("admin/add_data", $this->global, NULL);
      }
    }
 



     function plan(){  //แบ่งหน้า + แสดงข้อมูล
         
        /*$config['base_url'] = base_url()."dashboard/plan/";
        $TotalRows = $this->Crud_model->record_count();
        $config["total_rows"] = $TotalRows;
        $config['per_page'] = 10;
        $config['num_links'] = 5;

        $total_row = $config["per_page"];

        $config['full_tag_open'] = '<ul class="pagination ">'; //code bootstrap
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data["Links"] = $this->pagination->create_links();*/
      
        $data["result"] = $this->Crud_model->getdata_row();  
        $data["num_item"] = $this->Crud_model->record_count(); //นับจำนวน Rows

        

          $this->global['pageTitle'] = 'ระบบแจ้งเตือนแผนการผลิต : Plan';       
          $this->loadViews("admin/plan", $this->global, $data);
         
    
  }
    

    //ตรวจสอบฟอร์มและบันบึกข้อมูล
    public function addNewdata(){

            //เซตค่าเวลาให้เป็นของประเทศไทย
            date_default_timezone_set("Asia/Bangkok");

            //เซต validation input ต่างๆ
            $this->form_validation->set_rules('sc','Sc','trim|required');
            $this->form_validation->set_rules('comment','comment','required');
            if (empty($_FILES['userfile']['name']))
            {
              $this->form_validation->set_rules('userfile', 'Document', 'required');
            }

            //ตรวจสอบ form_validation
            if($this->form_validation->run() == FALSE)
            {
                $this->add();  //ให้แสดงหน้าฟอร์มเพิ่มข้อมูลใหม่
            }
            else
            {
                //ตั้งค่าอัพโหลด
              $config['upload_path']   = './uploads/';
              $config['allowed_types'] = 'gif|jpg|png|pdf';
              $config['max_size']      = 0;
              $config['max_width']     = 0;
              $config['max_height']    = 0;
              $config['encrypt_name']  = "true";
              $this->load->library('upload', $config);

                  //ตรวจสอบการอัพโหลดไฟล์
                if ( ! $this->upload->do_upload('userfile')) {
                       $this->session->set_flashdata('error', 'เกิดข้อผิดพลาดไม่สามารถอัพโหลดข้อมูลได้');
                       $this->add();
                }else{
                      //สร้าง array เพื่อเก็บค่า
                      $add_new = array(
                         'date' => date('Y:m:d H:i'),
                         'time' => date('Y:m:d H:i'),
                         'sc' => $this->input->post('sc'),
                         'comment' => $this->input->post('comment'),
                         'file_pdf' => $this->upload->data('file_name'),
                     );
                   //ทำการส่งค่าและบันทึก
                  $add = $this->Crud_model->addNew_data($add_new);

                    //$data1 = $this->Crud_model->read_row();
                $q = $this->db->query("SELECT * FROM plan ORDER BY id_auto DESC LIMIT 1");

                if($q){
                 foreach ($q->result() as $row) {
                          $row1 = $row->sc;
                          $row2 = date('d/m/Y',strtotime($row->date));  
                          $row3 = $row->time;
                          $row4 = $row->file_pdf;
                          $row5 = base_url('uploads/').$row4;
                          $row6 = $row->comment;

                          $message = 'วันที่: '.$row2."\n".'เวลา: '.$row3."\n".'SC: '.$row1."\n".'link: '.$row5."\n".'หมายเหตุ: '.$row6;
                          $this->line_notify->send_line_notify($message,$token);

                         $config = Array(
                                'protocol' => 'smtp',
                                    'smtp_host' => 'mail.ex.com', //hostmail
                                    'smtp_port' => 25,
                                    'smtp_user' => 'chaloemphong@gmail.com', //user
                                    'smtp_pass' => 'password', //password
                                    'mailtype'  => 'html', 
                                    'charset' => 'utf-8',
                                    'wordwrap' => TRUE
                                );
                                
                                $this->load->library('email',$config);  
                                $this->email->from('email@gmail.com', 'ระบบแจ้งเตือนแผนการผลิตอัตโนมัติ');  //แจ้งเตือนผ่าน e-mail
                                $this->email->to('email@gmail.com');
                                $this->email->cc('');
                                $this->email->bcc('');
                                
                                $this->email->subject('ระบบแจ้งเตือนอัตโนมัติแผนการผลิต');

                                  $mes = '<html>
                                        <head>
                                            <title>ระบบแจ้งเตือนอัตโนมัติแผนการผลิต</title>
                                        </head>
                                        <body>
                                        <h4>ระบบแจ้งเตือนแผนการผลิตอัตโนมัติ</h4>
                                        <table>
                                            <tr>
                                                <td>วันที่:</td>
                                                <td><b>'.$row2.'</b></td>
                                            </tr>
                                            <tr>
                                                <td>เวลา:</td>
                                                <td><b>'.$row3.'</b></td>
                                            </tr>
                                            <tr>
                                                <td>SC:</td>
                                                <td><b>'.$row1.'</b></td>
                                            </tr>
                                            <tr>
                                                <td>หมายเหตุ:</td>
                                                <td><b>'.$row6.'</b></td>
                                            </tr>
                                             <tr>
                                                <td>link:</td>
                                                <td><b>'.$row5.'</b></td>
                                            </tr>

                                        </table>
               
                                        <p><b>System Administrator</b></p>

                                        </body>
                                    </html>';

          


                                $this->email->message($mes);
                                $this->email->attach($row5);                                
                                $this->email->send();
                        	}


                  }else {

                  }
                  if($add){


                    $this->session->set_flashdata('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
                  }else{
                    $this->session->set_flashdata('error', 'ไม่สามารถเพิ่มข้อมูลได้กรุณาตรวจสอบข้อมูล');
                  }

                redirect('plan/addnew',$data1);

               }


                redirect('plan/addnew');
            }

          }

        public function delete_row($id_auto,$id){   //ลบข้อมูล
          $delete1 = $this->Crud_model->select_data_table($id_auto); //เรียกใช้งานฟั่งชั้นเพื่อให้แสดงข้อมูลในrow จะให้แสดงชื่อไฟล์
          @unlink('./uploads/'.$delete1->file_pdf); //ลบไฟล์ในโฟรเดอร์
          $delete2 =   $this->Crud_model->delete_row($id_auto);

          if(!$delete2){
            $this->session->set_flashdata('success', 'ลบข้อมูลเรียบร้อยแล้ว');
          }else{
            $this->session->set_flashdata('error', 'ไม่สามารถลบข้อมูลได้');
          }
            redirect('plan');
          }


        public function edit_plan($id_auto)
        {
     
          $data1["result"] = $this->Crud_model->read_document($id_auto);


         $this->global['pageTitle'] = 'ระบบแจ้งเตือนแผนการผลิต : Plan/EditData';        
         $this->loadViews("admin/edit", $this->global, $data1, NULL);

        }



        public function show_plan($id_auto)
        {
     
          $data1["result"] = $this->Crud_model->read_document($id_auto);

         $this->global['pageTitle'] = 'ระบบแจ้งเตือนแผนการผลิต';        
         $this->loadViews("admin/show_data", $this->global, $data1, NULL);

        }

     /* public function edit($id)
      	{

      		$data['doc'] = $this->Document_model->read_document($id);

          $this->loadViews("admin/edit", $this->global, $data1, NULL);
      		$this->load->view('template/backheader');
      		$this->load->view('document/edit',$data);
      		$this->load->view('template/backfooter');
      	}*/
      

      public  function seve_edit_file($id_auto) {
              //ตั้งค่าอัพโหลด
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['max_size']      = 0;
            $config['max_width']     = 0;
            $config['max_height']    = 0;
            $config['encrypt_name']  = "true";
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('userfile')){

              $pdf_file = $this->input->post('file_pdf');

            }else {
              $show_file = $this->input->post('file_pdf'); // แสดงชื่อไฟล์
              $pdf_file = $this->upload->data('file_name');
                @unlink('./uploads/'.$show_file); //ลบไฟล์ในโฟรเดอร์

            }

              $data =  array(
                            'sc'=> $this->input->post('sc'),
                            'comment'=> $this->input->post('comment'),
                            'file_pdf'=> $pdf_file
                          );
                $id_auto = $this->input->post('id_auto');
                $update_new = $this->Crud_model->update($data,$id_auto);

                if(!$update_new){
                  $this->session->set_flashdata('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
                }else{
                  $this->session->set_flashdata('error', 'เกิดข้อผิดพลาดไม่สามารถแก้ไขข้อมูลได้กรุณาตรวจสอบ');
                }

              redirect('plan');

        }








}
