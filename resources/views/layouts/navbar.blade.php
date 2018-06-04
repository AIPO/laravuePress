<nav class="navbar">
    <div class="container">
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
                        @endif
                </div>
            </div>

        </div>
</nav>
