<x-layout>





<x-masthead title="Registrati" />


{{--
       <header class="header d-flex align-items-center">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="text-center">Registrati</h1>
                    </div>
                </div>
            </div>
</header>
--}}


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="p-4 shadow rounded-4 bg-dark text-white my-5"

            action="{{ route('register') }}"
            method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label"> Conferma Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>










</x-layout>
