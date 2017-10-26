<?php

class Custies_model extends CI_model {
     public function __construct ()
     {
          $this->load->database();
     }

     public function get_summ($dbname)
     {
        $count = $this->db->count_all($dbname);
        return $count;
     }

     public function get_custies($cust_id = FALSE)
	{
        if ($cust_id === FALSE)
        {
                //$this->db->order_by("name","asc");
                //$query = $this->db->get('custies');*/
                
                $query = $this->db->query("SELECT cust_id, name,street,townzip,phone,(select count(*) from jobs where custies.cust_id = jobs.cust_id)as numb from custies order by name ASC");


                return $query->result_array();
        }

        
        $query = $this->db->get_where('custies', array('cust_id' => $cust_id));
        return $query->row_array();
	}

    public function get_by($value, $field)
    {

            $query = $this->db->query("SELECT cust_id, name,street,townzip,phone,(select count(*) from jobs where custies.cust_id = jobs.cust_id)as numb from custies where locate('$value',$field) order by name ASC"); //select * from custies where locate('$value',$field) order by name ASC
            return $query->result_array();

    }

    public function set_custies($cust_id = FALSE)
    {
         $data = array(
            'cust_id' => $cust_id,
            'name' => $this->input->post('name'),            
            'street' => $this->input->post('street'),
            'townzip' => $this->input->post('townzip'),
            'phone' => $this->input->post('phone')
            );


        $query_result = $this->db->replace('custies', $data);

          if(!$query_result) {
             $this->error = $this->db->_error_message();
             $this->errorno = $this->db->_error_number();
             return false;
          }

        return $query_result;
    }

    public function new_custies()
    {
         $data = array(
            'name' => $this->input->post('name'),            
            'street' => $this->input->post('street'),
            'townzip' => $this->input->post('townzip'),
            'phone' => $this->input->post('phone')
            );

         $this->db->insert('custies', $data);
         return $this->db->insert_id();
    }

    //Search customer database using any
    public function find_cust()
    {
        $data = array(
           'name' => $this->input->post('name'),            
           'street' => $this->input->post('street'),
           'townzip' => $this->input->post('townzip'),
           'phone' => $this->input->post('phone')
           );

        
        $this->db->select('*');
        $this->db->from('custies');
        $this->db->like($data);

        return $this->db->get()->result_array();
        //return $this->db->get_compiled_select();

    }

    public function del_cust($cust_id)
    {
        $this->db-> where('cust_id', $cust_id);
        return $this->db-> delete('custies');
    }

    //Get jobs for the customer id given
    public function get_cust_jobs($cust_id=FALSE)
    {
        $status= $this->input->post('status');
        
        $query = $this->db->get_where('jobs', array('cust_id' => $cust_id));
        return $query->result_array();
    }

    public function get_job($job_id=FALSE)
    {
        $query = $this->db->get_where('jobs', array('job_id' => $job_id));

        return $query->row_array();
    }

    public function set_job($job_id = FALSE)
    {
        $today = new Datetime();


         $data = array(
            'job_id' => $job_id,
            'cust_id' => $this->input->post('cust_id'),            
            'date_req' => $this->input->post('date_req'),
            'date_sched' => $this->input->post('date_sched'),
            'price' => $this->input->post('price'),
            'bagging' => $this->input->post('bagging'),
            'sweeping' => $this->input->post('sweeping'),
            'status' => $this->input->post('status'),
            'notes' => $this->input->post('notes')
            );

         if (strpos($data['status'],'done') != FALSE) 
         {
            $data['date_comp'] = $today->format('Y-m-d');

         } else {
            $data['date_comp'] = NULL;

         }

        $query_result = $this->db->replace('jobs', $data);

          if(!$query_result) {
             $this->error = $this->db->_error_message();
             $this->errorno = $this->db->_error_number();
             return false;
          }

        return $query_result;
    }

    public function new_job($cust_id)
    {
        $data = array(
           'cust_id' => $cust_id,
           'date_req' => $this->input->post('date_req'),            
           'date_sched' => $this->input->post('date_sched'),
           'price' => $this->input->post('price'),
           'bagging' => $this->input->post('bagging'),
           'sweeping' => $this->input->post('sweeping'),
           'status' => $this->input->post('status'),
           'notes' => $this->input->post('notes')
           );

        $this->db->insert('jobs', $data);
        return $this->db->insert_id();
    }

}
