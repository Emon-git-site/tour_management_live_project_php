<!-- myprofile user modal -->
<div class="modal fade" id="myprofile_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title mx-auto" id="exampleModalLabel">
                    <h3>My profile</h3>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="h3 py-3" id="user_profile_update" style="color: red;"></div>
            <div class="modal-body">
                <form action="functions/user_profile_data_update.php" method="post">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $row['fullname'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile_number" name="mobile_number" value="<?= $row['mobile'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $row['email'] ?>">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>


                    <button type="submit" name="user_register_data_update_btn" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
        </div>
    </div>
</div>