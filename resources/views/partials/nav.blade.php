
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4 {{ request()->path() === '/' ? 'active' : ''}}">
                <a class="nav-link text-uppercase text-expanded" href={{route('home')}}>Home
                </a>
            </li>
            <li class="nav-item px-lg-4 {{ request()->path() === 'about' ? 'active' : ''}}">
                <a class="nav-link text-uppercase text-expanded" href={{route('about')}}>About</a>
            </li>
            <li class="nav-item px-lg-4 {{ request()->path() === 'products' ? 'active' : ''}}">
                <a class="nav-link text-uppercase text-expanded " href={{route('products')}}>Products</a>
            </li>
            <li class="nav-item px-lg-4 {{ request()->path() === 'store' ? 'active' : ''}}">
                <a class="nav-link text-uppercase text-expanded" href={{route('store')}}>Store</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>