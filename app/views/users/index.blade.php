<!doctype html>
<html>
  <head>
  </head>
  <meta charset="utf-8">
  <body> 
    <h1>All Users:</h1>

    @if (count($users) >= 1)
       <p>Here is the list </p>
       @foreach ($users as $user)
        <li>{{ link_to("/users/{$user->username}", $user->username)}}</li>
        <!--<li>{{ $user->username }}</li>-->
       @endforeach
      
    @else
    <p> There are no users in this database </p>
    @endif
   
</body>


</html>
