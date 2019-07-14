<?php
    session_start();
    require_once('../../mysql_connect.php');
    
    
    
    $B1 = $_POST['B1'];
    $B2 = $_POST['B2'];
    $B3 = $_POST['B3'];

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];
    $Bc = $_POST['Bc'];
    $Bd = $_POST['Bd'];

    
    $query="INSERT INTO ChairEFD( DA1,DA2,DA3, DEa,DEb, DEcc,DEd)
                VALUES('$B1','$B2','$B3', '$Ba','$Bb','$Bc','$Bd');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>