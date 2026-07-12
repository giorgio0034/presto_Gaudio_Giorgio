<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class=" text-center"> DETTAGLIO ANNUNCIO: {{ $ad->title }}</h1>
            </div>
        </div>
    </div>

<div class="row height-custom d-flex justify-content-center align-items-center py-5">
    <div class="col-12 col-md-6 mb-3 d-flex justify-content-center mx-auto">
        <div id="carouselExample" class="carousel slide w-100">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/200" class="d-block w-100 rounded shadow" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/300" class="d-block w-100 h-400 rounded shadow" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-6  mx-auto text-center">
        <h2>Titolo: {{ $ad->title }}</h2>
        <div class="d-flex flex-column justify-content-center h-75">
            <h3>Prezzo: {{ $ad->price }} €</h3>
            <p> Descrizione: {{ $ad->description }}</p>
        </div>

    </div>
</div>
























</x-layout>
