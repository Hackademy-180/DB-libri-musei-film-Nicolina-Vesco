<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12 text-center">
                <h1>Dettagli del film:</h1>
            </article>
            <article class="col-12 mt-3">
                <p class="lead">
                    <strong>Titolo film:</strong> {{$movie->title}}
                </p>
                <p class="lead">
                    <strong>Direttore film:</strong> {{$movie->director}}
                </p>
                <p class="lead">
                    <strong>Anno di produzione:</strong> {{$movie->year}}
                </p>
                <p class="lead">
                    <strong>Descrizione:</strong> {{$movie->info}}
                </p>
                <p class="lead">
                    <strong>Articolo creato da:</strong> {{$movie->user->name}}
                </p>
                @if(Auth::id()== $movie->user->id)
                    <a href="{{route('movie_edit', compact('movie'))}}" class="btn btn-primary">Modifica</a>
                    <a href="{{route('movies')}}" class="btn btn-primary">Tutti i film</a>
                @endif
            </article>
        </section>
    </main>



</x-layout>