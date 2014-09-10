<?php
/* @var $this yii\web\View */
use frontend\assets\IndexAsset;
use yii\helpers\Html;

$this->title = 'Yiicomm - a tutorial';

IndexAsset::register ( $this );
?> 
		<div class="row-fluid">
		<div class="site-index">
			<p>&nbsp;</p>
			<div class="jumbotron">
				<h1>Congratulations!</h1>

				<p class="lead">You have successfully created your Yii-powered
					application.</p>

				<p><?= Html::a('Get started with Yii','http://www.yiiframework.com',['class'=>'btn btn-lg btn-success', 'target'=>'_blank']); ?></p>
			</div>
			<div class="body-content"><!-- <div class="body-content"> -->
				<div class="row"> <!-- <div class="row-fluid"> -->
					 <div class="col-lg-4"><!-- <div class="span4"> -->
						<h2>Step 1</h2>
						<p>This is a 15 part tutorial on Beginning Yii 2.0. The object of
							the tutorial is to flesh out an ecommerce website. Be sure that
							you follow the Tutorial on YouTube.</p>

						<p><?= Html::a('PlayList &raquo;','https://www.youtube.com/playlist?list=PLMyGpiUTm10799F8FfSai3wvlL4DB4qqX',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
					</div>
					<div class="col-lg-4"><!-- <div class="span4">  -->
						<h2>Step 2</h2>
						<p>
							If you've gotten this far, you have already seen the first video
							and are ready for more.<br /> We will be coding our site pretty
							heavily and you will find the code on github.
						</p>

						<p><?= Html::a('GitHub &raquo;','https://github.com/tskmatrix/yiicomm',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
					</div>
					<div class="col-lg-4"> <!-- <div class="span4"> -->
						<h2>Step 3</h2>

						<p>Now you may add additional extensions to your site. Be sure
							that they are for Yii 2.0.</p>

						<p><?= Html::a('packagist &raquo;','https://packagist.org/search/?q=yii2',['class'=>'btn btn-default', 'target'=>'_blank']); ?></p>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4"> <!-- <div class="span4"> -->
						<h2>Documentation</h2>

						<p>The Official Documentation for Framework 2.0 updated every 15
							minutes.</p>

						<p>
							<a class="btn btn-default" href="http://stuff.cebe.cc/yii2docs/"
								target="_blank">Yii Documentation &raquo;</a>
						</p>
					</div>
					<div class="col-lg-4"> <!-- <div class="span4"> -->
						<h2>The Forum</h2>

						<p>Have a question or an issue that needs an answer? The Yii Forum
							is the place to go.</p>

						<p>
							<a class="btn btn-default"
								href="http://www.yiiframework.com/forum/" target="_blank">Yii
								Forum &raquo;</a>
						</p>
					</div>
					<div class="col-lg-4"> <!-- <div class="span4"> -->
						<h2>Extensions</h2>

						<p>Looking for an extension and don't want to re-invent the wheel?
							Check out the extensions here.</p>

						<p>
							<a class="btn btn-default"
								href="http://www.yiiframework.com/extensions/" target="_blank">Yii
								Extensions &raquo;</a>
						</p>
					</div>
				</div>
			</div>
		</div>


<p> <!-- <pre>
<?php // echo 'Categories Array<br/>';
      // print_r($categories); 
      // echo '<br/>'; ?>
<?php // echo 'Subcategories Array<br/>';
      // print_r($subcats); 
      // echo '<br/>'; ?>
<?php // echo 'Featured Products Array<br/>';
      // print_r($featuredProducts); 
      // echo '<br/>';?>
</pre> --> </p>
<!-- <div id="container"> -->
	<!-- <div class="container span12"> -->
		<div class="row-fluid">

			<!-- start: Page section -->
			<section class="span12 page-sidebar">

				<!-- start: Top categories -->
				<div class="row-fluid featured-categories">
				<h3>Categories</h3>
					<ul class="thumbnails">
					<?php 
					foreach($categories as $cat)
					{ 
					?>
						<li class="col-md-3 item">
							<div class="thumbnail">
							<?= Html::a('<img
									src="'. Yii::$app->request->baseUrl .'/img/products/categories/' . $cat['IconUrl'] . '" alt="" /> <span
									class="frame-overlay"></span>
									<h4 class="title">
										<i class="fa fa-folder-open"></i> ' . $cat['Name'] . '
									</h4> <span class="link">view all products <i
										class="fa fa-chevron-right"></i></span>','shop/index/'.$cat['ProductCategoryId'] ,['class'=>'image']) ?>
								<div class="inner notop">
									<p class="description">
									<?php 
									/**
									 * TODO:
									 * use a foreach to display the sub-categories
									 * and append the category number as id back to ShopController
									 */
								//	$subcatsize = sizeof($subcats);
								//	echo $subcatsize; 
									foreach($subcats as $sub)
									{		
										$subsize = sizeof($sub);
										for($i = 0; $i < $subsize; $i++)
										{
											if($sub[$i]['ParentProductCategoryId'] == $cat['ProductCategoryId'])
											{							
												echo Html::a($sub[$i]['Name'].', ','?r=shop/index&id='.$sub[$i]['ProductCategoryId']);
											}
										}
									}
										echo Html::a('See All','?r=shop/index&id='.$cat['ProductCategoryId'],['class'=>'see-all']); 
										
									 ?>
									</p>
									
								</div>
							</div>
						</li>
						<?php 
					 } ?>
					</ul>
				</div>
				<!-- end: Top categories -->

				<!-- start: Featured products -->
				<div class="row-fluid featured-products">
				<h3>Hot Products</h3>
					<ul class="thumbnails">
					<?php 
					foreach($featuredProducts as $fp)
					{
					?>
						<li class="col-md-3 item">
							<div class="thumbnail">
							<?php  echo  Html::a('<img
									src="'. Yii::$app->request->baseUrl .'/img/products/catalog/'. $fp['productmedias'][0]['ImageUrl'] .'" alt="" /> <span class="frame-overlay"></span>
									<span class="price">'. $fp['Price'] .'</span', '?r=shop/productdetail&id='. $fp['ProductId'] , ['class' => 'image']) ?>
								<div class="inner notop nobottom">
									<h4 class="title"><?php  echo $fp['Name'] ?></h4>
									<p class="description"><?php  echo $fp['HtmlDescription'] ?></p>
								</div>
							</div>
							<div class="inner darken notop">
							<?= Html::a('Add<i class="fa fa-shopping-cart"></i>', '?r=shop/cart', ['class'=> 'btn btn-add-to-cart']) ?>
							</div>
						</li>
					<?php } ?>	
					</ul>
				</div>
				<!-- end: Featured products -->

			</section>
			<!-- end: Page section -->

		</div>
		<!-- end row-fluid -->

	<!-- </div>
	end: Container -->

</div>
