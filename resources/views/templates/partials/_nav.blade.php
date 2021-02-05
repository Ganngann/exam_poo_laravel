<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets') }}/img/logo.png" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Route::currentRouteName() == 'works.index' ? 'active' : '' }}"><a href="{{ route('works.index') }}">Portfolio</a></li>
                <li class="{{ Route::currentRouteName() == 'posts.index' ? 'active' : '' }}"><a href="{{ route('posts.index') }}">Blog</a></li>
                <li class="{{ Route::currentRouteName() == 'pages.contact' ? 'active' : '' }}"><a href="{{ route('pages.contact') }}">Contact</a></li>
                <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </div>
    </div>
</header>
<!--/header-->


