<?php 

use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('standardTime', function() {
	$this->timestamps(); // created_at, updated_at
	$this->softDeletes(); // deleted_at
});

Blueprint::macro('user', function($user_id = 'user_id') {
	$this->unsignedBigInteger($user_id);
	$this->foreign($user_id)->references('id')->on('users');
});

Blueprint::macro('title', function($title = 'title') {
	$this->string($title)->nullable();
});

Blueprint::macro('description', function($description = 'description') {
	$this->text($description)->nullable();
});

