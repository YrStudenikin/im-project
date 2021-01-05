<?php

use app\models\Product;

/* @var $products Product[] */
/* @var $header string */

?>

<style>
    .similar-product-widget-wrap {
        padding: 20px;
        margin: 70px 0 30px;
    }
    .similar-p-title {
        font-size: 1.6vw;
        margin-bottom: 30px;
        padding-left: 15px;
        color: #f1ac06;
    }
    .similar-product-inner {
        display: flex;
    }
    .similar-product-inner .single-product {
        display: flex;
        flex-direction: column;
        max-width: 25%;
    }
    .similar-product-inner .single-product .price {
        font-weight: bold;
    }
    
    @media (max-width: 768px) {
        .similar-product-widget-wrap {
            padding: 15px 10px;
            margin: 45px 0 5px;
        }
        .similar-product-inner .single-product .pro-img {
            margin-right: 20px;
            margin-bottom: 10px;
        }
        .similar-product-inner {
            display: inherit;
        }
        .similar-p-title {
            font-size: 2.6vw;
        }
        .similar-product-inner .single-product {
            flex-direction: inherit;
            max-width: inherit;
        }
        .similar-product-inner .single-product .pro-img img {
            width: 130px;
            height: 130px;
        }
        .similar-product-inner .single-product .pro-content h4,
        .similar-product-inner .single-product .pro-content a {
            text-align: left;
            font-size: 14px;
            line-height: 19px;
        }
        .similar-product-inner .single-product .pro-content p {
            text-align: left;
        }
    }

    @media (max-width: 540px) {
        .similar-product-inner .single-product {
            border-bottom: 1px solid #ebebeb;
            padding: 15px 15px 5px 15px;
        }
        .similar-p-title {
            font-size: 17px;
            margin-bottom: 10px;
        }
        .similar-product-inner .single-product .pro-img {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .similar-product-inner .single-product .pro-img img {
            width: 90px;
            height: 90px;
        }
        .similar-product-inner .single-product .pro-content h4,
        .similar-product-inner .single-product .pro-content a {
            font-size: 12px;
            line-height: 17px;
            margin-bottom: 7px;
        }
        .similar-product-inner .single-product .price {
            font-size: 12px;
        }
    }


</style>


<div class="similar-product-widget-wrap border-default">
        <div class="similar-p-title"><?=$header?></div>
    <div class="tab-content product-tab-content jump">
        <div id="new-arrival" class="tab-pane active">
            <div class="similar-product-inner">
                <?php foreach ($products as $product) : ?>
                    <?= $this->render('_product', [
                        'product' => $product
                    ]) ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>