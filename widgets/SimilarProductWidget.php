<?php

namespace app\widgets;

use app\repositories\productRepository\ProductReadRepository;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\db\ActiveQuery;

/**
 * Class FeaturedProductsWidget
 * @package app\widgets
 * @property ActiveQuery $queryCategory
 * @property string[] $header
 */

class SimilarProductWidget extends Widget
{
    private $productRepository;

    public $categoryId;
    public $queryCategory;
    public $header;

    public function __construct(ProductReadRepository $category, $config = [])
    {
        $this->productRepository = $category;
        parent::__construct($config);
    }


    public function init()
    {
        parent::init();

        if ($this->categoryId === null)
        {
            $this->categoryId === 2;
        }

        $this->queryCategory = $this->productRepository->getProductByCategoryForSimilarWidget($this->categoryId);

        if ($this->queryCategory === null) {
            throw new InvalidConfigException('The "query" property must be set.');
        }

        $this->header = 'Похожие товары';
    }

    public function run()
    {
        if ($this->queryCategory)
        {
            return $this->render('similar-product', [
               'header'  => $this->header,
               'products'  => $this->queryCategory->all(),
            ]);
        }

        return '';
    }
}