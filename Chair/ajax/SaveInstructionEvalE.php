<?php
    session_start();
    require_once('../../mysql_connect.php');
    
    
    
    $B1 = $_POST['B1'];
    $B2 = $_POST['B2'];
    $B3 = $_POST['B3'];
    $B4 = $_POST['B4'];

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];
    $Bc = $_POST['Bc'];

    
    $query="INSERT INTO ChairEFE( A1,A2,A3,A4, Ea,Eb, Ec)
                VALUES('$B1','$B2','$B3', '$B4','$Ba','$Bb','$Bc');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>