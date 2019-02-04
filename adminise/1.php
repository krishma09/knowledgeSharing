
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
                            <a href="categories.php" class="layouts">Tutorials</a>
                            
                        </li>
                        <li>
                        <a href="#ui-elements" class="ui-elements">Question</a>
                        <ul>
						    <li><a href="quetoapp.php">Questions to be Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge" style="background-color:tomato;"><?php 

									$obj1=new database();
									$res=$obj1->getquecount(0);
									while($row=mysqli_fetch_array($res))
									{
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

									
									$res=$obj1->getanscount(0);
									while($row=mysqli_fetch_array($res))
									{
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
                       $res=$obj1->getuserbyid($email);                                          																			
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
                
