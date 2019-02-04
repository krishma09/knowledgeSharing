 <!-- Header Top Navigation Start -->
<?php 
$obj=new database();
$res=$obj->getquecount(0);
while($row=mysqli_fetch_array($res))
{
$cnt=$row["cnt"];


}
$res=$obj->getanscount(0);
									while($row=mysqli_fetch_array($res))
									{
										$cnt1=$row["cnt"];
										
									}

?>
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
                        	<a href="#"><i class="glyphicon glyphicon-bell"></i>Notifications&nbsp;<span class="badge" style="background-color:tomato ;"><?php 

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