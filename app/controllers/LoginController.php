<?php
namespace App\Controllers;
use App\Models\Login;

class LoginController extends BaseController{
    public $Login;
    public function __construct()
    {
        $this->Login=new Login();
    }

    public function index(){
        $this->render('login.index');
    }

    public function postLogin(){
        if(isset($_POST['submit'])){
            $errors=[];
            if(empty($_POST['email'])){
                $errors[]="Không được để trống email";
            }
            if(empty($_POST['password'])){
                $errors[]="Không được để trống mật khẩu";
            }
        }
        if(count($errors)>0){
            redirect('errors',$errors,'login');
        }else{
            $email=$_POST['email'];
            $password=$_POST['password'];
            $result=$this->Login->login($email,$password);
            if($result){
                $_SESSION['success']="Đăng nhập thành công";
                $_SESSION['auth']=$result;
//                var_dump($_SESSION['auth']);die;
//                checkLogin();
                header("Location:".BASE_URL);die;
            }else{
                $_SESSION['error']="Đăng nhập thất bại";
                header("Location:".BASE_URL.'login');die;
            }
        }
    }
    public function logout(){
        unset($_SESSION['auth']);
        header("Location:".BASE_URL.'login');die;
    }
}

