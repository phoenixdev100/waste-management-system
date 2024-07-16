<?php 
// $host="localhost"
$con = mysqli_connect('localhost', 'root', '', 'wms');
// if($con) {
//     echo('Connected Successfully.');
// }
if(!$con) {
    die('Please check Your database connection'.mysqli_error($con));
}
?>