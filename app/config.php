<?php

    define('DSERVER', 'localhost'); # Database server
    define('USERNAME', 'root'); # Database username
    define('PASSWORD', ''); # Database password
    define('DBNAME', 'user_data'); # Database name

    # connect to MySQL database 
    $conn = mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);
    
    # Check database connection == TRUE
    if($db === false)
    {
        die("Error: connection error. " . mysqli_connect_error());
    }

?>
