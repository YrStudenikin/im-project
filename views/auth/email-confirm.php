<?PHP

/* @var $this yii\web\View */

$this->title = 'Подтверждение e-mail';
$this->params['breadcrumbs'][] = ['label' => 'Регистрация', 'url' => ['/sign-in']];
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
<div class="pb-60" style="margin-top: -20px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7"> 
                <div class="msg-block">
                    <i class="fa fa-info-circle" aria-hidden="true" style="color: #40c31f;font-size: 1.3rem; padding-right: 7px;"></i>Ваша учетная запись была создана и требует подтверждения.
                    Ссылка для подтверждения была отправлена на указанный вами адрес электронной почты.
                </div>
                <div class="btn-list">
                    <?=Html::a('Главная', '/', ['class' => 's-default'])?>
                    <?=Html::a('Войти', '/sign-in', ['class' => 's-default'])?>
                </div>
            </div>
        </div>
    </div>
</div>
