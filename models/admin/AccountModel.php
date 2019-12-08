<?php
require_once HOME_MODEL . DS . "BaseModel.php";

class AccountModel extends BaseModel
{
    public function getTK()
    {
        $conn = $this->connect();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        $password = md5($password);
        if ($username == "" || $password == "") {
            UtilityController::message('Tài khoản và Mật Khẩu không được để trống');
            UtilityController::gotoPage('login.php');
        } else {
            $sql = "select * from admin where username = '$username' and password = '$password' ";
            $query = mysqli_query($conn, $sql);
            $admin = mysqli_fetch_array($query);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows == 0) {
                UtilityController::message('Tài khoản hoặc Mật khẩu Không Đúng');
                UtilityController::gotoPage('login.php');
            } else {
//                $_SESSION['username'] = $username;
                $_SESSION["user_info"] = array(
                    "username"=>$admin[0]=["username"],
                    "password"=>$admin[0]=["password"],
                    "chucvu"=>$admin[0]=["chucvu"]
                );
                if($_SESSION["user_info"]["chucvu"]=1) {
                    $_SESSION["user_info"]=$username;
                    UtilityController::message('Admin Làm gì ở đây!');
                    UtilityController::gotoPage('index.php');
                }
                else{
                    UtilityController::message("Bạn Không Phải Quản Trị Viên");
                    UtilityController::gotoPage('login.php');
                }
            }
        }
    }

}