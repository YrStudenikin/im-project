<?php

use app\helpers\PriceHelper;
use app\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $product Product */

?>

<div class="single-product">
    <div class="pro-img" style="position: relative;">
        <a href="<?=Url::to(['/catalog/product', 'id' =>$product->id]) ?>">
            <?php
            $img_src = null;
            if(isset($product->photo) ) {
                $img_src = $product->photo->img_src;
            }
            echo Yii::$app->thumbnail->img($img_src, [
                'placeholder' => [
                    'width' => 400,
                    'height' => 400
                ],
                'thumbnail' => [
                    'width' => 400,
                    'height' => 400,
                ]
            ]);
            ?>
        </a>

<!--        --><?php //if ($product->is_new == 1): ?>
<!--            <div class="is-new-stic">Новинка!</div>-->
<!--        --><?php //endif; ?>

        <?php
        if (isset($product->price_old) && $product->price_old > $product->price_new)
        {
            $price = $product->price_new;
            $old_price = $product->price_old;
            $difference = (($old_price - $price) / (($old_price + $price) / 2)) * 100;

            echo '<div class="difference-special"><span style="padding-right: 2px;">-</span>' .  ceil($difference) . '%</div>';
        }
        ?>

    </div>
    <div class="pro-content">
        <h4 <? if (strlen($product->name) > 80) : ?> data-toggle="tooltip" data-placement="bottom" title="<?= mb_strtolower($product->name); ?>" <?php endif; ?>> <?=Html::a(mb_strtolower($product->name), Url::to(['/catalog/product', 'id' =>$product->id]) )?></h4>
        <div class="price-block-widget">
            <?php if (isset($product->price_old)): ?>
                <div class="prev-price"><?=PriceHelper::format($product->price_old) ?></div>
            <?php endif; ?>
            <div class="price"><?=PriceHelper::format($product->price_new) ?></div>

        </div>
<!--        <div class="pro-actions">-->
<!--            <div class="actions-secondary">-->
<!--                <a class="add-cart" href="--><?//= Url::to(['/cart/add', 'id' => $product->id]) ?><!--" data-id="--><?//=$product->id?><!--" data-toggle="tooltip" title="В корзину">В корзину</a>-->
<!--            </div>-->
<!--        </div>-->
    </div>

</div>

<?php
$script = <<< JS
    $(function(){
  $(".pro-content h4 a").each(function(i){
    let len = $(this).text().length;
    if(len>50)
    {
      $(this).text($(this).text().substr(0,50)+'...');
    }
  });
});

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({ 
        delay: { "show": 800, "hide": 100 },
        offset: '0, 10'
        })
    })

JS;
$this->registerJs($script);
?>