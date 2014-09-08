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


<p><pre>
<?php // print_r($categories)?><br/>
<?php // print_r($subcats)?><br/>
<?php // print_r($featuredProducts)?><br/>
</pre></p>
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
					$subcntr = 0;
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
								//	foreach($subcats as $sub[])
								//	{		
								//		$subsize = sizeof($sub);
										//echo $subsize . ': ';
										
										//echo $subcntr . ' -> '. $subsize . ', ' ;
								//		for($i = 0; $i == 2; $i++)
								//		 {
								//			echo $subsize . ' -> ' . $i;
									//		if($sub[$i]['ParentProductCategoryId'] == $cat['ProductCategoryId'])
									//		{							
									//			echo Html::a($sub[$i]['Name'].', ','shop/index/'.$sub[$i]['ProductCategoryId']);
									//		}
									//	}
								//	}
										echo Html::a('See All','shop/index/'.$cat['ProductCategoryId'],['class'=>'see-all']); 
										
									 ?>
									</p>
									
								</div>
							</div>
						</li>
						<?php 
						$subcntr++;
					 } ?>
					</ul>
				</div>
				<!-- end: Top categories -->

				<!-- start: Featured products -->
				<div class="row-fluid featured-products">
				<h3>Hot Products</h3>
					<ul class="thumbnails">
						<li class="col-md-3 item">
							<div class="thumbnail">
								<a href="./product.html" class="image"> <img
									src="img/products/categories/product-2.jpg" alt=""> <span class="frame-overlay"></span>
									<span class="price">$35</span>
								</a>
								<div class="inner notop nobottom">
									<h4 class="title">Product #1</h4>
									<p class="description">Etiam porta sem malesuada magna mollis
										euismod. Donec sed odio dui.</p>
								</div>
							</div>
							<div class="inner darken notop">
								<a href="#" class="btn btn-add-to-cart">Add<i
									class="fa fa-shopping-cart"></i></a>
							</div>
						</li>
						<li class="col-md-3 item">
							<div class="thumbnail">
								<a href="./product.html" class="image"> <img
									src="img/products/categories/product-4.jpg" alt=""> <span class="frame-overlay"></span>
									<span class="price">$50</span>
								</a>
								<div class="inner notop">
									<h4 class="title">Product #2</h4>
									<p class="description">Etiam porta sem malesuada magna mollis
										euismod. Donec sed odio dui.</p>
								</div>
							</div>
							<div class="inner darken notop">
								<a href="#" class="btn btn-add-to-cart">View options</a>
							</div>
						</li>
						<li class="col-md-3 item">
							<div class="thumbnail">
								<a href="./product.html" class="image"> <img
									src="img/products/categories/product-6.jpg" alt=""> <span class="frame-overlay"></span>
									<span class="price">$25</span>
								</a>
								<div class="inner notop">
									<h4 class="title">Product #3</h4>
									<p class="description">Etiam porta sem malesuada magna mollis
										euismod. Donec sed odio dui.</p>
								</div>
							</div>
							<div class="inner darken notop">
								<a href="#" class="btn btn-add-to-cart">Add<i
									class="fa fa-shopping-cart"></i></a>
							</div>
						</li>
						<li class="col-md-3 item">
							<div class="thumbnail">
								<a href="./product.html" class="image"> <img
									src="img/products/categories/product-8.jpg" alt=""> <span class="frame-overlay"></span>
									<span class="price">$80</span>
								</a>
								<div class="inner notop">
									<h4 class="title">Product #4</h4>
									<p class="description">Etiam porta sem malesuada magna mollis
										euismod. Donec sed odio dui.</p>
								</div>
							</div>
							<div class="inner darken notop">
								<a href="#" class="btn btn-add-to-cart">Add<i
									class="fa fa-shopping-cart"></i></a>
							</div>
						</li>
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
