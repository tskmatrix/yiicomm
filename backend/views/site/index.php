<?php
/* @var $this yii\web\View */

use backend\assets\IndexAsset;
use yii\helpers\Html;

$this->title = 'Yiicomm Admministration';

IndexAsset::register($this);
?>
<div class="container">

<!-- Today status. jQuery Sparkline plugin used. -->

<div class="row">
    <div class="col-md-12">
        <!-- List starts -->
        <ul class="today-datas text-center">

            <!-- List #1 -->
            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Visitors/Day</small>
                    12,000
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Customers</small>
                    <?= $custCount ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark2" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Today's Orders</small>
                    <?= $orders?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark3" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Total Profit/Year</small>
                    <? print_r($profitytd) ?>
                </div>

                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- List starts -->
        <ul class="today-datas text-center">

            <!-- List #1 -->
            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Active Campaigns</small>
                    <?= $campaigncount ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="datas-icon circle red pull-left"><i class="icon-group"></i></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Somethig else</small>
                    <?= $custCount ?>
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark2" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Abandoned Cart Rate</small>
                    15.66%
                </div>

                <div class="clearfix"></div>
            </li>

            <li class="stacked">
                <!-- Graph -->
                <div class="pull-left"><span id="todayspark3" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text pull-left">
                    <small>Today's Profit</small>
                    <? print_r($todayprofit) ?>
                </div>

                <div class="clearfix"></div>
            </li>
        </ul>
    </div>
</div>
<!-- Today status ends -->


</div> <!-- container ends -->

