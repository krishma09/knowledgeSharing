

<!-- Wrapper Start -->
<div class="wrapper">
	<div class="structure-row">
        <!-- Sidebar Start -->
        <aside class="sidebar">
        	<div class="sidebar-in">
                <!-- Sidebar Header Start -->
                <header>
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="dashboard.php"><img src="assets/images/knw5.png" alt="Adminise" /></a>
                    </div>
                    <!-- Logo End -->
                    <!-- Toggle Button Start -->
                    <a href="#" class="togglemenu">&nbsp;</a>
                    <!-- Toggle Button End -->
                    <div class="clearfix"></div>
                </header>
                <!-- Sidebar Header End -->
                <!-- Sidebar Navigation Start -->
                <nav class="navigation">
                    <ul class="navi-acc" id="nav2">
                        <li>
                        <a href="dashboard.php" class="dashboard">Dashboard</a>
                        
                    </li>
                        <li>
                            <a href="#layouts" class="layouts">Tutorials</a>
						<ul>	
                            <li><a href="video.php">Video Tutorials</a></li>
							<li><a href="categories.php">Normal Tutorials</a></li>
                            
                        </ul>
                        </li>
                        <li>
                        <a href="#ui-elements" class="ui-elements">Question</a>
                        <ul>
						    <li><a href="quetoapp.php">Questions to be Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge" style="background-color:tomato;"><?php 

									$obj=new database();
									$res=$obj->getquecount(0);
									while($row=mysqli_fetch_array($res))
									{
										$cnt=$row["cnt"];
										echo $row["cnt"];

									}
							   ?></span></a></li>
							   
							<li><a href="approvedque.php">Approved Questions</a></li>
							<li><a href="disapprovedque.php">Disapproved Questions</a></li>
                            
                        </ul>
                    </li>
                        <li>
                            <a href="#mailbox" class="forms">Answer</a>
                            <ul>
                               <li><a href="anstoapp.php">Answers to be Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge" style="background-color:tomato;"><?php 

								
									$res=$obj->getanscount(0);
									while($row=mysqli_fetch_array($res))
									{
										$cnt1=$row["cnt"];
										echo $row["cnt"];

									}
							   ?></span></a></li>
							   <li><a href="approvedans.php">Approved Answers</a></li>
							   <li><a href="disapprovedans.php">Disapproved Answers</a></li>
							   
							   
                                </ul>
                        </li>
                        
						<li>
                            <a href="discussion1.php" class="loginoptions">Discussion Forum</a>
                            
                        </li>
						
                        <li>
                            <a href="test.php" class="pages">Test</a>
                            
                        </li>
                        <li>
                            <a href="userdetails1.php" class="extras">User Details</a>
                           
                        </li>
                        <li>
                            <a href="feedback1.php" class="charts">Feedback</a>
                        </li>
                        
                    </ul>
                    <div class="clearfix"></div>  
                </nav>
                <!-- Sidebar Navigation End -->
                <!-- Shadow Start -->
                <span class="shadows"></span>
                <!-- Shadow End -->
            </div>
        </aside>
        <!-- Sidebar End -->
		
        <!-- Right Section Start -->
        
		<div class="right-sec">
		
            <!-- Right Section Header Start -->
            <header>
                <!-- User Section Start -->
                <div class="user">
                    <figure>

						
						
	 <a href=""><img src="../project-final/user_images/<?php
						//include 'database.php';
					
						$email=$_SESSION["adminemail"];
                       $res=$obj->getuserbyid($email);                                          																			
		while($row=mysqli_fetch_array($res))
		{
			echo $row["u_pic"];
			$name=$row["u_name"];
																								
		}
		?>" height=100px width=100px></a>
						
						
						
                    </figure>
                    <div class="welcome">
						
						<h3 style="color: white;">
                        <?php  

						
						echo $name;
						?>
						
						</h3>
                     
                    </div>
					
					</div>
                
                <!-- User Section End -->
                <!-- Search Section Start -->
             <!--  <div class="search-box">
                    <input type="text" placeholder="Search Anything" />
                    <input type="submit" value="go" />
					 
                </div>-->
               <!-- Search Section End -->
                <!-- Header Top Navigation Start -->
				<div class="row">
				<div class="col-md-offset-5">
                <nav class="topnav">
                    <ul id="nav1">
					<li class="tasks">
                        	<a href="viewdiscussion.php"><i class="glyphicon glyphicon-comment"></i>Discussion Forum</a>
                            
                        </li>
                        <li class="tasks">
                        	<a href="queview.php"><i class="glyphicon glyphicon-share"></i>Question-Answer</a>
                            
                        </li>
                        <li class="notifi">
                        	<a href="#"><i class="glyphicon glyphicon-bell"></i>Notifications &nbsp;<span class="badge" style="background-color:tomato ;"><?php 

									$ans=$cnt+$cnt1;
									echo $ans;
							   ?></span></a>
                            <div class="popdown">
                            	<div class="notificationlist">
                                	<?php
								
								
											echo '<ul>';
											echo '<li>';
                                        	echo '<a href="quetoapp.php"><h6>Questions to be Approved : &nbsp;<span class="badge" style="background-color:tomato ;"> '.$cnt.'</span></h6></a>';
                                           echo '</li>';
											echo '</ul>';

									
											echo '<ul>';
											echo '<li>';
                                        	echo '<a href="anstoapp.php"><h6>Answers to be Approved : &nbsp;<span class="badge" style="background-color:tomato ;"> '.$cnt1.'</span></h6></a>';
                                           echo '</li>';
											echo '</ul>';

									
                                	
									?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                       
                        <li class="settings">
                        	<a href="#"><i class="glyphicon glyphicon-wrench"></i>Settings</a>
                            <div class="popdown popdown-right settings">
                            	<nav>
                                	<a href="viewprofile.php"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                                    <a href="editprofile.php"><i class="glyphicon glyphicon-pencil"></i>Edit Profile</a>
                                    <a href="changepassword.php"><i class="glyphicon glyphicon-edit"></i>Change Password</a>
									<a href="addadmin.php"><i class="glyphicon glyphicon-plus-sign"></i>Add new Admin</a>
                                    <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Log out</a>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </nav>
				</div>
                <!-- Header Top Navigation End -->
                <div class="clearfix"></div>
            </header>
            <!-- Right Section Header End -->
            <!-- Content Section Start -->
            <div class="content-section">
                <div class="container-liquid">
                    <div class="row">
						<h3>
						
						
						
						
						
						
						