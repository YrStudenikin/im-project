<?php
$this->title = $title;
$this->params['breadcrumbs'][] =  [
    'label' => $this->title,
];

use app\models\Config;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html; ?>


<!-- Register Account Start -->
<div class="register-account pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register-title">
                    <h3 class="mb-10">РЕГИСТРАЦИЯ </h3>
                    <p class="mb-10">Если у Вас уже есть учетная запись -  <a class="link" title="Войти" href="<?=\yii\helpers\Url::to(['/sign-in'])?>">войдите на странице входа</a> </p>
                </div>
            </div>
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <?php $form = ActiveForm::begin(['method'=>'POST','options'=>['id'=>'authForm','class'=>'form-vertical']]); ?>
                    <fieldset>
                        <legend>Ваши личные данные</legend>


                        <div class="row">
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'f_name')->textInput(['autofocus' => true]);?>
                            </div>
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'l_name')->textInput();?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'p_name')->textInput();?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'email')->textInput();?>
                            </div>
                            <div class="col-sm-10 col-lg-6">
                                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class, [
                                    'mask' => '+38 (099) 999-99-99','clientOptions'=>['clearIncomplete'=>true]]); ?>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Ваш пароль</legend>
                        <div class="row">
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'password_hash')->passwordInput();?>
                            </div>
                            <div class="col-sm-10 col-lg-6">
                                <?=$form->field($model, 'password_repeat')->passwordInput();?>
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="pull-right d-flex align-content-center">
                            <?=$form->field($model, 'agree')->checkbox([
                                'label' => 'Я прочитал и согласен с <span id="privacy-policy-link" data-toggle="modal" data-target="#privacy-p-modal">политикой конфиденциальности</span>',
                                'checked' => false
                            ]);?>

                            <?=Html::submitButton('Продолжить', ['class'=>'newsletter-btn signup-btn', 'style' => 'margin-left: 1rem;'])?>
                        </div>
                    </div>
                <?php $form = ActiveForm::end(); ?>

                <div class="modal" id="privacy-p-modal" data-keyboard="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Политика конфиденциальности</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?= Yii::$app->formatter->asHtml(Config::getValue(Config::PRIVATE_POLICY_TEXT), [
                                    'Attr.AllowedRel' => array('nofollow'),
                                    'HTML.SafeObject' => true,
                                    'Output.FlashCompat' => true,
                                    'HTML.SafeIframe' => true,
                                    'URI.SafeIframeRegexp'=>'%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%',
                                ]) ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Register Account End -->

<?php
$js = <<< JS
$('#privacy-policy-link').on('click', function() {
    
});
JS;

$this->registerJs( $js, $position = yii\web\View::POS_READY, $key = null );
?>
