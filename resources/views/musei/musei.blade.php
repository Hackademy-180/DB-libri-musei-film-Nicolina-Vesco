<x-layout>
    <main class="container">
        <section class="row">
            @foreach($musei as $museo)
             <article class="col-12 col-md-3 mt-5">
                <div class="card">
                      <img src="https://api.museoegizio.it/wp-content/uploads/2018/04/08B4320-Copia-1-500x500.jpg" class="card-img-top" alt="foto random da picsum">
                        <div class="card-body">
                            <h5 class="card-title">{{$museo->name}}</h5>
                            <p class="card-text">{{$museo->country}}</p>
                            <p class="card-text">{{$museo->year}}</p>
                            <p class="card-text">{{$museo->info}}</p>
                        </div>
                </div>
             </article>

            @endforeach
        </section>
    </main>

</x-layout>