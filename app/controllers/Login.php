<?php  

class Login
{
    use Controller;
    public function index()
    {     if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $user = new User;
            
           $row = $user->first($_POST['email']);
            redirect('home');


            $data['errors'] = $user->errors;
        }
        
        $this->view('login');
    }
}

