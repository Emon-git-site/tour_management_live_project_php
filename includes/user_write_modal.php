<?php
require_once "includes/connec.php";

if(isset($_POST['submit_issue'])){
    $email = $_SESSION['user_email'] ;
    $issue = mysqli_escape_string($con, $_POST['issue']);
    $description = mysqli_escape_string($con, $_POST['description']);
    $issue_insert_query = "INSERT INTO `issue`(`useremail`, `issue`, `description`) VALUES
                             ('$email', '$issue', '$description')";
    
     $issue_insert_query_run = mysqli_query($con, $issue_insert_query);

}
?>
 
 <!-- Modal Logout user-->
 <div class="modal fade" id="user_writeus_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">How can we help you?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                  <label for="colors">Select Issue:</label>
                <select id="colors" class="form-control" name="issue">
                    <option value="booking issue">Booking Issue</option>
                    <option value="Cancellation">Cancellation</option>
                    <option value="Refund">Refund</option>
                    <option value="other">other</option>
                </select>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                </div>
                <input type="submit" name="submit_issue" class="btn btn-primary" value="SUBMIT">
                    </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>