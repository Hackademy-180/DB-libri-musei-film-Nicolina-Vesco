<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route("libro_update", compact("libro"))}}" method="POST">
                    @csrf
                    @method("put")
                    <div class="mb-3 mt-5">
                        <label for="title" class="form-label">Nuovo Titolo:</label>
                        <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{$libro->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Nuovo Autore:</label>
                        <input type="text" class="form-control" id="author" placeholder="" name="author" value="{{$libro->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Nuovo Anno:</label>
                        <input type="number" class="form-control" id="year" placeholder="" name="year" value="{{$libro->year}}">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Nuova Descrizione</label>
                        <textarea name="info" class="form-control" id="info" rows="3">{{ $libro->info }}</textarea>
                    </div>
                    <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Modifica</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
</x-layout>