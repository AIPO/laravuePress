<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{route('home')}}">
            <img src="{{asset('')}}" alt="" width="112" height="28">
        </a>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">{{ucfirst(app()->getLocale())}}</a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="{{url('locale/en')}}">En</a>
                    <a class="navbar-item" href="{{url('locale/lt')}}">Lt</a>
                </div>
            </div>

                <a href="" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
            <div class="navbar-end">
                @if(!Auth::guest())
                    <a href="" class="navbar-item is-tab">Login</a>
                    <a href="" class="navbar-item is-tab">Register</a>
                @else
                    <b-dropdown v-model="navigation" position="is-bottom-left" hoverable>
                        <a class="navbar-item" slot="trigger">
                            <span>Menu</span>
                            <b-icon icon="menu-down"></b-icon>
                        </a>

                        <b-dropdown-item>
                            Logged as <b>User</b>
                        </b-dropdown-item>
                        <hr class="dropdown-divider">
                        <b-dropdown-item has-link>
                            <a href="https://google.com" target="_blank">
                                <b-icon icon="link"></b-icon>
                                Google (link)
                            </a>
                        </b-dropdown-item>
                        <b-dropdown-item value="home">
                            <b-icon icon="home"></b-icon>
                            Home
                        </b-dropdown-item>
                @endif
            </div>
        </div>

</nav>
