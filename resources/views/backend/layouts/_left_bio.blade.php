<div class="nav_profile">
    <div class="media profile-left">
        <a class="pull-left profile-thumb" href="#">
            <img src="https://www.gravatar.com/avatar/914d4ecd1f048171d6308e3f95bbeac1.jpg?s=60"
                 alt="img" class="img-circle img-bor"/>
        </a>
        <div class="content-profile">
            <h4 class="media-heading">
                {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}
            </h4>
            <ul class="icon-list">
                <li>
                    <a href="{{ URL::to('backend/lockscreen') }}">
                        <i class="fa fa-fw fa-lock"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('backend/logout') }}">
                        <i class="fa fa-fw fa-sign-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>