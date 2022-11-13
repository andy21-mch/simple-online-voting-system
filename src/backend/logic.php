<?php

function register($id, $firstname, $lastname, $email, $password, $age){
    $conn = connect();
    $sql = "INSERT INTO tbl_users ( id, first_name, last_name, email, password, age, role) VALUES ('$id','$firstname', '$lastname', '$email', '$password', '$age', 'user')";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
       return false;
    }
}


function login($email, $password){
    echo "Loging in....";
    
}

function logout(){
    echo "Logging out...";
}

function vote($idnumber, $vote){
    echo "Voting...";
}

function connect(){
   $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Voting";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        return $conn;
    }
}
