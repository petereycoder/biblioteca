<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Libros a la venta</h1>
<div class="row">

    <?php foreach($libros as $libro): ?>

        <div class="col-4 col-sm-12  col-md-4 m-2  img-thumbnail ">
            <a href="#" class="img-fluid">
                <?= Html::img($libro->imagen) ?>
                <?= Html::encode("{$libro->titulo}") ?>
            </a>
        </div>

        
    <?php endforeach; ?>

</div>

<?= LinkPager::widget(['pagination' => $paginacion]) ?>