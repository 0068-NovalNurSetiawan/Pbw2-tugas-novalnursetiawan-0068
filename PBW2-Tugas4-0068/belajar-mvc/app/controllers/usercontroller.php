<?php 
require_once 'app/models/user.php';

class usercontroller
{
    private $usermodel;

    public function __construct($dbconnection)
    {
        $this->usermodel = new user($dbconnection);
    }

    public function index()
    {
        
        $users = $this->usermodel->getAllUsers();
        require_once 'app/views/userview.php';
    }

    public function show($id)
    {
        
        $user = $this->usermodel->getUserById($id);
        require_once 'app/views/userdetail.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $this->usermodel->updateUser($id, $name, $email);
            header('Location: index.php');
        } else {
            
            $user = $this->usermodel->getUserById($id);
            require_once 'app/views/useredit.php';
        }
    }

    public function delete($id)
    {
        
        $this->usermodel->deleteUser($id);
        header('Location: index.php');
    }
}
?>
