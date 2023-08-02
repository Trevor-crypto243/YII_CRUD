<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'YII CRUD APPLICATION';
?>
<div class="site-index">
    <h1>UPDATE POST</h1>


    <div class="body-content">
        <?php $form = ActiveForm::begin()?>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                        <?= $form->field($post,'title'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                        <?= $form->field($post,'description')->textarea(['rows'=>'6']); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                        <?php $items =['e-commerce'=>'e-commerce', 'CMS'=>'CMS','MVC'=>'MVC']; ?>
                        <?= $form->field($post,'category')->dropDownList($items,['prompt'=>'Select any of the item']); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                      <div class="col-lg-3">
                        <?= Html::submitButton('Update Post',['class'=>'btn btn-primary']);?>
                      </div>

                      <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php $form = ActiveForm::end()?>
    </div>
</div>
