<x-layout>
    <main class="container">
        <section class="row">
            @foreach($libri as $libro)
            <article class="col-12 col-md-3 mt-5">
                <div class="card">
                    <img src="{{Storage::url($libro->img)}}" class="card-img-top" alt="foto random da picsum">
                    <h5 class="card-title text-center mt-2">{{$libro->title}}</h5>
                    <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                        <a href="{{route('libro_show', compact('libro'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                            @if(Auth::id()==$libro->user->id)
                                <form action="{{route('libro_destroy', compact('libro'))}}" method="POST">
                                     @csrf
                                    @method("DELETE")
                                    <button type="submit"><i class="fa-regular fa-trash-can" style="color: #ff0000;"></i></button>
                                </form>
                            @endif
                    </div>
                </div>
            </article>
            @endforeach
        </section>
    </main>

</x-layout>