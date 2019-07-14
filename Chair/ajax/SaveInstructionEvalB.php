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

    $B8 = $_POST['B8'];
    $B9 = $_POST['B9'];
    $B10 = $_POST['B10'];
    $B11 = $_POST['B11'];
    $B12 = $_POST['B12'];
    $B13 = $_POST['B13'];
    $B14 = $_POST['B14'];
    $B15 = $_POST['B15'];
    $B16 = $_POST['B16'];
    $B17 = $_POST['B17'];
    $B18 = $_POST['B18'];

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];
    $Bc = $_POST['Bc'];
    $Bd = $_POST['Bd'];
    $Be = $_POST['Be'];
    $Bf = $_POST['Bf'];
    $Bg = $_POST['Bg'];


    
    $query="INSERT INTO ChairEFB( A1,A2,A3,A4,A5,A6,A7,A8,A9,A10,A11,A12, A13, A14, A15,A16,A17,A18, Ea,Eb, Ec,Ed,Ee,Ef,Eg )
                VALUES('$B1','$B2','$B3','$B4','$B5','$B6','$B7','$B8','$B9','$B10','$B11','$B12','$B13','$B14','$B15','$B16','$B17','$B18','$Ba','$Bb','$Bc','$Bd','$Be', '$Bf', '$Bg');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>