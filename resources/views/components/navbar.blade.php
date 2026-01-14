<nav class="navbar navbar-expand-lg nav-custom " id="nav">
    <div class="container-fluid d-flex justify-content-between">
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse left-side" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="{{route("home")}}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route("create_libri")}}">Aggiungi libri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route("create_musei")}}">Aggiungi museo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{route("create_movies")}}">Aggiungi Film</a>
                    </li>
                
                 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenut* {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto utente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('register') }}" class="dropdown-item">Registrati <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                        <li><a href="{{ route('login') }}" class="dropdown-item">Login <i class="fa-regular fa-user icon-right"></i></a></li>
                    </ul>
                </li>
                @endauth
                </ul>
            </div>
        </div>
        <div class="">
            <a class="navbar-brand" href="{{route("home")}}">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWBuB632p-BzikvlVaPUTEubUuieUuoFM2TQ&s" alt="" srcset="" class="logo">
            </a>
        </div>
        <div class="d-flex align-items-center gap-2">
            <div class="d-flex gap-3 me-3 align-items-center ">
                <i class="fa-solid fa-magnifying-glass icon-right"></i>
                <div class="d-flex flex-column align-items-center text-center">
                    <a href="{{route("register")}}" class="nav-link"><i class="fa-regular fa-user icon-right "></i></a>

                </div>
                <i class="fa-regular fa-star icon-right"></i>
                <i class="fa-brands fa-opencart icon-right"></i>
            </div>
        </div>
    </div>
</nav>