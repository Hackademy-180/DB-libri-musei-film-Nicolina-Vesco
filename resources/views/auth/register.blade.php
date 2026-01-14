<x-layout>
    <h1 class="text-center mt-5">Pagina di registrazione</h1>
    <main class="container">
        <section class="row vh-75 justify-content-center align-items-center">
            <article class="col-12 col-md-8">
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nome utente</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user" placeholder="" name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="" name="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Conferma Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" name="password_confirmation">
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-end">
                       <button type="submit" class="btn btn-primary mb-3">Registrati</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
</x-layout>