<!-- header -->
	<header>
		<img src="imgs/sport-icon.png" alt="Not available now">
		<div class="menu-wrapper">
			<div class="header-left">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php?c=booking">Booking</a></li>
					<li><a href="index.php?c=team">Team</a>
						<!-- <div class="sub-menu-team">
							<ul>
								<li><a href="">Create a team</a></li>
								<li><a href="">Team information</a></li>
							</ul>
						</div> -->
					</li>
					
					<?php 
                        session_id() || session_start();
                        if (!empty($_SESSION["firstname"])) {
                    ?>
					<li><a href="index.php?c=contact">Contact</a></li>
					<li><a href="index.php?c=booking&a=history">History</a></li>
					<?php  
						}
					?>
				</ul>
			</div>
			<div class="header-right">
				<ul>
					<?php 
                        session_id() || session_start();
                        if (!empty($_SESSION["firstname"])) {
                    ?>
                    <li><a href=""><?=$_SESSION['firstname'];?></a></li>
					<li><a href="index.php?c=auth&a=logout">Logout</a></li>

					 <?php
                        }
                        else {
                    ?>   

					<li><a href="index.php?c=login">Sign in</a></li>
					<li><a href="index.php?c=register">Register</a></li>
					<?php  
						}
					?>
					
				</ul>
			</div>
		</div>
	</header>