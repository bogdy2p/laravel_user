<!doctype html>
<html>
  <head>
  </head>
  <meta charset="utf-8">
  <body> 
    <h1>All Users:</h1>
    @foreach ($users as $user)
  <li>{{ link_to("/users/{$user->username}", $user->username)}}</li>
  <!--<li>{{ $user->username }}</li>-->
  @endforeach
</body>


</html>
