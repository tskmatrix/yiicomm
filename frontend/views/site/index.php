<?php
/* @var $this yii\web\View */

use frontend\assets\IndexAsset;
use yii\helpers\Html;

$this->title = 'Yiicomm - a tutorial';

IndexAsset::register($this);
?>

<!-- start: Container -->
<div id="container">
	<div class="container span12">
		<div class="row-fluid">

<!-- <div class="site-index"> -->

	<div class="jumbotron">
		<h1>Congratulations!</h1>

		<p class="lead">You have successfully created your Yii-powered
			application.</p>

		<p><?= Html::a('Get started with Yii','http://www.yiiframework.com',['class'=>'btn btn-lg btn-success', 'target'=>'_blank']); ?></p>
	</div>
	<div class="body-content">
		<div class="row">
			<div class="col-lg-4">
				<h2>Step 1</h2>
				<p>This is a 15 part tutorial on Beginning Yii 2.0. The object of
					the tutorial is to flesh out an ecommerce website. Be sure that you
					follow the Tutorial on YouTube.</p>

				<p><?= Html::a('PlayList &raquo;','https://www.youtube.com/playlist?list=PLMyGpiUTm10799F8FfSai3wvlL4DB4qqX',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
			</div>
			<div class="col-lg-4">
				<h2>Step 2</h2>
				<p>
					If you've gotten this far, you have already seen the first video
					and are ready for more.<br /> We will be coding our site pretty
					heavily and you will find the code on github.
				</p>

				<p><?= Html::a('GitHub &raquo;','https://github.com/tskmatrix/yiicomm',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
			</div>
			<div class="col-lg-4">
				<h2>Step 3</h2>

				<p>Now you may add additional extensions to your site. Be sure that
					they are for Yii 2.0.</p>

				<p><?= Html::a('packagist &raquo;','https://packagist.org/search/?q=yii2',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
			</div>
		</div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Documentation</h2>

                <p>The Official Documentation for Framework 2.0 updated every 15 minutes.</p>

                <p><a class="btn btn-default" href="http://stuff.cebe.cc/yii2docs/" target="_blank">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>The Forum</h2>

                <p>Have a question or an issue that needs an answer? The Yii Forum is the place to go.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/" target="_blank">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Extensions</h2>

                <p>Looking for an extension and don't want to re-invent the wheel? Check out the extensions here.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/" target="_blank">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
    </div>
    </div>
</div>
