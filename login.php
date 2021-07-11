<?php

session_start();


$conn=mysqli_connect("localhost","root","","registrationform");


if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    else   
        echo "Successfully Connected";
        echo "<br>";

    if($_SERVER['REQUEST_METHOD']=="POST") {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];

        $sql="INSERT INTO `user` (`name`,`email`,`password`,`phone`) VALUES ('$name','$email','$password','$phone')";

        $query=mysqli_query($conn,$sql);

        // if the query is inserted successfully.

        if($query){
            echo "Successfully inserted user information..";
            echo "<br><br>";
            //printing the details of user
            echo "The user details are :";
            echo "<br><br>";
            echo "Name = $name";
            echo "<br>";
            echo "E-mail = $email";
            echo "<br>";
            echo "Phone= $phone";
            echo "<br>";
            
        }
        else{
            echo "oops! Error Occurred";
        }
    }






?>