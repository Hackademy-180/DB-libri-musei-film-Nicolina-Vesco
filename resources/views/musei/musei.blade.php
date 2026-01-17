<x-layout>
    <main class="container">
        <section class="row">
            @foreach($musei as $museo)
             <article class="col-12 col-md-3 mt-5">
                <div class="card">
                      <img src="{{Storage::url($museo->img)}}" class="card-img-top" alt="">
                      <h5 class="card-title text-center mt-2">{{$museo->name}}</h5>
                        <div class="card-body d-flex align-items-center gap-3 justify-content-center">
                            <a href="{{route('museo_show', compact('museo'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                            @if(Auth::id()==$museo->user->id)
                                <form action="{{route('museo_destroy', compact('museo'))}}" method="POST">
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