<div class="container">
    <h1 class="heading">Question</h1>
    <div class="row">
    <div class="col-8">
    <?php 
    
    include("./common/db.php");
    $query = "select * from `question` where id=$qid";
    $result = $conn->query($query);
    $row=$result->fetch_assoc();
    $cid=$row['category_id']; 
    echo "<h4 class='margin-bottom-15 question-title'> Question : ".$row['title']."</h4>
     <p class='margin-bottom-15'>".$row['description']."<p>";
     include("answer.php");
    ?>
    <form action="./server/request.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo $qid ?>">
    <textarea name="answer" class="form-control margin-bottom-15" placeholder="Your Answer...."></textarea>
    <button class="btn btn-primary">Wright Your Answer</button>
    </form>
</div>
<div class="col-4">
    
    <?php

    $categoryQuery= "select name from `category` where id=$cid";  
    $categoryResult = $conn->query($categoryQuery);
    $categoryRow = $categoryResult->fetch_assoc();
   echo "<h1>".$categoryRow['name']."</h1>";


    $query = "select * from `question` where category_id=$cid and id!=$qid";
    $result = $conn->query($query);
    foreach($result as $row){
        $id = $row['id'];
        $title = $row['title'];
        echo "<div class='question-list'>
        <h4><a href='?q-id=$id'>$title</a></h4>
        </div>";
    }
    ?>
    </div>
</div>
</div>