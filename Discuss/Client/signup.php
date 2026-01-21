<div class="container">
    <h1 class="heading">Signup </h1>
    <form method="post" action="./Server/request.php">
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">UserName</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="enter email">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
        </div>
        <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label">User Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="enter address">
        </div>
        <button type="submit" name="signup" class="btn btn-primary offset-sm-3 margin-bottom-15">SignUp</button>
    </form>
</div>