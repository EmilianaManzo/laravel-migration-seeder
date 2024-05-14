<header>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() === 'nuova-pagina' ? 'active' : ''}}" href="{{ route('nuova-pagina') }}">Nuova Pagina</a>
    </li>
  </ul>
</div>


</header>
