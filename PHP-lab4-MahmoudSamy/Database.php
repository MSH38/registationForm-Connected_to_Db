<?php

$connection = mysqli_connect("localhost","root","root","phplab4",3307);
if(! $connection){

    echo mysqli_connect_error();
    exit;
}

$query = 'select * from users';
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){

    echo "Name: ".$row['name'];
    echo '<br>';
    echo "Name: ".$row['email'];
    echo '<br>';
    echo "Password: ".$row['password'];
    echo '<br>';
    echo str_repeat("-",50);
    echo '<br>';
}
mysqli_free_result($result);
mysqli_close($connection);

?>