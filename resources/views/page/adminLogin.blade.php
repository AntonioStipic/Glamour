@extends("layout.admin")

@section("content")
    <form class="form-signin" method="POST">
        @csrf
        {{--<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">--}}
        <h1 class="h3 mb-3 font-weight-normal">Admin prijava</h1>
        <label for="inputEmail" class="sr-only">Korisničko ime</label>
        <input type="text" id="username" class="form-control" placeholder="Korisničko ime" required autofocus>
        <label for="inputPassword" class="sr-only">Lozinka</label>
        <input type="password" id="password" class="form-control" placeholder="lozinka" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Prijavite se</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
@endsection