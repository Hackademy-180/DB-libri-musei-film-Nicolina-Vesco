<x-layout>
    <main class="container">
        <section class="row">
            @foreach($libri as $libro)
            <article class="col-12 col-md-3 mt-5">
                <div class="card">
                    <img src="https://www.ibs.it/assets/2024/04/20240415084403-copieautografatevintageslideshowmob-.webp" class="card-img-top" alt="foto random da picsum">
                    <h5 class="card-title">{{$libro->title}}</h5>
                    <div class="card-body d-flex align-items-center gap-3">
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