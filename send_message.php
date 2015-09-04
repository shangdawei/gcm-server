<!DOCTYPE html>
<html>

    <head>
        
        <meta http-equiv="refresh" content="1;url=http://localhost">
        <script type="text/javascript">
            window.location.href = "http://localhost"
        </script>
	
    </head>


	<body>

		<?php		
		include_once './gcm.php';
		
		if ( isset($_POST['registration_ids'])) {
		    $gcm = new GCM();
		    		
		    $registration_ids   = $_POST['registration_ids'];
		    $action 			= $_POST['action'];
		    $message 			= $_POST['message'];
		    $url 				= $_POST['url'];
		          
		    $message = array(	
		    				"message_action" => $action,
		    				"message_text" 	 => $message,
		    				"message_url" 	 => $url
		    				);
		
		    $result = $gcm->send_notification( $registration_ids, $message);		
		}
		?>

	</body>

</html>
