<div class="header-top">
				<div class="row align-items-center ">
					<div class="col-lg-12 col-sm-6 col-6 justify-content-around d-flex ">
						<ul>
							<li><a href="index.php"><i class="fa fa-home fa-2x"></i></a></li>
							<li><a href="?email=<?=  base64_encode($_SESSION['user_email']) ?>" data-toggle="modal" data-target="#myprofile_user">My Profile</a></li>
							<li><a href="?email=<?=  base64_encode($_SESSION['user_email']) ?>" data-toggle="modal" data-target="#change_password_user">Change Password</a></li>
							<li><a href="tour_history.php">MY Tour History</a></li>
							<li><a href="issue_ticket.php">Issue Tickets</a></li>
						</ul>
						<ul>
							<?php 
							require_once "includes/connec.php";
							$email            = $_SESSION['user_email'] ;
							$select_query     = "SELECT * FROM `user` WHERE `email` = '$email' ";
							$select_query_run = mysqli_query($con, $select_query);
							$row              = mysqli_fetch_assoc($select_query_run);
							?>
							<li><a href="#">Welcome: <?= $row['fullname'] ?></a></li>
							<li><a href="#" data-toggle="modal" data-target="#logoutModal_user" >Logout</a></li>
						</ul>
					</div>
				
				</div>
			</div>