<?php 

collect(glob(__DIR__ . '/*.php')) // ['campus.php', 'student.php']
    ->each(function ($path) {
        if (basename($path) !== basename(__FILE__)) {
            require $path;
        }
    });

if(! function_exists('hi')) {
	function hi()
	{
		return 'hi';
	}	
}

if(! function_exists('hello')) {
	function hello()
	{
		return 'hello';
	}	
}

if(! function_exists('user')) {
	function user($guard = 'web')
	{
		return auth($guard)->user();
	}	
}
