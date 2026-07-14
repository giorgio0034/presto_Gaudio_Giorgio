

<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ad.index') }}">I miei annunci</a>
        </li>
       @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrati</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Accedi</a>
        </li>
        @endguest

        @auth


        <li class="nav-item">
          <a class="nav-link" href="#">Benvenut*{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $category)
            <li><a class="dropdown-item"  href="{{ route('ad.byCategory',['category'=>$category->id]) }}">{{ $category->name }}</a>
            </li>
            @if(!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach

          </ul>
        </li>

        <li class="nav-item">
          <form  action="{{ route('logout') }}"
           method="POST">
           @csrf
           <button
           class="nav-link"
           type="submit">Logout</button>

        </form>
        </li>
    </ul>

<a href= "{{ route('ad.create') }}"class="btn btn-secondary">Inserisci Annuncio</a>
@endauth
    </div>
  </div>
</nav>
