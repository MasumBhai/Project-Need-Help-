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
if (isset($_POST['create'])){
    $username    = protect($_POST['username']);
    $phonenumber = protect($_POST['phonenumber']);
    $email       = protect($_POST['email']);
    $password    = protect($_POST['password']);
    $cpassword   = protect($_POST['cpassword']);

    $username    = mysqli_real_escape_string($connection,$username);
    $password    = mysqli_real_escape_string($connection,$password );
    $cpassword   = mysqli_real_escape_string($connection,$cpassword );
    //$phonenumber = mysqli_real_escape_string($connection,$phonenumber);
    $phone_number= ctype_digit($phonenumber);
    $email       = filter_var($email,FILTER_SANITIZE_EMAIL);

    //$hashFormat_blowfish = "$2y$10$";
    $hashFormat_sha_512 = '$6$rounds=5000$';
    $salt 				= 'my_name_is_masum_i_am_an_average_student_with_low_CG';
    $hashF_and_salt 	= $hashFormat_sha_512 . $salt;
    //$pass             = urlencode($password);
    $password  			= crypt($password,$hashF_and_salt);
    $cpassword 			= crypt($cpassword,$hashF_and_salt);
    $phonenumber 		= crypt($phonenumber,$hashF_and_salt);

//    $selectresult = $mysqli("SELECT 1 FROM registration WHERE email = '$email'") or die($mysqli->error);
//    //$selectresult = mysqli_query($connection,$slquery);
//    $numemail     = mysqli_num_rows($selectresult);
//
//    if($numemail > 0)
//    {
//        echo $msg  = 'Your email already exists.Please put unique email address otherwise Masum Production will be Angry and Delete your account';
//        die($mysqli->error);
//    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo $msg  = 'Are you mocking with me? This is an invalid email!!'."<br>"."I Know cause Masum Production programmed me.";
        die($mysqli->error);
    }
    if(!ctype_digit($_POST['phonenumber']))
    {
        echo $msg  = "Phone number must be digit otherwise Masum Production will Delete your account";
        die($mysqli->error);
    }
    if(strlen($_POST['phonenumber']) != 11)
    {
        echo $msg  = "You have given me wrong phone number.Masum Production programmed me !"."<br>"."So Give your actual phone-number";
        die($mysqli->error);
    }
    if($password != $cpassword)
    {
        echo $msg  = "passwords doesn't match.Fill this carefully otherwise Masum Production will be Angry and Delete your account";
        die($mysqli->error);
    }
    if(!preg_match("#[A-Z]+#",$_POST['password']))
    {
        echo $msg  = "Password must contain at least one capital letter otherwise Masum Production will labeled this account as vulnarable Delete your account";
        die($mysqli->error);
    }
    if(!preg_match("#[a-z]+#",$_POST['password']))
    {
        echo $msg  = "Password must contain at least one small letter otherwise Masum Production will labeled this account as vulnarable and Delete your account";
        die($mysqli->error);
    }
    if(!preg_match("#[0-9]+#",$_POST['password']))
    {
        echo $msg  = "Password must contain at least one digit otherwise Masum Production will labeled this account as vulnarable and Delete your account";
        die($mysqli->error);
    }
    if(strlen($_POST['password'])<8)
    {
        echo $msg  = "Set a strong password at least 8 chars/digits otherwise Masum Production will labeled this account as vulnarable.";
        die($mysqli->error);
    }
    $signIn_time = gmdate("D, d M Y  H:i:s", time()+6*60*60)." GMT";
    //$logIn_time = gmdate("D, d M Y  H:i:s", time()+6*60*60)." GMT";
    $query    = "INSERT INTO registration (id,user_name ,email ,mobile_phn ,pass_word ,profile_pic ,Sign_in_Time ,visitors_ip ,visitors_location , visitors_comment ) 
                                    VALUES ('','$username', '$email', '$phonenumber', '$password','','$signIn_time' ,'','','')";
    $result     = mysqli_query($connection,$query);
    if($result)
    {
        echo $msg     = "User Registered Successfully."."<br>"."Greetings from Masum Production!!!"."You are a valuable member for Masum Production's House";
        //$signing_time = gmdate("D, d M Y  H:i:s", time()+6*60*60)." GMT")
    }
header("location:LogIn.php");
}

?>
