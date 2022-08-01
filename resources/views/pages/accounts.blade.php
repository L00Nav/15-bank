@extends('layouts.app')

@section('content')
@if (!$userAuth && !$adminAuth)
    Log in to see your account.
@endif
@if ($userAuth || $adminAuth)
    @foreach($accounts as $account)
    <div class="contentBox fundsButtonBox left">
        {{$account['lname'].' '.$account['fname']}}<br><hr>
        {{$account['email']}}<br>
        {{$account['pnumber']}}<br>
        {{$account['anumber']}}<br>
        {{$account['funds']}} €<br><br>
        <div class="contentBox fundsButtonBox left">
            <a href="addFunds" class="navLink">Deposit</a>
        </div>
        <div class="contentBox fundsButtonBox left">
            <a href='withdrawFunds' class='navLink'>Withdraw</a>
        </div>
        <div class="contentBox fundsButtonBox left">
            <a href="addFunds" class="navLink">Delete</a>
        </div>
    </div>
@endforeach
@endif
@endsection