<div class="card mx-auto card-w" style="width: 18rem;">
  <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'annuncio {{ $ad->title }}">
  <div class="card-body">
    <h5 class="card-title">{{ $ad->title  }}</h5>
    <p class="card-subtitle">{{ $ad->price }}€</p>
    <p class="card-subtitle">{{ $ad->description }}</p>
    {{-- <p class="card-subtitle">{{ $ad->category->name }}</p> --}}
    <a href="{{ route('ad.show',compact('ad')) }}" class="btn btn-primary">Dettaglio</a>
     <a href="{{ route('ad.byCategory', ['category'=> $ad->category]) }}"
        class="btn  btn-outline-info">{{ $ad->category->name }}</a>
  </div>



</div>

