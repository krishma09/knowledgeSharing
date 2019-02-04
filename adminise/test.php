<?php
session_start();
include 'database.php';
$email=$_SESSION["adminemail"];
if($email=="")
 {
	 header('Location:index.php');	 
 }
?>

<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Test </title>

<link href="assets/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.accordion.js"></script>
<script type="text/javascript" src="assets/js/jquery.custom-scrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>

</head>

<body>


<center><a  href="dashboard.php"><font color="red" size="4">Back to Homepage</font> </a></center>

	<div class="col-md-offset-10">
	<a href="addtestque.php"><button type="button" class="btn btn-primary" aria-label="Left Align">Add Test Question</button></a>
	</div>

<div class="col-xs-12">
                            <div class="sec-box">
                               
                                <header>
                                    <h2 class="heading"><center><font size="5" color="black">TEST</font></center></h2>
                                </header>
                                <div class="contents">
                                    
                                    <div class="table-box">
                                    	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
                                        <table class="display table" id="example">
                                            <thead>
                                                <tr>
                                                    <th><font size="3" color="blue">Category</b></font></th>
                                                    <th><font size="3" color="blue">Question</b></font></th>
                                                    <th><font size="3" color="blue">option 1</b></font></th>
                                                    <th><font size="3" color="blue">option 2</b></font></th>
                                               	    <th><font size="3" color="blue">option 3</b></font></th>
													<th><font size="3" color="blue">option 4</b></font></th>
													<th><font size="3" color="blue">Answer</b></font></th>
													<th><font size="3" color="blue">Delete</b></font></th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
						
								$obj=new database();
							
							$res=$obj->getalltest();
							$cnt=mysqli_num_rows($res);
							
						while($row=mysqli_fetch_array($res))
						{
							
					echo '<tr>';
					echo '<td>'.$row["cat_name"].'</td>';
					echo '<td>'.$row["t_que"].'</td>';
				    echo '<td>'.$row["t_option1"].'</td>';
					echo '<td>'.$row["t_option2"].'</td>';
					echo '<td>'.$row["t_option3"].'</td>';
					echo '<td>'.$row["t_option4"].'</td>';
					echo '<td>'.$row["t_answer"].'</td>';
					echo '<td><center><a href="deltest.php?id='.$row["pk_t_id"].'"><button style="background-color: red" type="button" class="btn btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></center></td>';
					echo '</tr>';
							
						}
						
			
						?>
                                                
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><input type="text" name="search_engine" value="Search Category" class="search_init" /></th>
                                                    
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <script>
                                        	var asInitVals = new Array();			
											$(document).ready(function() {
												var oTable = $('#example').dataTable( {
													"oLanguage": {
														"sSearch": "Search all columns:"
													}
												} );
												
												$("tfoot input").keyup( function () {
													/* Filter on the column (the index) of this element */
													oTable.fnFilter( this.value, $("tfoot input").index(this) );
												} );
												
												
												
												/*
												 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
												 * the footer
												 */
												$("tfoot input").each( function (i) {
													asInitVals[i] = this.value;
												} );
												
												$("tfoot input").focus( function () {
													if ( this.className == "search_init" )
													{
														this.className = "";
														this.value = "";
													}
												} );
												
												$("tfoot input").blur( function (i) {
													if ( this.value == "" )
													{
														this.className = "search_init";
														this.value = asInitVals[$("tfoot input").index(this)];
													}
												} );
											} );

                                        </script>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        



</body>

</html>