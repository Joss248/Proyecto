<!-- navBar de Bootstrap-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}">Inicio <i class="fa-solid fa-house"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
       aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('products.index')}}">Productos  <i class="fa-solid fa-mug-hot"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">Clientes  <i class="fa-solid fa-circle-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}">Ventas  <i class="fa-solid fa-bag-shopping"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('brands.index')}}">Marcas  <i class="fa-solid fa-code-branch"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('addresses.index')}}">Direcciones <i class="fa-solid fa-compass"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>