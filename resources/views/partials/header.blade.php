<header class="mb-5">



    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

              <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
              <a class="nav-link {{Route::currentRouteName() === 'treni' ? 'active' : ''}}" href="{{ route('treni') }}">Treni</a>

            </div>
          </div>
        </div>
      </nav>

</div>


</header>
