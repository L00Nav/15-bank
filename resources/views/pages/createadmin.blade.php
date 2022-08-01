@extends('layouts.app')

@section('content')
<form class="mainContent" action="adminCreate" method="post">
    <label for="adminName">Username:</label><br>
    <input type="text" name="adminName"><br><br>
    <label for="adminPass">Password:</label><br>
    <input type="password" name="adminPass"><br><br>
    <input class="button" type="submit" value="Register">
</form>
@endsection