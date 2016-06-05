<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
        <img src="https://www.gravatar.com/avatar/914d4ecd1f048171d6308e3f95bbeac1.jpg?s=60"
             alt="img" class="img-circle img-responsive pull-left" height="35" width="35"/>
        <div class="riot">
            <div>
                {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
                <span><i class="caret"></i></span>
            </div>
        </div>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="https://www.gravatar.com/avatar/914d4ecd1f048171d6308e3f95bbeac1.jpg?s=60"
                 alt="img" class="img-circle img-bor"/>
            <p>{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
        </li>
        <!-- Menu Body -->
        <li role="presentation" class="divider"></li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="{{ URL::to('backend/lockscreen') }}">
                    <i class="fa fa-fw fa-lock"></i>
                    Lock
                </a>
            </div>
            <div class="pull-right">
                <a href="{{ URL::to('backend/logout') }}">
                    <i class="fa fa-fw fa-sign-out"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</li>