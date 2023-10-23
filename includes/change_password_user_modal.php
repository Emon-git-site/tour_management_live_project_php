<!-- myprofile user modal -->
<div class="modal fade" id="change_password_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h5 class="modal-title mx-auto" id="exampleModalLabel">
                    <h3>Change Password</h3>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          
            <div class="modal-body">
                <form action="functions/user_password_update.php" method="post">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="text" class="form-control" id="current_password" name="current_password"  placeholder="Enter current password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="number" class="form-control" id="new_password" name="new_password"  placeholder="Enter new password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="conform_password">Conform Password</label>
                        <input type="conform_password" class="form-control" id="conform_password" name="conform_password" placeholder="Enter conform password" autocomplete="off" >
                    </div>
                   

                    <button type="submit" name="user_password_update_btn" class="btn btn-primary" >UPDATE</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
