<?php

echo 'Hello <b>' . htmlentities( $_SERVER['REMOTE_ADDR'] ) . '</b> the current time is: ' . microtime( true );

