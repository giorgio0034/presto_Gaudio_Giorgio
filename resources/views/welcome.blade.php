<x-layout>

{{-- <x-masthead title="PRESTO" /> --}}


{{--   <header class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h2 class="text-center"></h2>
        </div>
    </div>
</header>
  --}}

  <header>
        <div class="container">
            <div class="row d-flex justify-content-left">
                <div class="col-12 col-md-6">
                    <h1 class="titolo mt-5">Benvenuto nel sito di annunci</h1>
                </div>

            </div>

        </div>



  </header>



<main class="container mt-5">
    <div class="row ">
        <h1 class="text-center ">Tutti gli annunci</h1>
        @forelse($ads as $ad)
        <div class="col-12 col-md-3 mb-4 my-5">

            <livewire:card :ad="$ad" />

        </div>
            @empty
            <h3 class="text-center">
                Non sono stati creati articoli
            </h3>

            @endforelse
    </div>
</main>







</div>





<x-footer />



</x-layout>
