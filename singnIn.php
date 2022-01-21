<?php
session_start();
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="icon" href="ms-icon.png">
    <title> تسجيل الدخول </title>
    <link rel="stylesheet" href="assets/css/sty.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
        .form-control{
            
            width: 70%;
        }
        .form-group{
            margin-top: 1%;
            margin-left: 40%;
            margin-right:40%;
        }
       button  {
        
        margin-left: 40%;
       }
       .checkbox {
        margin-left: 40%;
        }
        </style>
</head>
<body onload="pageloaded()">

<form name="Fname" id="Fid" method="get" action="home.php">
  <div class="form-group">
    <label for="exampleInputEmail1">الرجاء ادخال البريد الالكتروني </label>
    <input type="email" class="form-control" id="InputEmail1" placeholder="اسم المستخدم">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الرجاء ادخال الرقم السري </label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="الرقم السري">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الاسم الاول </label>
    <input type="password" class="form-control" id="InputFName" placeholder="الاسم الاول">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">اسم العائلة </label>
    <input type="password" class="form-control" id="InputLName" placeholder="اسم العائلة">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">الرقم الجامعي </label>
    <input type="password" class="form-control" id="InputID" placeholder="الرقم الجامعي">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رقم الجوال </label>
    <input type="password" class="form-control" id="InputPhon" placeholder="رقم الجوال">
  </div>
  </div>
  <button type="submit" class="btn btn-default">تسجيل دخول</button>
  <br>
  <br>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php require_once 'includes/footer.php'; ?>