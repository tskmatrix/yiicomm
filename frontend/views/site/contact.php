<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use frontend\assets\IndexAsset;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

IndexAsset::register($this);

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <!-- Google Map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.454059156738!2d-95.57263599999999!3d29.995115999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640d2629077027b%3A0x16725099b7fa483d!2sVintage+Park+Leasing+%26+Management!5e0!3m2!1sen!2sus!4v1403725703074" width="100%" height="300" frameborder="0" style="border:0"></iframe>
    <!---/map-->
    <!-- End Google Map -->
    <div class="container">		
	<div class="row contacts-page">
		<div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section><!-- Contacts -->
                        <h4 class="content-title">Contacts Details</h4>
                        <ul class="list-unstyled margin-bottom-20">
                            <li><i class="fa fa-map-marker"></i> 110 Vintage Park Boulevard, Houston, TX 77070</li>
                            <li><i class="fa fa-envelope"></i> info@example.com</li>
                            <li><i class="fa fa-phone"></i> 1(281) 3x0 x52x</li>
                            <li><i class="fa fa-globe"></i> http://www.example.com</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Business Hours -->
                        <h4 class="content-title">Business Hours</h4>
                        <ul class="list-unstyled">
                            <li><strong>Monday-Friday</strong>: 8am to 5pm</li>
                            <li><strong>Saturday</strong>: Closed</li>
                            <li><strong>Sunday</strong>: Closed</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Why we are? -->
                        <h4 class="content-title">About Us</h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        <ul>
                            <li class="fa fa-check">Odio dignissimos ducimus</li><br/>
                            <li class="fa fa-check">Blanditiis praesentium volup</li><br/>
                            <li class="fa fa-check">Eos et accusamus</li>
                        </ul>
                    </section>
                </div>
            </div>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput()->hint('Please enter your name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject')->dropDownList(['0' => 'Please Select', '1' => 'General inqury', '2' => 'I need Support']) ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</div>
</div>
