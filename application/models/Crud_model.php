<?php
class Crud_model extends CI_Model{

  public function record_count() {   //นับข้อมูลทั้งหมด
    $query =  $this->db->count_all("plan");
   return $query;
  }

     public function record_status()
    {
        $this->db->where('statun =', "0");
        $query = $this->db->get('plan');
        return $query->num_rows();
    }

    public function select_data_table($id_auto){    //แสดงข้อมูล
      $this->db->select('*');
      $this->db->from('plan');
      $this->db->where('id_auto',$id_auto);

      $query = $this->db->get();
      if($query->num_rows()>0)
      {
        $data = $query->row();
        return  $data;
      }
      return false;
    }


    public  function addNew_data($add_new)  ///เพิ่มข้อมูลใหม่
    {
        if ($this->db->insert("plan", $add_new)) {
           return true;
        }
    }



    public function getdata_row() { //แบ่งหน้า
      $query = $this->db->query("select * from plan order by id_auto DESC");
      if($query->num_rows() > 0){
        foreach ($query->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }
      return false;
     }

      public  function  delete_row($id_auto)
      {
       $this->db->delete('plan', array('id_auto' =>$id_auto));
      }

    public function read_row()
    {
      $this->db->select_max('id_auto');
      $this->db->from('plan');
      $query = $this->db->get();
      return $query->result();
    }

    public function update($data,$id_auto)
      {
      $this->db->set($data);
      $this->db->where("id_auto",$id_auto);
      $this->db->update("plan",$data);
      }


      public  function read_document($id_auto){
        $this->db->select('*');
        $this->db->from('plan');
        $this->db->where('id_auto',$id_auto);
        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
          $data = $query->row();
          return $data;
        }
        return FALSE;
      }



       function planListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('plan');
        if(!empty($searchText)) {
            $likeCriteria = "(date  LIKE '%".$searchText."%'
                            OR  sc  LIKE '%".$searchText."%'
                            OR  statun  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('id_auto');
        $query = $this->db->get();

        return $query->num_rows();
    }


      function planListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('plan');
        if(!empty($searchText)) {
           $likeCriteria = "(date  LIKE '%".$searchText."%'
                            OR  sc  LIKE '%".$searchText."%'
                            OR  statun  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('id_auto');
        $this->db->limit($page, $segment);
        $query = $this->db->get();

        $result = $query->result();
        return $result;
    }






}
?>
