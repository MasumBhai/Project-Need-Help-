<?php
require_once "Header.php";
?>

<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "project_need_help"; /* Database name */
global $connection,$mysqli;
$connection = mysqli_connect($host, $user, $password,$dbname);
?>

<?php
function protect($string)
{
    $string = trim(strip_tags(addslashes($string)));
    return $string;
}
if (isset($_POST['create'])) {
    $username = protect($_POST['username']);
    $phonenumber = protect($_POST['phonenumber']);
    $email = protect($_POST['email']);
    $password = protect($_POST['password']);
    $cpassword = protect($_POST['cpassword']);

    //shobkisu match hobar pore
    $SqL = "SELECT email FROM registration where email = ?";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$SqL))
    {
        header("Location: RegisTration.php?error=sqlError");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rOwCounT = mysqli_stmt_num_rows($stmt);
        if($rOwCounT > 0)
        {
            header("Location: RegisTration.php?error=EmailAddressAlreadyExists");
            exit();
        }
        else{
            $SqL = "INSERT INTO registration (user_name,email,mobile_phn,pass_word) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt,$connection)){
                header("Location:RegisTration.php?error=sqlError");
                exit();
            }else{
                $hashPass = password_hash($password, PASSWORD_DEFAULT);
                $hashConfirmPass = password_hash($cpassword,PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$phonenumber,$hashPass);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $current_id = mysqli_insert_id($connection);
                //ekhane otp dibo
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }


}