<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('Mainmodel');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('gcm');
                $this->load->database();
                
            $query = $this->db->query("SELECT * FROM test;");
            $ncount=  $query->num_rows();
            echo $ncount."</br>";
            //while ($query)
            
            
            for($i=0; $i< $ncount; $i++){
                echo $i."</br>";
                echo var_dump($query->row($i));
            }
         //   echo var_dump($query->result());
            
            
	}

	public function recycler(){
		$id= $this->input->get('userid');
		$key= $this->input->get('key');
		$start= $this->input->get('start');
		$end= $this->input->get('end');
		$veersion= $this->input->get('version');

		//$data= $_POST['hi'];

		$hi= $this->Mainmodel->simple();
     echo $hi;
		//echo $id." ".$key." ".$start." ".$end." ".$veersion;
	}




        
        public function gcm(){
            
            $this->load->view('gcm');
        }
         public function test(){
            
            $this->load->view('test');
        }
}
