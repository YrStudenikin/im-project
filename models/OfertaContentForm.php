<?php


namespace app\models;


use yii\base\Model;

class OfertaContentForm extends Model
{
    public $oferta_text;

    public function attributeLabels()
    {
        return [
            'oferta_text' => 'Текст страницы',

        ];
    }

    public function rules()
    {
        return [
            [['oferta_text'], 'required'],
            [['oferta_text'], 'string', 'max' => 30000],
            [['oferta_text'], 'trim'],
        ];
    }

}