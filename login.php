<?php  include_once 'inc/head.php';?>
    <?php  include_once 'inc/header.php';?>
    <h1 class="text-center text-italic font-weight-bold my-5">Log In</h1>
    <div class="container my-5">
    	<h5 class="my-3">Please Fill Your Detail Carefully</h5>
    	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<p class="text-warning  my-4 font-weight-bold ">New User? <a href="signup.php" class="btn btn-primary float-right">Sign Up</a></p>
    </div>









<?php  include_once 'inc/footer.php';?>
            </body>

            </html>