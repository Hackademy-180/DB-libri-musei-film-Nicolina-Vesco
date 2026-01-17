<x-layout>
    <main class="container">
        <section class="row">
            @foreach($movies as $movie)
                <article class="col-12 col-md-3 mt-5">
                   <div class="card">
                      <img src="{{Storage::url($movie->img)}}" class="card-img-top" alt="">
                      <h5 class="card-title text-center mt-2">{{$movie->title}}</h5>
                        <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                            <a href="{{route('movie_show', compact('movie'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                            @if(Auth::id()==$movie->user->id)
                                <form action="{{route('movie_destroy', compact('movie'))}}" method="POST">
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