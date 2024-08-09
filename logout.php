
<?php

require 'config/constants.php';
//destory all session and redirect user to home page

session_destroy();
header('location: ' . ROOT_URL);
die();