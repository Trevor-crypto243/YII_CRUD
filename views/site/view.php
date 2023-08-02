<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'YII CRUD APPLICATION';
?>
<div class="site-index">
    <h1>VIEW POST</h1>


    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->title;?>               
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->description;?>                                              
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->category;?>                                                          
            </li>

        </ul> 
        <div class="row">
            <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Home</a>
        </div>

    </div>
</div>
