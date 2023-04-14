<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-0">
        <a class="navbar-brand" href="{{ route('index.index') }}"><img src="{{ asset('logo.png') }}" height="90px"></a>
        <ul class="navbar-nav d-flex h-100">
          @if(Session::has('username'))
            <li class="nav-item fs-5 me-3">
                <p class="nav-link text-white">Bienvenid@, {{Session::get('username')}}</p>
            </li>
            <li class="nav-item fs-5 me-3">
                <a class="nav-link" href="{{ route('pets.logout') }}">Log Out</a>
            </li>
            <li class="nav-item fs-5 me-3">
                <a class="nav-link" href="{{ route('pets.parelles') }}">Mascotes compatibles</a>
            </li>
          @endif
          <li class="nav-item fs-5 me-3">
              <a class="nav-link" href="{{ route('pets.registerForm') }}">Registrar mascota</a>
          </li>
          </ul>
    </nav>
</header>
