<?php

echo sprintf(
	"%s Deployed on<br/>%s<br/>%d seconds ago",
	htmlentities( trim( file_get_contents( '.git-ftp.log' ) ) ),
	date( 'r', filemtime( '.git-ftp.log' ) ),
	time() - filemtime( '.git-ftp.log' )
);
