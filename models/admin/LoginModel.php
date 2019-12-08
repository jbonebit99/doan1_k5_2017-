<?php


class LoginModel extends BaseModel
{
    public function getUser(){
       $conn = $this -> connect();


// username và password được gửi từ form đăng nhập
        $username = $_POST['myusername'];
        $password = $_POST['mypassword'];

// Xử lý để tránh MySQL injection
        $myusername = stripslashes($username);
        $mypassword = stripslashes($password);
        $username = mysqli_real_escape_string($username);
        $password = mysqli_real_escape_string($password);

        $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
        if ($count == 1) {
            $_SESSION["user_info_admin"];
        } else {
            UtilityController::message("Sai Ten Dang Nhap");
        }

    }
}