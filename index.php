<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>
    
    alert('message');

    </script>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student Management System</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <nav>
        <label class="logo">UNIVERSITY OF MALAWI</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>

</nav>

<div class="section1">

<label class="img_text">SCHOOL OF COMPUTING</label>
    <img class= "main_img" src="studentmanagemt.jpg">
</div>

<div class="container">

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class ="image" src="school.jpg">
</div>

<div class="col-md-8">
<h1>WELCOME TO SCHOOL OF COMPUTING</h1>

<p class="paragraph"> Unima has been commited to global learning long before it became n indispensble
    feature of contemporary. Established in 1964, we proudly stand as the 1st Nyasaland 
    medium school in Southern Africa to adopt both person edexcel and international curriculum
    (in O and A levels), drawing together students in a vibrant, academically,challenging and
    encouraging and encouraging environment where manifold viewpoints are prized and
    celebrated. 
    Unima has been commited to global learning long before it became n indispensble
    feature of contemporary. Established in 1964, we proudly stand as the 1st Nyasaland 
    medium school in Southern Africa to adopt both person edexcel and international curriculum
    (in O and A levels), drawing together students in a vibrant, academically,challenging and
    encouraging and encouraging environment where manifold viewpoints are prized and
    celebrated. 
    </p>
</div>

</div>
</div>
<center>
    <h1>LECTURERING</h1>
</center>
<div class="container">
<div class="row">
    <div class="col-md-4">
        <img class="school" src="school1.jpg">
        <h4>
            information systems students doing presentations
</h4>
</div>
<div class="col-md-4">
<img class="school" src="school2.jpg">
<p>
            in a vibrant, academically challenging, and 
            encouraging environment where manifold viewpoints
            are prized and celebrated.
        </p>
</div>
<div class="col-md-4">
<img class="school" src="school3.jpg">
<p>
            in a vibrant, academically challenging, and 
            encouraging environment where manifold viewpoints
            are prized and celebrated.
        </p>
</div>
</div>
</div>



<center>
    <h1>PROGRAMMES</h1>
</center>
<div class="container">
<div class="row">
    <div class="col-md-4">
      <img class="school" src="x1.jpg">
        <h3>INFORMATION SYSTEMS</h3></div>

<div class="col-md-4">
<img class="school" src="x2.jpg">
<h3>COMPUTER SCIENCE</h3>
</div>

<div class="col-md-4">
<img class="school" src="x3.png">
<h3>COMPUTER NETWORKING</h3>
</div>
</div>
</div>

<center>
    <h1 class="adm">Admission Form</h1>
</center>

<div align="center" class="admission_form">

    <form action="data_check.php" method="POST">
        <div class="adm_int">
            <label class="label_text">Name</label>
            <input class="input_deg" type="text" name="name">
         </div>

         <div>
            <label class="label_text">Email</label>
            <input class="input_deg" type="text" name="email">
         </div>

         <div>
            <label class="label_text">Phone </label>
            <input class="input_deg" type="text" name="phone">
         </div>

         <div class="adm_int">
            <label class="label_text">Message</label>
            <textarea class="input_txt" name="message"></textarea>
         </div>

         <div class="adm_int">
            <input class ="btn btn-primary" id="submit" type=
            "submit" value="apply" name="apply">
         </div>
</form>

</div>

<footer>
    <h3 class="footer_text">All rights @copyright reserved by web tech knowledge</h3>
</footer>

</body>
</html>