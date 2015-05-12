<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">RENT A CAR</a>  
       
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <?php $activa = $this->uri->segment(2); ?>
      <ul class="nav navbar-nav"> 
           
        <li <?php if ($activa == ''){ echo "class='active'"; } ?>>
          <a href="<?=base_url()?>">
            <span class="glyphicon glyphicon-home"></span>&nbsp;
            Inicio
          </a>
        </li>
        <li <?php if ($activa == 'agregar'){ echo "class='active'"; } ?> class = "dropdown">
          <a href= "#" class="dropdown-toggle" data-toggle = "dropdown"> <span class="glyphicon glyphicon-user"></span>&nbsp; Clientes<b class = "caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href = "<?=base_url()?>index.php/main/agregar">Agregar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/buscar">Buscar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/ver">Ver todo</a></li>
           </ul>
        </li>
       
        <li <?php if ($activa == 'agregarauto'){ echo "class='active'"; } ?> class = "dropdown">
          <a href= "#" class="dropdown-toggle" data-toggle = "dropdown"> <span class="glyphicon glyphicon-inbox"></span>&nbsp; Automoviles<b class = "caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href = "<?=base_url()?>index.php/main/agregarauto">Agregar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/buscarauto">Buscar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/verauto">Ver todo</a></li>
           </ul>
        </li>

         <li <?php if ($activa == 'agregarauto'){ echo "class='active'"; } ?> class = "dropdown">
          <a href= "#" class="dropdown-toggle" data-toggle = "dropdown"> <span class="glyphicon glyphicon-book"></span>&nbsp; Gestion de arriendo<b class = "caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href = "<?=base_url()?>index.php/main/agregarauto">Agregar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/buscarauto">Buscar</a></li>
          <li><a href = "<?=base_url()?>index.php/main/verauto">Ver todo</a></li>
           </ul>
        </li>
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
<li>
          <a href="<?=base_url()?>index.php/auth/logout">
            <span class="glyphicon glyphicon-remove-sign"></span>&nbsp;
            Cerrar sesion
          </a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
