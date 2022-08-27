<?php
	
    //connect to database
    $conn = mysqli_connect('localhost', 'afoakwa', '123', 'election_project');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>