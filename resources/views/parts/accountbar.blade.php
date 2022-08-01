<div  class="accountBar">
    @if(false)
        <div class="contentBox">
            <a class="navLink" href="accounts">FULL NAME</a>
        </div>
        <div class="contentBox">
            <form action="logout" method="post">
                <button class="logout" type="submit">Logout</a>
            </form>
        </div>
    @endif
    @if(true)
        <div class="contentBox">
            <a class="navLink" href="login">Login</a>
        </div>
        <div class="contentBox">
            <a class="navLink" href="accountCreationForm">Register</a>
        </div>
    @endif
</div>