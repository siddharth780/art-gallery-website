<?php 
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful!";
}else{
    echo "Unsuccessful connection :(";
}

mysqli_select_db($con, 'dynamicwebsiteuserdata');

// to store whatever they enter or access

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfo (user, email, mobile, comments) values ('$user', '$email','$mobile', '$comments')";

echo "$query";

mysqli_query($con, $query);

header('location: index.php');

?>