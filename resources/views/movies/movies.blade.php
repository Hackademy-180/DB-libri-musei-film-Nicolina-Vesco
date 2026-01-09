<x-layout>
    <main class="container">
        <section class="row">
            @foreach($movies as $movie)
                <article class="col-12 col-md-3 mt-5">
                   <div class="card">
                      <img src="https://picsum.photos/seed/museum/800/600" class="card-img-top" alt="foto random da picsum">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->director}}</p>
                            <p class="card-text">{{$movie->year}}</p>
                            <p class="card-text">{{$movie->info}}</p>
                        </div>
                   </div>
                </article>

            @endforeach
        </section>
    </main>

</x-layout>