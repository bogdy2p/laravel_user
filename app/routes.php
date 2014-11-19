<?php

Route::resource('users', 'UsersController');

Route::get('/', function() {
 
  User::create([
    'username' => 'thepbc',
    'email' => 'asd@asd.com',
    'password'=> Hash::make('changeme')
  ]);
  return 'Done';
});
