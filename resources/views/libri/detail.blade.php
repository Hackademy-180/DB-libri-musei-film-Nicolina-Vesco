<x-layout>
    <main class="container">
        <sectiom class="row">
            <article class="col-12 text-center">
                <h1>Dettagli del Libro</h1>
            </article>
            <article class="col-12 mt-3">
                <p class="lead">
                    <strong>Titolo Libro:</strong> {{$libro->title}}
                </p>
                 <p class="lead">
                    <strong>Autore:</strong> {{$libro->author}}
                </p>
                <p class="lead">
                    <strong>Autore:</strong> {{$libro->year}}
                </p>
                 <p class="lead">
                    <strong>Contenuto:</strong> {{$libro->info}}
                </p>
                <p class="lead">
                    <strong>Creato da:</strong> {{$libro->user->name}}
                </p>
                    @if(Auth::id()==$libro->user->id)
                        <a href="{{route("libro_edit", compact("libro"))}}" class="btn btn-primary">Modifica libro</a>
                        <a href="{{route("libri")}}" class="btn btn-primary">Torna a tutti i libri</a>
                    @endif
            </article>
        </sectiom>
    </main>
</x-layout>