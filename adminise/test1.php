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
<title> </title>

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


<?php
include 'part1.php';
?>



<div class="col-xs-12">
                            <div class="sec-box">
                               
                                <header>
                                    <h2 class="heading">Test</h2>
                                </header>
                                <div class="contents">
                                    
                                    <div class="table-box">
                                    	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
                                        <table class="display table" id="example">
                                            <thead>
                                                <tr>
													<th>Category</th>
                                                    <th>Question</th>
													<th>option 1</th>
													<th>option 2</th>
													
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
				/*	echo '<td>'.$row["t_option3"].'</td>';
					echo '<td>'.$row["t_option4"].'</td>';
					echo '<td>'.$row["t_answer"].'</td>';
					echo '<td><center><a href="deltest.php?id='.$row["pk_t_id"].'"><button style="background-color: red" type="button" class="btn btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></center></td>';*/
					echo '</tr>';
							
						}
						
			
						?>
						
                                            <tfoot>
                                                <tr>
                                                    <th><input type="text" name="search_engine" value="Search engines" class="search_init" /></th>
                                                    <th><input type="text" name="search_browser" value="Search browsers" class="search_init" /></th>
                                                    <th><input type="text" name="search_platform" value="Search platforms" class="search_init" /></th>
                                                    <th><input type="text" name="search_version" value="Search versions" class="search_init" /></th>
                                                    
                                                   
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
						
                                                
                                               
                                                   

<?php
include 'part2.php';
?>
</body>

</html>	