<?php

class Jobs_model extends CI_model {
     public function __construct ()
     {
          $this->load->database();
     }

     public function get_summ($dbname)
     {
        $count = $this->db->count_all($dbname);
        return $count;
     }

     public function get_jobs($job_id = FALSE)
	{
        if ($job_id === FALSE)
        {
                $this->db->order_by("job_id","asc");
                $query = $this->db->get('jobs');
                return $query->result_array();
        }

        
        $query = $this->db->get_where('jobs', array('job_id' => $job_id));
        return $query->row_array();
	}
    //Get jobs by status
    
        public function set_jobs($job_id = FALSE)
    {
         $data = array(
            'job_id' => $job_id,
            'name' => $this->input->post('name'),            
            'street' => $this->input->post('street'),
            'townzip' => $this->input->post('townzip'),
            'phone' => $this->input->post('phone')
            );

        $this->db->where('job_id', $job_id);
        return $this->db->replace('jobs', $data, $job_id);
    }
    public function get_jobs_status($status) //abslutely  should not have my dates hardcoded into the query but just for the sake of testing
    {
//        $query = $this->db->query("select * from jobs where status = '$status' and Date_Format(date_req, \"%m\")>=1 and Date_Format(date_req, \"%y\")>=14");
        $query = $this->db->query("select *, (select name from custies where jobs.cust_id = custies.cust_id) as name from jobs where status = '$status' and Date_Format(date_req, \"%m\")>=7 and Date_Format(date_req, \"%y\")>=17");

        

        return $query->result_array();
    }
}
