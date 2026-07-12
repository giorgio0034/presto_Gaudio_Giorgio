<x-layout>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center text-center my-5">
        <div class="col-12">
            <h1 class="display-1">Tutti gli annunci</h1>
        </div>
    </div>
    <div class="row">
        @forelse($ads as $ad)
        <div class="col-12 col-md-3">
            <livewire:card :ad="$ad" />
        </div>

    @empty
        <div class="col-12">
            <h3 class="text-center">
                Non sono stati creati annunci
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
