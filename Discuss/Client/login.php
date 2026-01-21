<div class="container">
    <h1 class="heading">Login </h1>

<form action="./server/request.php" method="post">

    <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter email">
  </div>

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
  </div>

  <button type="submit" name="login" class="btn btn-primary offset-sm-3 margin-bottom-15">Login</button>
</form>
</div>