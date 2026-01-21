<div class="container">
    <h1 class="heading">Ask a Question </h1>

<form action="./server/request.php" method="post">

    <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
  </div>

    <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter Question"></textarea>
  </div>

    <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="category" class="form-label">Category</label>
   
    <?php include("category.php") ?>
    </select>
  </div>

 

  <button type="submit" name="ask" class="btn btn-primary offset-sm-3 margin-bottom-15">Ask A Question</button>
</form>
</div>