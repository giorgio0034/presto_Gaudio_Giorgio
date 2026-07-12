<x-layout>

<div class="container">
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-2">Annunci per Categoria <span>
                {{ $category->name }}</span></h1>


        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @forelse($ads as $ad)
        <div class="col-12 col-md-3">
            <livewire:card :ad="$ad" />
        </div>
        @empty
            <div class="col-12 text-center">
                <h3>
                    Non ci sono annunci creati per questa categoria
                </h3>
             @auth
                 <a class="btn btn-dark" href="{{ route('ad.create') }}">Pubblica un annuncio</a>
             @endauth

            </div>

@endforelse


</div>

</div>





























</x-layout>
