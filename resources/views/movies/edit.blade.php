<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route('movie_update', compact('movie'))}}" method="POST">
                    @csrf
                    @method("put")
                    <div class="mb-3 mt-5">
                        <label for="title" class="form-label">Nuovo titolo:</label>
                        <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{$movie->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Direttore:</label>
                        <input type="text" class="form-control" id="director" placeholder="" name="director" value="{{$movie->director}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Nuovo Anno:</label>
                        <input type="number" class="form-control" id="year" placeholder="" name="year" value="{{$movie->director}}">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Nuova Descrizione</label>
                        <textarea name="text" class="form-control" id="info" rows="3">{{ $movie->info }}</textarea>
                    </div>
                    <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Modifica</button>
                    </div>
                </form>

            </div>
        </section>
    </main>
</x-layout>