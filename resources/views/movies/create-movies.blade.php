<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h1 class="text-center mt-3">Aggiungi nuovi film</h1>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route("add_movie")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="title" class="form-control" id="title" placeholder="" name="title">
                        @error('title')
                        <p class="text text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Regista:</label>
                        <input type="director" class="form-control" id="director" placeholder="" name="director">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno:</label>
                        <input type="year" class="form-control" id="year" placeholder="" name="year">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Trama</label>
                        <textarea class="form-control" id="info" rows="3" name="info"></textarea>
                        @error('info')
                        <p class="text text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label"></label>
                        <input class="form-control" type="file" id="img" name="img">
                    </div>
                    <div class="col-auto">
                       <button type="submit" class="btn btn-primary mb-3">Aggiungi</button>
                    </div>
                </form>
            </div>

        </section>
    </main>


</x-layout>