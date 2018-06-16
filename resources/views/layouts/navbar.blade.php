<nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
                <img src="{{asset('')}}" alt="{{}}" width="112" height="28">
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile"></a>
            </div>
                <div class="navbar-end">
                    @if(!Auth::guest())
                        <a href="" class="navbar-item is-tab">Login</a>
                        <a href="" class="navbar-item is-tab">Register</a>
                        @else
                        <b-dropdown v-model="navigation" position="is-bottom-left">
                            <a class="navbar-item" slot="trigger">
                                <span>Menu</span>
                                <b-icon icon="menu-down"></b-icon>
                            </a>

                            <b-dropdown-item custom>
                                Logged as <b>Rafael Beraldo</b>
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
