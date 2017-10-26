<?php
class Custies extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Custies_model');
                $this->load->helper('url_helper');
                $this->load->helper('html');
                $this->load->helper('Authit');

        }

        public function index($cust = NULL) //search for existing customer
        {
            if(!logged_in()) redirect('auth/login');

            $data = array(
                'name' => $this->input->post('name'),
                'street' => $this->input->post('street'),
                'phone' => $this->input->post('phone'),
                'townzip' => $this->input->post('townzip')
                );

            $data['title'] = "Search";

            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $data['custies'] = $this->Custies_model->get_custies();

            $this->load->helper('form');

            if(!$data['name'] and !$data['street'] and !$data['townzip'] and !$data['phone'])

            {

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/index', $data);
                $this->load->view('templates/footer');
            }

            else
            
            {

                if ($data['name'])
                {
                    $field='name';
                    $value=$data['name'];

                } else if($data['street'])
                {
                    $field='street';
                    $value=$data['street'];
                } else if($data['townzip'])
                {
                    $field='townzip';
                    $value=$data['townzip'];
                } else
                {
                    $field = 'phone';
                    $value = $data['phone'];
                }


                $data['custies'] = $this->Custies_model->get_by($value,$field);
                if (count($data['custies'])==0)
                {
                    $data['status'] = "alert-success";
                    $data['message'] = "Search Returned No Customers";
                }

                
                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/index', $data);
                $this->load->view('templates/footer');
            }
        }

        public function view($slug = NULL)
        {
            if(!logged_in()) redirect('auth/login');

            $data['custies_item'] = $this->Custies_model->get_custies($slug);
            $data['job'] = $this->Custies_model->get_cust_jobs($slug);
            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $this->load->helper('form');
            $this->load->library('form_validation');

            if (empty($data['custies_item']))
            {
                    show_404();
            }

            $data['title'] = $data['custies_item']['name'];

            $this->load->view('templates/cheader', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('custies/view', $data);

            $this->load->view('jobs/jobsby_cust', $data);

            //$this->load->view('jobs/dates', $data); //work on integrating bootstrap / jquery datepicker
            $this->load->view('templates/footer');
        }

        public function edit($slug = NULL) //Edit existing customer record
        {
            if(!logged_in()) redirect('auth/login');

            $data['custies_item'] = $this->Custies_model->get_custies($slug);
            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            if (empty($data['custies_item']))
            {
                    show_404();
            }

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('street','Street','required');
            $this->form_validation->set_rules('townzip','Townzip','required');

            if ($this->form_validation->run() === FALSE)

            {
                   $data['title'] = $data['custies_item']['name'];

                   $this->load->view('templates/cheader', $data);
                   $this->load->view('templates/nav', $data);
                   $this->load->view('custies/edit', $data);
                   $this->load->view('templates/footer');

            }
            else 
            {
                    

                $result1 = $this->Custies_model->set_custies($slug);
                if($result1 === false)
                {
                    $data['error']= $this->db->error_message();
                    $data['err_no']= $this->db->error_number();

                  $this->load->view('templates/cheader', $data);
                  $this->load->view('templates/nav', $data);
                  $this->load->view('templates/failure', $data);
                  $this->load->view('templates/footer');              
                  //and/or log the error message/ number 
                }
                else  //succesfull update
                {

                    $data['title'] = $data['custies_item']['name'];

                    $this->load->view('templates/cheader', $data);
                    $this->load->view('templates/nav', $data);
                    $this->load->view('custies/view', $data);
                    $this->load->view('success');
                    $this->load->view('templates/footer');

/*                            header("Refresh: 3;url=".site_url()."/custies");        */
                }
            }
        }

        public function newq($slug = NULL) //Create new customer record
        {

            if(!logged_in()) redirect('auth/login');

            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('street','Street','required');
            $this->form_validation->set_rules('townzip','Townzip','required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['title'] = "Add New Customers";


                $this->load->view('templates/header', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/new');
                $this->load->view('templates/footer');

            } else {

                $data['cust_id'] = $this->Custies_model->new_custies();

                $data['custies_item'] = $this->Custies_model->get_custies($data['cust_id']);
                $data['title'] = "Who?";
                $data['status'] = "alert-success";
                $data['message'] = "Successfully added new customer ".$data['custies_item']['name'];

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/view', $data);
                $this->load->view('success');
                $this->load->view('templates/footer');
            }  
        }

        public function cdelete($cust)
        {
            if(!logged_in()) redirect('auth/login');

            $data['custies_item'] = $this->Custies_model->get_custies($cust);
            $data['job'] = $this->Custies_model->get_cust_jobs($cust);            

            $data['count'] = count($data['job']);

            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('cust_id','Cust_id','required');

            if (empty($data['custies_item']))
            {
                    show_404();
            }

            if ($this->form_validation->run() === FALSE)
            {

                $data['title'] = $data['custies_item']['name'];

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/view', $data);

                //$this->load->view('jobs/jobsby_cust', $data);

                $this->load->view('custies/dcust', $data);

                //$this->load->view('jobs/dates', $data); //work on integrating bootstrap / jquery datepicker

                $this->load->view('templates/footer');

            } else {

                $this->Custies_model->del_cust($cust);

                $data['custies'] = $this->Custies_model->get_custies();
                $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
                $data['summary'] = $this->Custies_model->get_summ('custies');

                $data['title'] = 'Customers';
                $data['status'] = "alert-success";
                $data['message'] = "Customer has been deleted!";

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                //$this->load->view('custies/view', $data);
                $this->load->view('custies/index');
                $this->load->view('templates/footer');
                
            }
        }

// Controller element specifically dealing with Jobs

        public function jedit($cust,$job) //Edit specific customer job
        {
            if(!logged_in()) redirect('auth/login');

            $data['custies_item'] = $this->Custies_model->get_custies($cust);
            $data['job_item'] = $this->Custies_model->get_job($job);
            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $this->load->helper('form');
            $this->load->library('form_validation');

            if (empty($data['custies_item']))
            {
                    show_404();
            }

            $this->form_validation->set_rules('date_req','Date Requested','required');
            $this->form_validation->set_rules('date_sched','Date Scheduled','required');
            $this->form_validation->set_rules('price','Price','required');
            $this->form_validation->set_rules('bagging','Bagging','required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['title'] = $data['custies_item']['name'];

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/view', $data);

                $this->load->view('jobs/job_edit', $data);
                $this->load->view('templates/footer');

            } else {


                $result1 = $this->Custies_model->set_job($data['job_item']['job_id']);

                if($result1 === false)
                {
                    $data['error']= $this->db->error_message();
                    $data['err_no']= $this->db->error_number();

                  $this->load->view('templates/cheader', $data);
                  $this->load->view('templates/nav', $data);
                  $this->load->view('templates/failure', $data);
                  $this->load->view('templates/footer');              
                  //and/or log the error message/ number 
                }
                else  //succesfull update
                {

                    $data['job'] = $this->Custies_model->get_cust_jobs($cust);

                    $data['title'] = $data['custies_item']['name'];

                    $this->load->view('templates/cheader', $data);
                    $this->load->view('templates/nav', $data);
                    $this->load->view('custies/view', $data);
                    $this->load->view('jobs/jobsby_cust', $data);
                    $this->load->view('templates/footer');
                }
            }


        }

        public function newj($cust) //Create a new job for specific customer
        {
            if(!logged_in()) redirect('auth/login');

            $data['custies_item'] = $this->Custies_model->get_custies($cust);
            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

            $this->load->helper('form');
            $this->load->library('form_validation');

            if (empty($data['custies_item']))
            {
                    show_404();
            }


            $this->form_validation->set_rules('date_sched','Scheduled','required');
            $this->form_validation->set_rules('price','Price','required');
            $this->form_validation->set_rules('bagging','Bagging','required');

            if ($this->form_validation->run() === FALSE)
            {
                $data['title'] = $data['custies_item']['name'];

                $this->load->view('templates/cheader', $data);
                $this->load->view('templates/nav', $data);
                $this->load->view('custies/view', $data);

                $this->load->view('jobs/job_new', $data);

                //$this->load->view('jobs/dates', $data); //work on integrating bootstrap / jquery datepicker

                $this->load->view('templates/footer');

            } else {

                    $data['job_id'] = $this->Custies_model->new_job($cust);
                    $data['job'] = $this->Custies_model->get_cust_jobs($cust);

                    $data['title'] = $data['custies_item']['name'];
                    $data['status'] = "alert-success";
                    $data['message'] = "Successfully added new job for ".$data['custies_item']['name'];

                    $this->load->view('templates/cheader', $data);
                    $this->load->view('templates/nav', $data);
                    $this->load->view('custies/view', $data);                       
                    $this->load->view('jobs/jobsby_cust', $data);
                    $this->load->view('templates/footer');
            }   
        }

        public function old_index() //retired in place of customers w/ search capabilties
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Customers';

            $data['custies'] = $this->Custies_model->get_custies();
            
            $data['jobs_summ'] = $this->Custies_model->get_summ('jobs');
            $data['summary'] = $this->Custies_model->get_summ('custies');

        //    echo CI_VERSION;
        //    $data['custies_item']['cust_id']=22;

            
/*                $this->load->view('templates/nav_li', $data);
            $this->load->view('templates/header', $data);
            $this->load->view('custies/index');*/

            $this->load->view('templates/cheader', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('custies/index', $data);
            $this->load->view('templates/footer');
        }
}