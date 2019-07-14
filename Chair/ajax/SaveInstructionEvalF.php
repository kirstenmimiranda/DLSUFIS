<?php
    session_start();
    require_once('../../mysql_connect.php');
    
    
    
    $B1 = $_POST['B1'];
    $B2 = $_POST['B2'];
    $B3 = $_POST['B3'];
    $B4 = $_POST['B4'];
    $B5 = $_POST['B5'];
    $B6 = $_POST['B6'];
    $B7 = $_POST['B7'];

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];

    
    $query="INSERT INTO ChairEFF( A1,A2,A3,A4,A5,A6,A7, Ea,Eb)
                VALUES('$B1','$B2','$B3','$B4','$B5','$B6','$B7','$Ba','$Bb');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>