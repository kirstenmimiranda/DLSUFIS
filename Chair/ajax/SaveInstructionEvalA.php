<?php
// if(isset($_POST['clientTypeID']) && isset($_POST['clientName']) && isset($_POST['emailAddress']) && isset($_POST['mobileNo']) && isset($_POST['telephoneNo'])){
    session_start();
    require_once('../../mysql_connect.php');
    
    
    
    $A1 = $_POST['Instructiona1'];
    $A2 = $_POST['Instructiona2'];
    $A3 = $_POST['Instructiona3'];
    $A4 = $_POST['Instructiona4'];
    $A5 = $_POST['Instructiona5'];
    $A6 = $_POST['Instructiona6'];
    $A7 = $_POST['Instructiona7'];
    $A8 = $_POST['Instructiona8'];
    $A9 = $_POST['Instructiona9'];
    $A10 = $_POST['Instructiona10'];
    $A11 = $_POST['Instructiona11'];
    $A12 = $_POST['Instructiona12'];
    $A13 = $_POST['Instructiona13'];
    $A14 = $_POST['Instructiona14'];
    $A15 = $_POST['Instructiona15'];
    $A16 = $_POST['Instructiona16'];
    $A17 = $_POST['Instructiona17'];
    $A18 = $_POST['Instructiona18'];
    $A19 = $_POST['Instructiona19'];
    $A20 = $_POST['Instructiona20'];
    $A21 = $_POST['Instructiona21'];
    $A22 = $_POST['Instructiona22'];
    $A23 = $_POST['Instructiona23'];
    $A24 = $_POST['Instructiona24'];
    $A25 = $_POST['Instructiona25'];
    $Ea = $_POST['AEvala'];
    $Eb = $_POST['AEvalb'];
    $Ec = $_POST['AEvalc'];
    $Ed = $_POST['AEvald'];
    $Ee = $_POST['AEvale'];
    $Ef = $_POST['AEvalf'];
    $Eg = $_POST['AEvalg'];
    
    $query="INSERT INTO ChairEFA( A1,A2,A3,A4,A5,A6,A7,A8,A9,A10,A11,A12, A13, A14, A15,A16,A17,A18, A19,A20,A21,A22,A23,A24,A25, AEa,AEb, AEc,AEd,AEe,AEf,AEg )
                VALUES('$A1','$A2','$A3','$A4','$A5','$A6','$A7','$A8','$A9','$A10','$A11','$A12','$A13','$A14','$A15','$A16','$A17','$A18','$A19','$A20','$A21','$A22','$A23','$A24','$A25', '$Ea','$Eb','$Ec','$Ed','$Ee', '$Ef','$Eg');";

    $result=mysqli_query($dbc,$query);
    echo $query;
    
// }
?>