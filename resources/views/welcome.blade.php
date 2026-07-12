<x-layout>

<x-masthead title="PRESTO" />



    <main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h2 class="text-center">BENVENUTO NEL SITO DI ANNUNCI</h2>
        </div>
    </div>
</main>



<div class="container">
    <div class="row">
        @forelse($ads as $ad)
        <div class="col-12 col-md-3 mb-4">

            <livewire:card :ad="$ad" />

        </div>
            @empty
            <h3 class="text-center">
                Non sono stati creati articoli
            </h3>

            @endforelse
    </div>
</div>







</div>





<x-footer />



</x-layout>
