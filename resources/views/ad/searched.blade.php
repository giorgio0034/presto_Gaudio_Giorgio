<x-layout>


<div class="container-fluid">
    <div class="row py-5 justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-1"> Risultati per la ricerca "<span class="fst-italic"></span>{{ $query }} </h1>
        </div>

    </div>



<div class="row justify-content-center align-items-center text-center">

    @forelse($ads as $ad)
        <div class="col-12 col-md-3">
                <livewire:card :ad="$ad" />
        </div>
     @empty
        <div class="col-12">
            <h3 class="text-center">
                Nessun annuncio corrisponde alla tua ricerca
            </h3>
        </div>
        @endforelse
    </div>
</div>

<div class="d-flex justify-content-center">
    <div>
        {{ $ads->links() }}
    </div>
</div>





















</x-layout>
