{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Meiwildan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }} " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="{{ route('contacts.create')}}">Contact Us</a>
         
          </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
      <a class="navbar-brand" href="#page-top"><img src="../../fotoBuku/reado.png" width="125" alt="..." /></a>
      <form action="/" method="GET">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-success" type="submit" style="background-color: #302b63; border: 2px solid rgba(255, 255, 255, 0.247);">Search</button>
        </div>
    </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
    </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          {{-- <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }} " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" aria-current="page" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" aria-current="page" href="/gallery">Gallery</a>
             
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" aria-current="page" href="{{ route('contacts.create')}}">Contact Us</a>
             
              </li>
          </ul> --}}
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route ('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('register')}}">Register</a>
            </li>
          </ul>
      </div>
  </div>
</nav>
