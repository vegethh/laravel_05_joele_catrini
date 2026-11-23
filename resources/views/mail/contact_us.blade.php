<x-layout>
    <x-header maintitle="Contattaci" subtitle="Inviaci una mail"/>
<main class="container my-3">
    <section class="row justify-content-center">
        <article class="col-12 col-md-8">
            <form method="POST" action="{{ route("send_email") }}">
                @csrf

                <div class="mb-3">
                    <label for="user-name" class="form-label">Nome Utente</label>
                    <input type="text" class="form-control" id="user-name" name="username">
                </div>

                <div class="mb-3">
                    <label for="user-email" class="form-label">Indirizzo Email</label>
                    <input type="email" class="form-control" id="user-email" name="email">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenuto</label>
                    <textarea class="form-control" id="content" name="content" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </article>
    </section>
</main>
</x-layout>