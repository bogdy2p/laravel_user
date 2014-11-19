<?php

Route::resource('users', 'UsersController');

Route::get('/', function() {
  return 'You Have reached the underworld of this website.';
});
