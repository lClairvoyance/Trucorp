<?php
$link = mysqli_connect("172.19.0.2","root","asd","trucorp");
if (!$link){
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}

$query = "SELECT * FROM Users";

$result = mysqli_query($link,$query);

$user = mysqli_num_rows($result);

echo "There are ".$user. " user";

mysqli_close($link);
?>


