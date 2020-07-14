<?php

require_once 'init.php';

$permissions = ['public_profile'];
$loginUrl = $helper->getLoginUrl('http://localhost/php-facebook-auth/fb-callback.php', $permissions);

echo '<a href="'.htmlspecialchars($loginUrl).'">Login dengan facebook</a>';

?>
