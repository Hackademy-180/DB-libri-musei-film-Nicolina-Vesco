<header class="container-fluid">
        <div class="row row-custom justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1>Esplora la Cultura</h1>
                <p class="text-white fw-bold">Dai grandi capolavori letterari alle collezioni museali più affascinanti: un unico spazio per chi ama imparare, scoprire e lasciarsi ispirare dalla conoscenza.</p>
                <!-- Button esterno -->
                 <div class="d-flex justify-content-center">
                     <a class="nav-link fw-bold" href="{{route("libri")}}">
                         <span class="box">
                             Libri
                            </span>
                        </a>
                        <a class="nav-link fw-bold" href="{{route("musei")}}">
                            <span class="box">
                                Musei
                            </span>
                        </a>
                        <a class="nav-link fw-bold" href="{{route("movies")}}">
                            <span class="box">
                                Film
                            </span>
                        </a>
                        
                    </div>
            </div>
            <div class="col-12 d-flex justify-content-evenly align-items-center">
                <div class="">
                    <i class="fa-solid fa-cart-shopping fa-2x" style="color: #ffffff;"></i>
                    <p class="lead text-white fw-bold">Libri venduti</p>
                    <span class="ms-2 lead number text-white" id="primoNumero">1564</span>
                </div>
                <div class="">
                    <i class="fa-regular fa-face-grin-stars fa-2x" style="color: #ffffff;"></i>
                    <p class="lead text-white fw-bold">Film da vedere</p>
                    <span class="ms-2 lead number text-white" id="secondoNumero">8765</span>
                </div>
                <div class="">
                    <i class="fa-solid fa-briefcase fa-2x" style="color: #ffffff;"></i>
                    <p class="lead text-white fw-bold">Musei da visitare</p>
                    <span class="ms-2 lead number text-white" id="terzoNumero">305</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-md 6">


        </div>


    </header>