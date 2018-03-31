<?php
if(isset($_POST['submit'])){

$con = mysqli_connect("localhost","root","","nsih");
$collegename= mysqli_real_escape_string($con,$_POST['collegename']);
$about= mysqli_real_escape_string($con,$_POST['about']);
$location=mysqli_real_escape_string($con,$_POST['location']);
$facilities = mysqli_real_escape_string($con,$_POST['facilities']);
$courses = mysqli_real_escape_string($con,$_POST['courses']);
$entrance = mysqli_real_escape_string($con,$_POST['entrance']);
$placements = mysqli_real_escape_string($con,$_POST['placements']);

