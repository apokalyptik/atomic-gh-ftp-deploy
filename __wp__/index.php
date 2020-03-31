<?php

echo 'Hello <b>' . htmlentities( $_SERVER['X_FORWARDED_FOR'] ) . '</b> the current time is: ' . microtime( true );

