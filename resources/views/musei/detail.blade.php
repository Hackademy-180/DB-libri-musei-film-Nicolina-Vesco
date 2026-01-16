<x-layout>
    <main class="container">
        <sectiom class="row">
            <article class="col-12 text-center">
                <h1>Dettagli del Museo</h1>
            </article>
            <article class="col-12 mt-3">
                <p class="lead">
                    <strong>Nome Museo:</strong> {{$museo->name}}
                </p>
                 <p class="lead">
                    <strong>Paese:</strong> {{$museo->country}}
                </p>
                <p class="lead">
                    <strong>Anno costruzione:</strong> {{$museo->year}}
                </p>
                <p class="lead">
                    <strong>Info:</strong> {{$museo->info}}
                </p>
                <p class="lead">
                    <strong>Creato da:</strong> {{$museo->user->name}}
                </p>
                @if(Auth::id()==$museo->user->id)
                    <a href="{{route("museo_edit", compact("museo"))}}" class="btn btn-primary">Modifica</a>
                    <a href="{{route("musei")}}" class="btn btn-primary">Torna a tutti i musei</a>
                @endif
            </article>
        </sectiom>
    </main>
</x-layout>