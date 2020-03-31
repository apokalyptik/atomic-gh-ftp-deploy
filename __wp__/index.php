<?php

echo 'Hello <b>' . htmlentities( $_SERVER['HTTP_X_FORWARDED_FOR'] ) . '</b> the current time is: ' . microtime( true );

