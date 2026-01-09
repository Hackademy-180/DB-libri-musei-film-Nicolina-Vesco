<x-layout>
    <main class="container">
        <section class="row">
            @foreach($libri as $libro)
             <article class="col-12 col-md-3 mt-5">
                <div class="card">
                      <img src="https://www.ibs.it/assets/2024/04/20240415084403-copieautografatevintageslideshowmob-.webp" class="card-img-top" alt="foto random da picsum">
                        <div class="card-body">
                            <h5 class="card-title">{{$libro->title}}</h5>
                            <p class="card-text">{{$libro->author}}</p>
                            <p class="card-text">{{$libro->year}}</p>
                            <p class="card-text">{{$libro->info}}</p>
                        </div>
                </div>
             </article>

            @endforeach
        </section>
    </main>

</x-layout>