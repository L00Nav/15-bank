@extends('layouts.app')

@section('content')
<form class="mainContent" action="login" method="post">
    <label for="email">Email:</label><br>
    <input type="email" name="email"><br><br>
    <label for="pass">Password:</label><br>
    <input type="password" name="pass"><br><br>
    <input class="button" type="submit" value="Login">
</form>
@endsection