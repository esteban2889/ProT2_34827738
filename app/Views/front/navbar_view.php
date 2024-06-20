<!--navegacion-->
 <nav class="navbar navbar-expand-lg bg-body-green">
 <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
       <!-- logo/marca de la empresa -->
       <img src="<?php echo base_url('assets/img/chuletita.jpg')?>" alt="Home" width="75" height="30" class="img-fluid"/>
       </a>
      </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar_brand" href="Home"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quienes Somos</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a></li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a></li> 
        </li>
        <li class="nav-item">
            <a class="nav-link" href="acerca_de">Acerca de</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!--fin barra de navegacion-->