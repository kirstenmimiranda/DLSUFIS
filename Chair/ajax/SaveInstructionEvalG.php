<?php
    session_start();
    require_once('../../mysql_connect.php');
    
    
    
    $B1 = $_POST['B1'];
    $B2 = $_POST['B2'];
    $B3 = $_POST['B3'];

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];

    
    $query="INSERT INTO ChairEFG( A1,A2,A3,Ea,Eb)
                VALUES('$B1','$B2','$B3','$Ba','$Bb');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>