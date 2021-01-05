<?php

/* @var $this yii\web\View */

$this->title = 'Оформление заказа';
$this->params['breadcrumbs'][] = ['label' => 'Корзина', 'url' => ['/cart']];
$this->params['breadcrumbs'][] = $this->title;

use app\helpers\PriceHelper;
use app\models\cart\Cart;
use app\models\OrderForm;
use app\models\user\User;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\MaskedInput;

?>

<div class="pb-5" style="margin-top: -20px;">
    <div class="row">
        <div class="container">
            <div class="thanks-wrap">
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="thanks-block">
                        <div class="thanks-title">
                            <h2>
                                Спасибо за заказ!
                            </h2>
                        </div>
                        <div class="thanks-msg">
                            <p>Ваша заявка принята. В течении часа С вами свяжутся наши менеджеры.</p>
                            <p>
                                Спасибо за доверие к нашему сервису! Если у Вас возникли какие-либо вопросы относительно Вашего заказа или нашей работы, Вы можете позвонить нам или написать:
                            </p>
                            <div class="contacts-block" style="width: 100%; padding: 1.6rem 0 1rem;">
                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                    <div class="phone-wrap">
                                        <div class="phone-i" style="padding: 0.2rem 0;">
                                            <a href="tel:+380721050000">
                                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                                            +38(072)105-00-00
                                            </a>
                                        </div>
                                        <div class="phone-i" style="padding: 0.2rem 0;">
                                            <a href="tel:+380505642871">
                                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                                            +38 (050) 564-28-71
                                            </a>
                                        </div>
                                    </div>
                                    <div class="email-wrap">
                                        <div class="email-i" style="padding: 0.2rem 0;">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <a href="mailto:info@pptk-lnr.ru">
                                            info@pptk-lnr.ru
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper" style="margin-top: 2rem">
                        <?=Html::a('Главная', '/', ['class' => 'def-btn'])?>
                        <?=Html::a('Продолжить покупки', '/catalog', ['class' => 'def-btn'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
