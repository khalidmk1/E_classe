 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Niveau
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Primaire</a></li>
            <li><a class="dropdown-item" href="#">Lycee</a></li>
            <li><a class="dropdown-item" href="#">College</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex">
        <input class="btn btn-primary" type="submit" value="Login">
        <img src="{{URL::asset('img/Login_icon.png')}}" class="rounded-circle" alt="icon_login">
      </div>
    </div>
  </div>
</nav>

