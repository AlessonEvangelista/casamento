<?php
return array(

	'_root_' => 'home/index',
	'_404_'   => 'home/404',    // The main 404 route
);

echo Router::get('post', 'home/check');