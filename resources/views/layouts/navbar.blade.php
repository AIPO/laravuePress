<nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
                <img src="{{asset('')}}" alt="Lietuvos Žvyneline Sergančiųjų Draugija" width="112" height="28">
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a href="" class="navbar-item is-tab is-hidden-mobile">Learn</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
                <a href="" class="navbar-item is-tab is-hidden-mobile"></a>

                <div class="navbar-end">
                    @if(Auth::guest())
                        <a href="" class="navbar-item is-tab">Login</a>
                        <a href="" class="navbar-item is-tab">Register</a>
                        @else
                        <b-dropdown position="is-bottom-left">
                            <a class="navbar-item" slot="trigger">
                                <span>Login</span>
                                <b-icon icon="menu-down"></b-icon>
                            </a>

                            <b-dropdown-item custom paddingless>
                                <form action="">
                                    <div class="modal-card" style="width:300px;">
                                        <section class="modal-card-body">
                                            <b-field label="Email">
                                                <b-input
                                                        type="email"
                                                        placeholder="Your email"
                                                        required>
                                                </b-input>
                                            </b-field>

                                            <b-field label="Password">
                                                <b-input
                                                        type="password"
                                                        password-reveal
                                                        placeholder="Your password"
                                                        required>
                                                </b-input>
                                            </b-field>

                                            <b-checkbox>Remember me</b-checkbox>
                                        </section>
                                        <footer class="modal-card-foot">
                                            <button class="button is-primary">Login</button>
                                        </footer>
                                    </div>
                                </form>
                            </b-dropdown-item>
                        </b-dropdown>
                    @endif
                </div>
            </div>
        </div>
</nav>
