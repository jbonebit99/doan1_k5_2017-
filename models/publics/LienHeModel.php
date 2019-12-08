<?php
require_once HOME_MODEL . DS . "BaseModel.php";

class LienHeModel extends BaseModel
{
    public function ThemLienHe()
    {
        $conn = $this->connect();
        $ngaythang = getdate();
        $email = $_POST['email'];
        $ngaygui = $ngaythang["month"] . " " . $ngaythang["mday"] . " , " . $ngaythang["year"];
        if (isset($_POST['submit'])) {
            try {
                $sql = "insert into lienhe (email,ngaygui)
            values ('$email','$ngaygui')";
                mysqli_query($conn, $sql);
            }catch (Exception $e)
            {

            }

        }
    }
}