<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss project</title>
    <?php include('./client/commonfile.php'); ?>
</head>
<body>
 <?php
 session_start();
 include('./client/header.php');
//  if(isset($_GET['signup']) && !$_SESSION ['user']['username']) {
     if(isset($_GET['signup'])) {
     include('./client/signup.php'); 
 } 
//  else if(isset($_GET['login'])  && !$_SESSION['user']['username']){
 else if(isset($_GET['login'])) {
     include('./client/login.php'); 
 } else if(isset($_GET['ask'])){
    include('./client/ask.php'); 
 }
 else if(isset($_GET['q-id'])){
    $qid = $_GET['q-id'];
    include('./client/details.php'); 
 }else if(isset($_GET['c-id'])){
   $cid = $_GET['c-id'];
    include("./client/question.php");
 }
 else if(isset($_GET['u-id'])){
   $uid = $_GET['u-id'];
    include("./client/question.php");
 }
  else if(isset($_GET['latest'])){
    include("./client/question.php");
 }
  else if(isset($_GET['search'])){
   $search = $_GET['search'];
    include("./client/question.php");
 }
else{
   include("./client/question.php");
}
  ?>
 

</body>
</html>