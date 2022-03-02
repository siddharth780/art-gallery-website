<?php 
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful!";
}else{
    echo "Unsuccessful connection :(";
}

?>