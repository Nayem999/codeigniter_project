<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('users_model');
        // $this->logged_in();
    }
    
    private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }
    
    public function login()
    {
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $this->load->view('header', $data);
            $this->load->view('users/login', $data);
            $this->load->view('footer', $data);
        } 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $user = $this->users_model->login($email, $password);
            
            if($user){
                $userdata = array(
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
                
                redirect('dashboard');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('users/login');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('users/login');
    }


    public function signup()
    {
        $data['title'] = "Sign Up";

        $this->form_validation->set_rules('first_name','first name','trim|required');
        $this->form_validation->set_rules('last_name','last name','trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','confirm password','required|matches[password]');
        
        $this->form_validation->set_error_delimiters('<div class="error">','</div>');


        if($this->form_validation->run()==FALSE){
            $this->load->view('users/signup',$data);
        }else{
            $database=array(
                "first_name"=>$this->input->post('first_name',TRUE),
                "last_name"=>$this->input->post('last_name',TRUE),
                "email"=>$this->input->post('email',TRUE),
                "password"=>md5($this->input->post('password',TRUE)),
                "active"=>1,
                 "created_at"=>date('Y:m:d H:i:s',time())
            );
            $this->users_model->save($database);
            $this->session->set_flashdata('message','Registration Successfully');
            redirect('users/login');
        }

        $this->form_validation->set_rules('submit','first name','trim|required');
    }



public function upload()
    {
        $this->logged_in();

$dat['title']='File Upload';

$config['upload_path']          = './uploads/';
$config['allowed_types']        = 'gif|jpg|png';
$config['max_size']             = 10000000;


$this->load->library('upload', $config);


$this->upload->initialize($config);
if ( ! $this->upload->do_upload('userfile'))
{
    if (isset($_FILES['userfile'])){
        $dat['error']=$this->upload->display_errors();
    }
        $this->load->view('users/upload',$dat);
}
else
{
    $user_id=$this->session->userdata('id');
    $uploaddata = $this->upload->data();
//  echo "<pre>";print_r($uploaddata);

        $filename=$uploaddata['file_name'];
        $userdata=array(
            'profile_photo'=>$filename
        );
    
        $this->users_model->upload($user_id, $userdata);

        // $this->load->view('dashboard',$uploaddata);
        redirect('dashboard');
}






        
    }

}
?>