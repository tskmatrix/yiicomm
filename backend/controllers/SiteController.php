<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\Customers;
use common\models\Orderstatuses;
use common\models\Orderdetails;
use common\models\Orders;
use common\models\Campaigns;
use common\models\Queuedemails;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
						'actions' => ['index'],
						'allow' => true,
						'roles' => ['superuser', 'productadmin', 'marketingadmin', 'suppliersadmin'],
			        ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
    	/**
    	 * fetch a count of customers
    	 */
    	$custCount = Customers::find()->count();
    	/**
    	 * fetch the orders for today
    	 */
    	$orders = Orderstatuses::find()->where('StatusOrder = 1') ->count();
    	/**
    	 * fetch the visitor count from the ebsite
    	 */
    	$vistors = 0;
    	/**
    	 * fetch the profit year to date
    	 */
    	$profitytd = Orderdetails::find()->all();
    	/**
    	 * fetch todays profit
    	 */
    	$todayprofit = Orders::find()->with(['orderdetails', 'orderStatus'])->where('OrderStatusId = 1')->all();
    	/**
    	 * fetch the count of active campaigns
    	 */
    	$campaigncount = Campaigns::find()->where('EndedOn = NULL')->count();
    	/**
    	 * count of queued emails
    	 */
    	$countQueued = Queuedemails::find()->where('SentOn <> NULL')->count();
    	
        return $this->render('index',[
        		'custCount' => $custCount,
        		'orders' => $orders,
        		'profitytd' => $profitytd,
        		'todayprofit' => $todayprofit,
        		'campaigncount' => $campaigncount,
        		'countQueued' => $countQueued,
			]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
