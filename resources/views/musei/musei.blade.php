<x-layout>
    <main class="container">
        <section class="row">
            @foreach($musei as $museo)
             <article class="col-12 col-md-3 mt-5">
                <div class="card">
                      <img src="https://www.ibs.it/assets/2024/04/20240415084403-copieautografatevintageslideshowmob-.webp" class="card-img-top" alt="foto random da picsum">
                      <h5 class="card-title">{{$museo->name}}</h5>
                        <div class="card-body d-flex align-items-center gap-3">
                            <a href="{{route('museo_show', compact('museo'))}}" class="btn btn-primary">Visualizza dettaglio</a>
                            
                            <form action="{{route('museo_destroy', compact('museo'))}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit"><i class="fa-regular fa-trash-can" style="color: #ff0000;"></i></button>
                            </form>

                        </div>
                </div>
             </article>

            @endforeach
        </section>
    </main>

</x-layout>