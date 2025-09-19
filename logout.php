<?php

require 'load.php';

Josantonius\Session\Facades\Session::destroy();

header('Location: ./index.php');

exit();
