<?php 

function About($ag, $ex, $s){
	?>
    <div class="mt-6-r">
        <center><h1 class="display-3" style="">Kevin Andrés Orrego Martínez</h1></center>
    </div>
    <div class="container">
			<center><img class="icon" src="<?=$s?>/assets/media/favicon.png"></center>
			<br>
			<h1 class=" text-center py-1-r">
				Sobre mi
			</h1>
			<br>
			<p class="text-center container con1">
				Hola me llamo Kevin Andrés Orrego Martínez, tengo <?=$ag?> 
				años y <?=$ex?> años de experiencia en desarrollo web, 
				me gradue en 2019 del INEM "José Félix de Restrepo"
			</p>
			<br>
			<p class="text-center container con1">
				Como programador mi formación técnica, laboral y
				humana me han ayudado a reforzar mi recursividad,
				creatividad, trabajo en equipo y disciplina, he obtenido
				experiencia con diversas tecnologías en el ámbito del
				desarrollo de web.
			</p>
		</div>
		<br><br>
		<div class="container bg-ligth">
			<h2 class="text-center fs-4">Habilidades</h2>
			<div class="text-center fs-2 my-4-r">Lenguages</div>
			<div class="row">
				<div class="col-xs-12 col-lg-3">
					<center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1014-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Html5_dise%C3%B1o_web.png"/>
							<br>HTML5
						</a>
					</center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1023-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png"/>
							<br>CSS3
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1023-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/480px-Unofficial_JavaScript_logo_2.svg.png"/>
							<br>JS
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-3">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1059-5459778/jpg" target="_blank">
							<img class="pro-icon" src="http://pngimg.com/uploads/php/php_PNG26.png"/>
							<br>PHP
						</a>
				    </center>
				</div>
			</div>
			<div class="text-center fs-2 my-4-r">Frameworks y Librerias</div>
			<div class="row">
				<div class="col-xs-12 col-lg-4">
				    <center>
						<a class="color-3" href="https://getbootstrap.com/" target="_blank">
							<img class="pro-icon" src="https://www.drupal.org/files/project-images/bootstrap-stack.png"/>
							<br>BOOTSTRAP
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-4">
				    <center>
						<a class="color-3" href="https://laravel.com/" target="_blank">
							<img class="pro-icon" src="https://www.mavenlogix.org/wp-content/uploads/2019/01/laravel-512-400x400.png"/>
							<br>LARAVEL
						</a>
				    </center>
				</div>
				<div class="col-xs-12 col-lg-4">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/Certificate/1082-5459778/jpg" target="_blank">
							<img class="pro-icon" src="https://www.programmingscripts.com/wp-content/uploads/2016/01/jquery-icon.png"/>
							<br>JQUERY
						</a>
				    </center>
				</div>
			</div>
			<div class="text-center fs-2 my-4-r">Base de datos</div>
			<div class="row">
				<div class="col-xs-12 col-lg-12">
				    <center>
						<a class="color-3" href="https://www.sololearn.com/certificates/course/en/5459778/1060/landscape/png" target="_blank" >
							<img class="pro-icon" src="http://perudev.pe/wp-content/uploads/2019/05/mysql_PNG35.png"/>
							<br>SQL
						</a>
				    </center>
				</div>
			</div>
			<div class="mt-3-r mb-1-r row">
				<div class="col-6">
					<a href="<?=$s?>/assets/docs/CV.pdf" target="_blank" class="btn btn-block bg-main color-2">curriculum</a>
				</div>
				<div class="col-6">
					<a href="<?=$s?>/CM" class="btn btn-block bg-success color-2">Contactame</a>
				</div>
			</div>
			<div class="mb-1-r">
				<a href="https://github.com/KEVAO18"  target="_blank" class="btn btn-block bg-3 color-2"><i class='fab fa-github-alt'></i> GitHub</a>
			</div>
		</div>
		<br>
		<br>
	<?php
}


?>