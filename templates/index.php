		<?php
			if(count($perfume) == 0){
		?>
		<h1>No hay existencias</h1>
		<?php
			}
		?>

		<div class="container">
			<div class="row">
				<?php 
					foreach($perfume as $per){
				?>
					<div class="col-sm text-center bg-light">
						<div class="card border-secondary my-2" style="width: 18rem;">
							<img src="<?=$per['imagen'] ?>" class="card-img-top" widht="100" height="200">
							<div class="card-body">
								<h5 class="card-title"><font face="Courier"><?=$per['nombre'] ?></font></h5>
								<p class="card-text"><font face="Courier">$<?=$per['precio'] ?></font></p>
								<a href="/perfume.php?id_perfume=<?=$per['id']?>" class="btn btn-light"><img src="/images/carrito-de-compras.png" alt="png" width="25px" heigth="25px"></a>
								<a type="button" class="btn btn-light" href="http://example.com/eliminarproducto.php?id=<?=$per['id']?>"><img src="/images/eliminar (1).png" alt="png" width="25px" heigth="25px"></a>
								<a type="button" class="btn btn-light" href="http://example.com/editarproducto.php?id=<?=$per['id']?>"><img src="/images/editar.png" alt="png" width="25px" heigth="25px"></a>
							</div>
						</div>
					</div>
				<?php
					}
				?>		  
			</div>
		</div>
	</body>
</html>
