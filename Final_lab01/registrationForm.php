<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$phn = $_POST['phn'];

if($fname =="" || $lname ==""){
    echo "Please enter the First name and Last name";
}
else if(strlen($email)<8 || !str_contains($email,'@')){
    echo "Please enter a valid email";
}
else if($pass == ""){
    echo "please enter the password";
}
else if(strlen($pass)<6){
    echo "Please enter a password more that 6 characters.";
}
else if($dob == ""){
    echo "Please enter the date of birth(dob).";
}
else if($phn == ""){
    echo "Please enter the phone number";
}
else if(!is_numeric($phn)){
    echo "Phone number must be numeric.";
}
else if(strlen($phn)<11){
    echo "Please enter a valid phone number";
}
else if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['gender'])) {
        echo "Please select one gender";
    }
}
else if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['dept'])) {
        echo "Please select the department.";
    }
}
else if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['skills'])) {
        echo "Please select at least one skills";
    }
}
else{
    echo "Registration Successful";
}

?>