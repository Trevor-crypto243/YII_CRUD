<?php
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'YII CRUD APPLICATION';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4" style="color:red">YII CRUD APPLICATION TUTORIAL</h1>
    </div>

    <div class="body-content">
    <!-- <?php print_r($posts);?> -->
        <div class="row">

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

            <?php if(count($posts)>0): ?>
                <?php foreach($posts as $post): ?>
                    <tr class="table-active">
                    <th scope="row"><?php echo $post->id?></th>
                    <td><?php echo $post->title?></td>
                    <td><?php echo $post->description?></td>
                    <td><?php echo $post->category?></td>
                    <td>
                        <span><?= Html::a('View')?></span>
                        <span><?= Html::a('Update')?></span>
                        <span><?= Html::a('Delete')?></span>
                
                    </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>No records found</tr>
            <?php endif; ?>
  
        
            </tbody>
            </table>

        </div>

    </div>
</div>
