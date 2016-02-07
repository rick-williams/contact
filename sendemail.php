<?php
$msg = $_POST['msg'];
$email = $_POST['email'];

echo ($msg);
echo ($email);


mail('sarric@sarric.com',
htmlspecialchars($_POST['name']),
"{$msg} {$email}");

?>