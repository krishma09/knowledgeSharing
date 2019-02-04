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

<!-- Mirrored from www.extracoding.com/demo/html/adminise/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 09:18:03 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sub Categories</title>
<!--// Stylesheets //-->
<link href="assets/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />

	

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--// Javascript //-->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.accordion.js"></script>
<script type="text/javascript" src="assets/js/jquery.custom-scrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>



<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style>

.button {
    background-color: #F5F3F2; 
    border: none;
    color: #555555;
    padding: 5px 10px;
    
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 1px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    cursor: pointer;
}





</style>
</head>

<body>

<?php
include 'part1.php';
?>

<?php

$fk_cat_id=$_REQUEST['id'];
//$obj=new database();
$res2=$obj->getcatnamebyid($fk_cat_id);
while($row=mysqli_fetch_array($res2))
{
	$cat_name=$row["cat_name"];
}


?>
<div class="col-xs-12">
                            <div class="sec-box">
                               
                                <header>
                                    <h2 class="heading"><center><font size="5" color="black"><?php echo $cat_name.' '; ?> VIDEOS</font></center></h2>
                                </header>
                                <div class="contents">
                                    
                                    <div class="table-box">
                                    	<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
                                        <table class="display table" id="example">
                                           <thead>
                                                <tr>
                                                    <th><font size="3" color="blue"><b>Video</b></font></th>
                                                    <th><font size="3" color="blue"><b>Title</b></font></th>
                                                    <th><font size="3" color="blue"><b>Delete</b></font></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

<?php

	$res=$obj->getvideobycatid($fk_cat_id);
	
	while($row=mysqli_fetch_array($res))
	{
		$pk_v_id=$row["pk_v_id"];
		$v_img=$row["v_img"];
		//$v_video=$row["v_video"];
		$v_desc=$row["v_desc"];
		$path=$row["v_video"];
		$v_video="https://www.youtube.com/watch?v=$path";
		
		
	//	echo '<div class="column-1_2 sc_column_item sc_column_item_1 odd first">';
			echo '<tr>';
			echo '<td>';
			echo '<div class="sc_video_player">';
			echo '<a href="'.$v_video.'" class=" hover_icon hover_icon_play width_100per">';
			echo '<img height="100px" width="100px" src="'.$v_img.'"></a> </td>';
			echo '<td><h4 class="sc_title sc_title_regular margin_top_0 margin_bottom_075em">'.$v_desc.'</h4>';

			echo '</div></td>';
		//	echo '</div>';
			echo '<td><center><a href="videodel.php?id='.$row["pk_v_id"].'"><button type="button" class="btn btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></center></td>';
		echo '</tr>';
			
	}
	 
		

?>

 </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><input type="text" name="search_engine" value="Search Date" class="search_init" style="display:none" /></th>
                                                    <th><input type="text" name="search_browser" value="Search Title" class="search_init" /></th>
                                                   
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