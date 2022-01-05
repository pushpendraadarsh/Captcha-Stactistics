<?php

require_once ('../../../config/dbconfig.php');

$get_id=$_REQUEST['eid'];

move_uploaded_file($_FILES["image"]["tmp_name"],"../document/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE document SET bank_detail ='$location1' WHERE eid = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='../document_update'</script>";
?>