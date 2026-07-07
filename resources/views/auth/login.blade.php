<x-layout>




<x-masthead title="Login"/>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="p-4 shadow rounded-4 bg-dark text-white my-5"

                    action="{{ route('login') }}"
                    method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email"  id="email"aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>





</x-layout>
