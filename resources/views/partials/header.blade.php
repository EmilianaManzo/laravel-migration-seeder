<header>

<div class="container w-100">
    <ul class="nav nav-tabs w-100 ">
        <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{Route::currentRouteName() === 'treni' ? 'active' : ''}}" href="{{ route('treni') }}">Treni</a>
        </li>
    </ul>
</div>


</header>
