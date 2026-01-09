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
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{route("create_libri")}}">Aggiungi libri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{route("create_musei")}}">Aggiungi museo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{route("create_movies")}}">Aggiungi Film</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <a class="navbar-brand" href="{{route("home")}}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWBuB632p-BzikvlVaPUTEubUuieUuoFM2TQ&s" alt="" srcset="" class="logo">
                </a>
            </div>
            <div class="d-flex align-items-center gap-2">
                <input class=" form-control" type="search" placeholder="Cerca" aria-label="Search" />
                <div class="d-flex gap-3 me-3 align-items-center ">
                    <i class="fa-solid fa-magnifying-glass icon-right"></i>
                    <i class="fa-regular fa-user icon-right "></i>
                    <i class="fa-regular fa-star icon-right"></i>
                    <i class="fa-brands fa-opencart icon-right"></i>
                </div>
            </div>
        </div>
    </nav>