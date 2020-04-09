<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
$sql = "INSERT INTO student ( id,first_name, last_name, email) VALUES ('$id','$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
<div>
<a href="add_record_form.php">Back to home</a>
<a href="fetch.php">fetch</a>
</div>
