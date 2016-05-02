<nav class="header navbar navbar-fixed-top">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-6 column">
                <ul class="navigation">
                    <? if ($this->tank_auth->is_logged_in()): ?>
                        <li>
                            <a href="/account">My Account</a>
                        </li>
                        <li>
                            <a href="/auth/logout">Logout</a>
                        </li>
                    <? else: ?>
                        <li>
                            <a href="/auth/register">Register</a>
                        </li>
                        <li>
                            <a href="/auth/login">Login</a>
                        </li>
                    <? endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>