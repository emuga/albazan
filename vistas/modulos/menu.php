<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<!--<li>

				<a href="tintas">

					<i class="fa fa-user"></i>
					<span>Tintas</span>

				</a>

			</li>

			<li>

				<a href="papeles">

					<i class="fa fa-th"></i>
					<span>Papeles</span>

				</a>

			</li>
			
			<li>

				<a href="maquina">

					<i class="fa fa-th"></i>
					<span>Maquinaria</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>-->

			<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Cotizaci&oacute;n</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<!--<li>

						<a href="offset">
							
							<i class="fa fa-circle-o"></i>
							<span>Offset</span>

						</a>

					</li>-->

					<li>

						<a href="etiquetas">
							
							<i class="fa fa-circle-o"></i>
							<span>Etiquetas</span>

						</a>

					</li>
					
					<li>

						<a href="dados">
							
							<i class="fa fa-circle-o"></i>
							<span>Dados</span>

						</a>

					</li>';

					}

					if($_SESSION["perfil"] == "Administrador"){
					
					echo '<li>

						<a href="laminados">
							
							<i class="fa fa-circle-o"></i>
							<span>Laminado</span>

						</a>

					</li>
					
					<li>

						<a href="placas">
							
							<i class="fa fa-circle-o"></i>
							<span>Placas</span>

						</a>

					</li>
					
					<li>

						<a href="negativos">
							
							<i class="fa fa-circle-o"></i>
							<span>Negativos</span>

						</a>

					</li>
					
					<li>

						<a href="rebobinados">
							
							<i class="fa fa-circle-o"></i>
							<span>Rebobinados</span>

						</a>

					</li>';

					}

					?>

				</ul>

			</li>

			<!--<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>

					<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>

				</ul>

			</li>-->

		</ul>

	 </section>

</aside>