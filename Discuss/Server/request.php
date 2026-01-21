<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {
    // $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("Insert into `user`
(`id`,`username`,`email`,`password`,`address`)
values(NULL,'$username','$email','$password','$address')
");

    $result = $user->execute();
    $user->insert_id;

    if ($result) {

        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
        header("location: /discuss");
    } else {
        echo "try again";
    }

} else if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = 0;
    $query = "select * from `user` where email='$email' and password='$password' ";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {

        foreach ($result as $row) {

            $username = $row['username'];
            $user_id = $row['id'];
        }
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        header("location: /discuss");
    } else {
        echo "new user not registered";
    }

} elseif (isset($_GET['logout'])) {
    session_unset();
    header("location: /discuss");

} else if (isset($_POST['ask'])) {
    // print_r($_POST);
    // print_r($_SESSION);

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("Insert into `question`
(`id`,`title`,`description`,`category_id`,`user_id`)
values(NULL,'$title','$description','$category_id','$user_id')
");

    $result = $question->execute();
    $question->insert_id;

    if ($result) {
       

        // $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" =>  $user->insert_id];
        header("location: /discuss");
    } else {
        echo "try again";
    }
}else if(isset($_POST["answer"])){
     $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $query = $conn->prepare("Insert into `answer`
(`id`,`answer`,`question_id`,`user_id`)
values(NULL,'$answer','$question_id','$user_id')
");

    $result = $query->execute();
    if ($result) {
       header("location: /discuss?q-id=$question_id");
    } 
      else {
        echo "try again";
    }

}
    else if(isset($_GET['delete'])){
     $qid = $_GET['delete'];
     $query = $conn->prepare("delete from question where id=$qid");
     $result = $query->execute();
      if ($result) {
       header("location: /discuss");
    } 
    }
    else {
        echo "try again";
    }


?>