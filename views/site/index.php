<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;


$this->title = 'Employees';

?>

<div class="site-index">
    <section class="hero-wrap d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="hero-title">
                    <h1>Lorem ipsum dolor sit amet</h1>
                    <h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <?php $form = ActiveForm::begin([                    
                        'enableAjaxValidation'   => false,
                        'enableClientValidation' => false,                       
                        'action' => ['index'],
                        'method' => 'get',
                        'options' => [
                            'data-pjax' => 1
                        ],                    
                    ]); ?>
                    <div class="search-box">
                        <div class="row">
                            <div class="col-md">
                                <div class="search-box1">
                                    <div class="search-box-title">
                                        <label>Who?</label><br>
                                        <?= $form->field($employee, 'name')->textInput(['class'=>'search-form', 'id'=>'search_input', 'placeholder'=>'Eg: Ivanov Ivan'])->label(false) ?> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-search">
                        <?= Html::button('Search →', ['class' => 'btn btn-simple btn-search search']) ?>                            
                    </div>
                    <?php ActiveForm::end(); ?>
                    <p class="search-bottom-title">Excepteur sint occaecat cupidatat non proident </p>
                </div>                
            </div>
        </div>
    </section>
    <!--//END MAIN TITLE --> 
    <!--============================= FEATURED LISTING =============================-->
    <section class="main-block featured-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="titile-block">
                        <h2>Featured Listings</h2>
                        <p>A arcu cursus vitae congue mauris rhoncus aenean vel elit</p>
                    </div>
                </div>
            </div>              
            <div id="employees">
                <?php Pjax::begin(); ?>
                <div class="row">

                    <?php foreach ($model as $member): ?>

                        <div class="col-md-3 card-1">
                            <div class="card">
                                <img class="card-img-top" src="images/uploads/250x250/<?= $member->photo ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="card-title"><?= $member->name ?></h6>
                                    <ul class="card-rating"> 
                                        <li>Average level</li>
                                        <li>                                   
                                         <?= $member->averageLevel($member->id) ?>                                                 
                                     </li>                                        
                                 </ul>                            
                             </div>
                             <div class="card-skills">                            
                                <p>Sociability</p>
                                <span class="level">  <?= $member->sociability ?></span> 
                            </div>
                            <div class="card-skills">
                                <p>Engineering Skills</p>
                                <span class="level"><?= $member->engineering_skills ?></span>                           
                            </div>
                            <div class="card-skills">
                                <p>Time Management</p>
                                <span class="level"><?= $member->time_management ?></span>                             
                            </div>
                            <div class="card-skills">
                               <p>Languages</p>
                               <span class="level"><?= $member->languages ?></span>                        
                           </div>                          
                           <div class="card-bottom">
                            <p>PROJECTS</p>
                            <span class="open-close_green">                                
                                <?= $member->projectsCount($member->id) ?>
                            </span>
                        </div>
                    </div>                   
                </div>                
            <?php endforeach; ?>                

        </div>  
        <?=
        LinkPager::widget([
           'pagination' => $pages,
           'options' => [
             'class' => 'pagination'],
             'firstPageLabel' => false,
             'lastPageLabel' => false,
             'prevPageLabel' => '&laquo;',
             'nextPageLabel' => '&raquo;',

             'pageCssClass' => 'btn btn-outline-danger',
             'nextPageCssClass' => 'btn btn-outline-danger',
             'prevPageCssClass' => 'btn btn-outline-danger',
             'activePageCssClass' => 'active',

             'firstPageCssClass' => 'first',
             'maxButtonCount' => 3,

         ]);?>
         <?php Pjax::end(); ?>
     </div>
 </div>
</section>

<!--//END FEATURED LISTING -->
</div>
<?php
$js = <<<JS

$('.search-box').on("change click", function() {
     if(search_input.value.length > 1){  
        $.ajax({
            type: 'GET',
            url: 'search',
            data: {'search':search_input.value},
            success: function(data){ 
                $('#employees').html(data);
            }
            })
          }
        })
JS;

        $this->registerJs($js);
        ?>  

