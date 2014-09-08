<?php

namespace frontend\controllers;

class ShopController extends \yii\web\Controller
{
    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNewcustomer()
    {
        return $this->render('newcustomer');
    }

    public function actionNewproducts()
    {
        return $this->render('newproducts');
    }

    public function actionProductdetail()
    {
        return $this->render('productdetail');
    }

}
