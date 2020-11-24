
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
	
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>
					<li class="text-condensedLight noLink" ><small>Usuario</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> PRODUCTOS 
			</div>
			
			<div class="full-width tittles navLateral-body-tittle-menu">
				<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; PANEL DE NAVEGACION</span>
			</div>

			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">

					<li class="full-width">
						<a href="home.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								HOME
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					
					<li class="full-width">
						<a href="products.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								PRODUCTOS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="inventory.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								INVENTARIO TOTAL
							</div>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-washing-machine"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Selecionando la pestaña <strong>Nuevo</strong> podras ingresar un nuevo producto. <br>
					Seleccionando la pestaña <strong>Filtrar</strong> podras filtrar entre los productos ya existentes.
				</p>
			</div>
		</section>
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabNewProduct" class="mdl-tabs__tab is-active">Nuevo</a>
				<a href="#tabListProducts" class="mdl-tabs__tab">Filtrar</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewProduct">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo producto
							</div>
							<div class="full-width panel-content">
								<form method="post">
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos del producto</h5>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NombreUsuario" 
												name="NombreUsuario">
												<label class="mdl-textfield__label" for="NombreUsuario">Nombre usuario</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode" name="BarCode">
												<label class="mdl-textfield__label" for="BarCode">Codigo de producto</label>
												<span class="mdl-textfield__error">Invalid barcode</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NombreProducto" 
												name="NombreProducto">
												<label class="mdl-textfield__label" for="NombreProducto">Nombre producto</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="tipo" 
												name="tipo">
												<label class="mdl-textfield__label" for="tipo">Tipo de producto</label>
												<span class="mdl-textfield__error">Invalid name</span>
											</div>

											

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9.]*(\.[0-9]+)?" id="CantidadProducto" name="CantidadProducto">
												<label class="mdl-textfield__label" for="CantidadProducto">Cantidad</label>
												<span class="mdl-textfield__error">Invalid price</span>
											</div>
											
												
										</div>

										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<h5 class="text-condensedLight">Datos del producto</h5>
											
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="MarcaProducto" 
												name="MarcaProducto">
												<label class="mdl-textfield__label" for="MarcaProducto">Marca</label>
												<span class="mdl-textfield__error">Invalid Mark</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="ModeloProducto"
												name="ModeloProducto">
												<label class="mdl-textfield__label" for="ModeloProducto">Modelo</label>
												<span class="mdl-textfield__error">Invalid model</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="SerieProducto"
												name="SerieProducto">
												<label class="mdl-textfield__label" for="SerieProducto">Serie</label>
												<span class="mdl-textfield__error">Invalid serial</span>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9.]*(\.[0-9]+)?" id="PrecioProducto" name="PrecioProducto">
												<label class="mdl-textfield__label" for="PrecioProducto">Precio</label>
												<span class="mdl-textfield__error">Invalid price</span>
											</div>
											
											
										</div>
									</div>

									<p class="text-center">

										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct" name="btn_registro">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addProduct">Ingresar producto</div>
									</p>
								</form>
								<?php
								include("registrar.php");
								?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="mdl-tabs__panel" id="tabListProducts">
				<div class="mdl-grid">
					<h5 class="text-condensedLight">Seleccione la lupa e ingrese el criterio de busqueda</h5>
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<form action="#">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
								<label class="mdl-button mdl-js-button mdl-button--icon" for="BuscarProducto">
									<i class="zmdi zmdi-search"></i>
								</label>

								<div class="mdl-textfield__expandable-holder">
									<input class="mdl-textfield__input" type="text" id="BuscarProducto">
									<label class="mdl-textfield__label"></label>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>