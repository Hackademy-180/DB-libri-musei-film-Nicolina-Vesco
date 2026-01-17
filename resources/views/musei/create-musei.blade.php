<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <h1 class="text-center mt-3">Aggiungi nuovi musei</h1>
    <main class="container">
        <section class="row justify-content-center">
            <div class="col-6 col-md-6">
                <form action="{{route("add_museo")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="name">
                        @error('name')
                        <p class="text text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Paese:</label>
                        <input type="country" class="form-control" id="country" placeholder="" name="country">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di apertura:</label>
                        <input type="number" class="form-control" id="year" placeholder="" name="year">
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Descrizione</label>
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