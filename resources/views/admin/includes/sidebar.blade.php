<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="/admin" class="simple-text logo-normal">
            <img src="{{asset('images/logo-join-me.png')}}" alt="">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav" id="active-side-bar">
            <li {{{ (Route::is('events.index') ? 'class=active' : '') }}}>
                <a href="{{route('events.index')}}">
                    <i class="fas fa-bullhorn"></i>
                    <p>Events</p>
                </a>
            </li>
            <li {{{ (Route::is('categories.index') ? 'class=active' : '') }}}>
                <a href="{{route('categories.index')}}">
                    <i class="fas fa-bookmark"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li {{{ (Route::is('users.index') ? 'class=active' : '') }}}>
                <a href="{{route('users.index')}}">
                    <i class="fas fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
            <li {{{ (Route::is('roles.index') ? 'class=active' : '') }}}>
                <a href="{{route('roles.index')}}">
                    <i class="fas fa-user-tag"></i>
                    <p>Roles</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user-check"></i>
                    <p>Participants</p>
                </a>
            </li>
        </ul>
    </div>
</div>
