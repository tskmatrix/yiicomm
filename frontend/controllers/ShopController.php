<?php

namespace frontend\controllers;

use yii\data\Pagination;
use common\models\Productcategories;
use common\models\Products;
use common\models\Productmedias;

class ShopController extends \yii\web\Controller
{
    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionIndex($id = null)
    {
    	
    	$sidebarcategories = Productcategories::find()->where('ParentProductCategoryId = 0')->asArray()->all();
    	
    	if($id === 0 || $id == null)
    	{
    		$query = Products::find()->with('productmedias');
    		$countQuery = clone $query;
    		$pages = new Pagination(['totalCount' => $countQuery->count()]);
    		$products = $query->offset($pages->offset)
    		->limit(3) //$pages->limit
    		->asArray()
    		->all();
    		
    		$countProducts = Products::find()->count();    		
    		$pagetitle = ['Name' => 'All products'];
    	} else {
    		$query = Products::find()->with('productmedias')->where('ProductCategoryId = '. $id);
    		$countQuery = clone $query;
    		$pages = new Pagination(['totalCount' => $countQuery->count()]);
    		$products = $query->offset($pages->offset)
    		->limit($pages->limit)
    		->asArray()
    		->all();
    		
    		$countProducts = Products::find()->where('ProductCategoryId = '. $id)->count();
    		$pagetitle = Productcategories::find()->where('ProductCategoryId = '. $id)->asArray()->one();
    	}
    	
    	
        return $this->render('index',[
				'sidebarcategories' => $sidebarcategories,
        		'products' => $products,
        		'pages' => $pages,
        		'countProducts' => $countProducts,
        		'pagetitle' => $pagetitle,
        ]);
    }

    public function actionNewcustomer()
    {
        return $this->render('newcustomer');
    }

    public function actionNewproducts()
    {
        return $this->render('newproducts');
    }

    public function actionProductdetail($id = null)
    {
    	if($id !== null || $id !== 0)
    	{
    		$product = Productmedias::find()->with('product')->where('ProductId = '. $id)->asArray()->one();
    	} else {
    		
    	}
        return $this->render('productdetail',[
				'product' => $product,
        		
        ]);
    }

}
