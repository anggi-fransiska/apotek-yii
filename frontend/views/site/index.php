<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Produk Apotik</h1>

        <p class="lead">Daftar informasi Apotik Sehat</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <?php
            foreach ($model->items as $item) {
            ?>
                <div class="col-lg-4">
                    <?= Html::img('@web/uploads/' . $item->img_url, ['class' => 'img-thumbnail rounded mb-3', 'width' => '50%']) ?>
                    <h2><?= $item->name ?></h2>


                    <p><a class="btn btn-success" href="http://localhost/apotik/frontend/web/item/index">Info Produk</a></p>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>