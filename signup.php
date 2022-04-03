<?php
$connection = mysqli_connect('localhost','root',"",'fb');
$id = $_POST['id'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];
$check_data = mysqli_query($connection,"SELECT * FROM userdetails WHERE phoneoremail = '$phoneoremail'");
$check = mysqli_num_rows($check_data);
if($check > 0){
    echo "Email already exists";
}
else{
    $input = mysqli_query($connection,"INSERT INTO userdetails(id,Firstname,Lastname,phoneoremail,password) VALUES ('$id','$firstname','$lastname','$phoneoremail','$password')");
    if($input){
        echo "Signup Successful";
        echo "$firstname $lastname";
    }
    else{
        echo "Error occured";
    }
}
?>