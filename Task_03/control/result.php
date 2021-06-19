<?php

$validatename="";
$validateemail="";
$validatepassword="";
$validatecomment="";
$validategender="";
$validatehobby="";
$validatefile="";
$name=$email=$gender=$password=$comment="";
$v1=$v2=$v3="";


if(isset($_POST['button']))
{
    $name=$_REQUEST["fname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $comment=$_REQUEST["comment"];
    $gender=$_REQUEST["gender"];

    if(empty($name))
    {
        $validatename= "Please Enter Your Name";
    }
    else if ((strlen($name)<3))
    {
        $validatename= "Please Enter at least 3 characters";
    }

    if(empty($email))
    {
        $validateemail="Please Enter Your Email";
    }
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $validateemail= "Invalid Email";
    }

    if(empty($password))
    {
        $validatepassword= "Please Enter Your Password";
    }
    else if ((strlen($password)<8))
    {
        $validatepassword= "Please Enter Atleast 8 Characters";
    }

    if(empty($comment) || (strlen($comment)<20))
    {
        $validatecomment= "Please Enter Atleast 20 Characters";

    }
    else
    {
        $comment=$_REQUEST["comment"];
    }

    if(isset($_REQUEST["gender"]))
    {
        $validategender= $_REQUEST["gender"];
    }
    else
    {
        $validategender= "Please Select Your Gender";
    }

    if(!isset($_REQUEST["singing"]) && !isset($_REQUEST["dancing"]) && !isset($_REQUEST["reading"]))
    {
        $validatehobby = "Please Select at least one hobby";
    }
    else
    {
        if(isset($_REQUEST["singing"]))
        {
            $v1= $_REQUEST["singing"];
        }
        if(isset($_REQUEST["dancing"]))
        { 
            $v2= $_REQUEST["dancing"];
        }
        if(isset($_REQUEST["reading"]))
        {
            $v3= $_REQUEST["reading"];
        }
    }

}


?>