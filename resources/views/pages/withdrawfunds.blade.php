@extends('layouts.app')

@section('content')
@if (!$userAuth)
    Log in to manage your funds.
@endif
@if ($userAuth)
        <?php echo ($account['lname'].' '.$account['fname'].'<br>') ?>
        <?php echo ($account['funds'].' €<br>') ?>
        <form class="left" action="withdraw" method="post"><hr><br>
            Withdraw amount: <input type="number" name="amount" step="0.01"><br>
            <input type="submit" value="Withdraw" class="button">
        </form>
@endif
@endsection