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

    $Ba = $_POST['Ba'];
    $Bb = $_POST['Bb'];
    $Bc = $_POST['Bc'];
    $Bd = $_POST['Bd'];

    
    $query="INSERT INTO ChairEFC( CA1,CA2,CA3,CA4,CA5,CA6,CA7,CA8,CA9,CA10,CA11,CA12, CEa,CEb, CEc,CEd)
                VALUES('$B1','$B2','$B3','$B4','$B5','$B6','$B7','$B8','$B9','$B10','$B11','$B12', '$Ba','$Bb','$Bc','$Bd');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>