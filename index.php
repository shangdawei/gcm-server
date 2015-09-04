<!DOCTYPE html>
<html>

    <head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>GCM-Server</title>
		<meta name="description" content="A simple GCM Server in PHP" />

	    <link href="/bs/css/bootstrap.min.css" rel="stylesheet" media="screen">

	  	<script type="text/javascript" src="/js/jquery.js"></script>
	  	<script type="text/javascript" src="/bs/js/bootstrap.min.js"></script>

    </head>


<body style="font-size: 110%; background: #FCFCFC; font-size: 18px;">

	<?php
	include_once './mysql.php';
	$_MESSAGE_NOTIFICATION_TEXT = 100;
	$registration_ids = array();
 	?>


	<!-- Title -->
    <div class="container col-xs-12 col-md-12 col-lg-12" style="margin-top: 30px; margin-left: 100px; text-align: left;">
    	<div class="row">
    		<h1>GCM-Server</h1>
		</div>
	</div>
	<!-- Title -->


    <div class="container col-xs-12 col-md-12 col-lg-12" style="margin-top: 50px; margin-left: 100px; text-align: left;">
	    
    	<div class="row col-xs-12 col-md-12 col-lg-12">

			<?php

				$sql = new mysql( "127.0.0.1", "gcmserver", "gcmserver", "gcmserverdb");
				$res = $sql->query("SELECT * FROM `devices`;");
			?>


			<form role="form">

				<table class="table table-striped">

					<thead>
			            <th>
			            	Registration&nbsp;Id
			            </th>
						<th width="200px">
			            	Device&nbsp;Type
			            </th>
			
					</thead>

					<tbody>
						<?php
						while ($row = mysql_fetch_assoc($res)) {
					
							echo "<tr>";
					
								echo "<td>";
									echo $row['registration_id'];
								echo "</td>";
					
								echo "<td>";
									echo $row['device_type_id'];
								echo "</td>";
					
							echo "</tr>";
					
					
							$registration_ids[] = $row['registration_id'];
					
						}
						?>
					</tbody>

				</table>

			</form>

    	</div>

    </div>





    <div class="container col-xs-12 col-md-12 col-lg-12" style="margin-top: 50px; margin-left: 100px; text-align: left;">

		<!-- Message to devices -->
    	<div class="row col-xs-6 col-md-6 col-lg-6">
			<?php $action = $_MESSAGE_NOTIFICATION_TEXT; ?>
			<form role="form" id="1" name="" method="post" action="/send_message.php">
			  	<div class="form-group">
					<label for="message">Send message to devices</label>
			  	</div>
			  	<div class="form-group">
		        	<textarea class="form-control" rows="3" name="message" cols="25" placeholder="Type message here"></textarea>
			  	</div>
				<?php
				foreach ($registration_ids as $key => $value) {
					?>
				  	<div class="form-group">
				  		<?php
						$regid = htmlspecialchars($value);
						echo "<input type='hidden' name='registration_ids[]' value='$regid'>";
						?>
				  	</div>
				  	<?php
				}
				echo "<input type='hidden' name='action' value='$action'>";
				?>
		        <input type="submit" class="btn btn-info" value=" Send message "/>
			</form>
		</div>
		<!-- Message to devices -->

    </div>


	<br>
	<br>
	<br>
	<br>


</body>

</html>
