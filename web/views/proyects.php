<?php 

function proyects($s){

  $data = array(
    array(
      'name' => 'Yeah English Yeah',
      'link' => $s.'/proyects/YEY',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'LernSoft',
      'link' => 'http://store.kevao.tech/',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'Ecumax9',
      'link' => $s.'/proyects/E9',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'Plantillas',
      'link' => 'https://kevao18.github.io/plantillas/index.html',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'Aromas & Ángeles',
      'link' => 'https://aromasyangelesoficial.000webhostapp.com/Inicio',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'Yagenautas',
      'link' => 'https://yagenautas.000webhostapp.com/',
      'img' => $s.'assets/media/favicon.png'
    ),
    array(
      'name' => 'Poket',
      'link' => 'https://kevao18.github.io/poket/?p=1',
      'img' => $s.'assets/media/favicon.png'
    )
  );

  $rows_data = count($data);
  $i = 0;
  $j = 0;

?>
    <header class="bannerP">
      <p class="display-1 color-2 text-center py-6-r">Proyectos</p>
    </header>
    <div class="container">
<?php
  foreach ($data as $cards) {

    if ($i == 0) {

      ?>
      <div class="row">
      <?php

    }

    $i += 1;
    $j += 1;

    ?>
        <div class="col-md-3 py-2-r">
          <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
          <div class="card py-2-r px-2-r">
            <a href="<?=$cards['link']?>" class="color-3 text-center"><?=$cards['name']?></a>
          </div>
        </div>
    <?php

    if (($i == 4) || ($j == $rows_data)) {

      ?>
      </div>
      <?php
      $i = 0;

    }

  }

	?>
    </div>
	<?php
}

?>
