<?php

use app\models\information\Information;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $informationArticles Information */

$this->title = $informationArticles->title;
$this->params['breadcrumbs'][] = ['label' => 'Полезная информация', 'url' => ['index']];
$this->params['breadcrumbs'][] = $informationArticles->title;

?>

<div class="container">
    <div class="row">
        <div class="detail-news-wrapper mb-5">
            <h1 class="text-center mb-4"><?=$informationArticles->title ?></h1>
            <div class="detail-news-body">
<!--                <div class="left-inner-detail-news">-->
<!--                    <div class="detail-news-img">-->
<!--                        --><?php
//                        $img_src = null;
//                        if(isset($informationArticles->photo) && file_exists($informationArticles->photo->img_src)) {
//                            $img_src = ($informationArticles->photo->img_src);
//                        }
//                        echo Yii::$app->thumbnail->img($img_src, [
//                            'placeholder' => [
//                                'width' => 400,
//                                'height' => 400
//                            ],
//                            'thumbnail' => [
//                                'width' =>400,
//                                'height' => 400,
//                            ]
//                        ]);
//                        ?>
<!--                    </div>-->
<!--                </div>-->
                <div class="detail-news-text ml-md-5" style="width: 100%">
                    <?= Html::decode($informationArticles->body) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$script = <<< JS
    $(document).ready(function() {
        
        let popupImg = $(".information-body-img-wrap").children("img");
	
	popupImg.click(function(){
	  	let img = $(this);
		let src = img.attr('src');
		$("body").append("<div class='popup'>"+
						 "<div class='popup_bg'></div>"+
						 "<img src='"+src+"' class='popup_img' />"+ 
						 "<span class='close'>×</span>" +
						 "</div>"); 
		$(".popup").fadeIn(600);
		$(".popup_bg").click(function(){ 
			$(".popup").fadeOut(600);
			setTimeout(function() {
			  $(".popup").remove();
			}, 600);
		});
		
		$(".close").click(function(){ 
			$(".popup").fadeOut(600);
			setTimeout(function() {
			  $(".popup").remove();
			}, 600);
		});
		
	});
	
	document.body.addEventListener('keydown', function (e) {
	    if ($('.popup')) {
	        if (e.key === 'Escape') {
	            setTimeout(function() {
			        $(".popup").remove();
			    }, 400);
            }
	    }

}, false);
	
});
JS;
$this->registerJs($script);
?>
