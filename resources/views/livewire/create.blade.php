<div>


@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


<!-- /resources/views/post/create.blade.php -->



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->




    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 col-md-6">

                <form class="p-4 shadow rounded-4 bg-dark text-white my-5"
                wire:submit.prevent="store">

                <div class="mb-3">
                    <label>Titolo</label>
                    <input type="text" class="form-control" wire:model="title" id="title">
                </div>

                <div class="mb-3">
                    <label>Prezzo</label>
                    <input type="text" class="form-control" wire:model="price" id="price" value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label>Descrizione</label>
                    <textarea class="form-control" wire:model="description" id="description"></textarea>
                </div>


                <select class="form-select form-select-sm my-5 " wire:model="category" id="category">
                    <option selected>Inserisci Categoria</option>

                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">"{{ $category->name }}"</option>
                    @endforeach
                </select>











                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>

        </div>
    </div>
</div>


</div>
