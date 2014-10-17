<?php
use frontend\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register ( $this );

/* @var $this yii\web\View */

$this->title = 'Yiicomm - Checkout';
$this->params['breadcrumbs'][] = $this->title;
?>
<p><?php echo $this->params['breadcrumbs'][] = $this->title;?></p>
<p>
    <?php echo $message ?>
</p>
<?php /*
echo '<pre></br>';
print_r($cust);
echo '</pre>';
*/
?>