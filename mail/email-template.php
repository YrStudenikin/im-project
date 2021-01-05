<?php

use yii\helpers\Html;

$alias  = Yii::getAlias('@webroot');


$this->beginPage()
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="<?= Yii::$app->charset ?>" />
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body style="text-align: center;background-color: #f2f2f2;width: 100%;">
    <?php $this->beginBody() ?>
    <div style="max-width: 900px;margin: 0 auto;background-color: #ffffff">
        <table cellspacing="0" cellpadding="0" style="width: 100%;font-family: sans-serif;">
            <!--HEADER-->
            <tr>
                <td>
                    <div style="text-align:left;background-color: #506bd9; padding: 10px 20px;">
                        <h2 style="margin: 0;color: #eef1f3;"><?=$header?></h2>
                     <div>
                </td>
            </tr>
            <!--CONTENT-->
            <tr>
                <td>
                    <div style="text-align:left;padding: 10px 20px;">
                        <p style="text-align: justify;font-size: 16px; line-height: 34px;color:#454545;"><?=$content?></p>
                    </div>
                </td>
            </tr>
            <!--END CONTENT-->

        </table>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>