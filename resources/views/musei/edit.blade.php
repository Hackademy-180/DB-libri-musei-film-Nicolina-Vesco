<x-layout>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route("museo_update", compact("museo"))}}" method="POST">
                    @csrf
                    @method("put")
                    <div class="mb-3 mt-5">
                        <label for="name" class="form-label">Nuovo Nome:</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$museo->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Nuovo Paese:</label>
                        <input type="text" class="form-control" id="country" placeholder="" name="country" value="{{$museo->country}}">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Nuovo Anno:</label>
                        <input type="number" class="form-control" id="year" placeholder="" name="year" value="{{$museo->year}}">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Nuova Descrizione</label>
                        <textarea name="text" class="form-control" id="info" rows="3">{{ $museo->info }}</textarea>
                    </div>
                    <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Modifica</button>
                    </div>
                </form>
            </div>

        </section>
    </main>
</x-layout>