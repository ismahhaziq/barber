<?php 
        //Start Session
        session_start();
        
        //Create Constant to Store Non Repeating Values
        define('SITEURL', 'http://ebarber.epizy.com/barber/');
        define('LOCALHOST', 'sql209.epizy.com');
        define('DB_USERNAME', 'epiz_29207214');
        define('DB_PASSWORD', '4qPFriC2j9Cyjt');
        define('DB_NAME', 'epiz_29207214_barber');

        //3. Execute Query and Save Data in Database                                           
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
                                //^^
    //nanti kena kaji balik ayat ni    //here if you doing your web project, put the original database name, eg: username, password
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting Database
                                            //^^
                                        //database name

?>
