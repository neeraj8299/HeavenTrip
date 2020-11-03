<?php

    $con=mysqli_connect('localhost','root','hrhk','DreamTrip');

    $name=$_POST['lname'];
    $phone=$_POST['lphone'];
    $email=$_POST['lemail'];
    $destination=$_POST['ldestination'];

    $query="INSERT INTO `User`(`Name`, `Phone`, `email`, `Destination`) VALUES ('$name','$phone','$email','$destination')";
    mysqli_query($con,$query) or Die("Failed To connect");

    
?>