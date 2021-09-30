<?php
    $con = mysqli_connect('localhost', 'root', 'crypto.lawrence18', 'db_vetmed-login');

    if(!$con)
    { 
        echo "
            <script>
                alert('Connection failed.');
            </script>
        ";

        die('Please check your connection!'.mysqli_error());
    }
