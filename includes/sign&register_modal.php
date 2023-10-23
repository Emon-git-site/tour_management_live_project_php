
    <!-- signIn modal start here -->
<div class="modal fade" id="signin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title mx-auto" id="exampleModalLabel"><h3>User SignIn</h3></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <?php
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>hello!</strong> <?= $_SESSION['message']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> <?php
                    unset($_SESSION['message']);
                }
                ?>
      <div class="modal-body">
      <form action="functions/user_authentication.php" method="post">
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      
        <button type="submit" name="signin_btn" class="btn btn-primary">SignIn</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <!-- signIn modal end here -->
 
    <!-- regitstration modal start here -->
<div class="modal fade" id="registration_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title mx-auto" id="exampleModalLabel"><h3>User Regisgtration</h3></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <?php
                if(isset($_SESSION['message'])){ ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>hello!</strong> <?= $_SESSION['message']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> <?php
                    unset($_SESSION['message']);
                }
                ?>
      <div class="modal-body">
      <form action="functions/user_authentication.php" method="post">
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp" placeholder="Enter Full name">
        </div>
        <div class="form-group">
          <label for="mobile_number">Mobile Number</label>
          <input type="number" class="form-control" id="mobile_number" name="mobile_number" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      
        <button type="submit" name="user_register_btn" class="btn btn-primary">Register</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- registration modal end here -->

