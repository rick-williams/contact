<?php

mail('sarric@sarric.com',
htmlspecialchars($_POST['name']),
"empty message");

?>