<?php
require_once HOME_MODEL.DS."BaseModel.php";

class LoginController
{
    public function Login()
    {
        $bmdl = new BaseModel();
        $con = $bmdl->connect();
        if (isset($_POST['but_submit'])) {

            $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
            $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

            if ($uname != "" && $password != "") {

                $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
                $result = mysqli_query($con, $sql_query);
                $row = mysqli_fetch_array($result);

                $count = $row['cntUser'];

                if ($count > 0) {
                    $_SESSION['uname'] = $uname;
                    UtilityController::gotoPage("admin/index.php");
                } else {
                    echo "Invalid username and password";
                }

            }

        }
    }
    public function Logout() {
        session_destroy();
        UtilityController::gotoPage("Login.php");
    }
}