<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Input arrays ko fetch kiya
    $ids = $_POST['doc_id'];
    $names = $_POST['doc_name'];
    $specializations = $_POST['doc_spec'];
    $fees = $_POST['doc_fee'];

    // Loop chala kar doctors ka data update kiya
    foreach ($ids as $index => $id) {
        $name = mysqli_real_escape_string($conn, $names[$index]);
        $spec = mysqli_real_escape_string($conn, $specializations[$index]);
        $fee = mysqli_real_escape_string($conn, $fees[$index]);

        $update_query = "UPDATE `vet_consults` SET 
                         `doc_name` = '$name', 
                         `doc_spec` = '$spec', 
                         `doc_fee` = '$fee' 
                         WHERE `doc_id` = '$id'";
        
        mysqli_query($conn, $update_query);
    }

    // Update hone ke baad wapis vet consults page par redirect kiya
    header("Location: vet-consults.php");
    exit();
}
?>