<?php
header('Content-type: text/html');
$logins_s = array('st' => 'st');
$logins_t = array('t1' => 't1','t2' => 't2');
/* Check and assign submitted Username and Password to new variable */
$Username = $_GET["user"];
$Password = $_GET["pw"];
$type = $_GET["userType"];
/* Check Username and Password existence in defined array */
if (isset($logins_s[$Username]) && $logins_s[$Username] == $Password && $type == "Student"){
  echo "Welcome To Ajax!";
  return;
}
if (isset($logins_t[$Username]) && $logins_t[$Username] == $Password && $type == "Tutor"){
  echo "Welcome To Ajax!";
  return;
}
header("HTTP/1.0 400 Login Failed");
echo "Invalid Credentials.";
?>
