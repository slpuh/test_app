<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



$this->title = 'Add employee';
?>
<div class="site-create-profile">
    <!--============================= SUBPAGE HEADER BG =============================-->
    <section class="subpage-bg">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="titile-block title-block_subpage">
                        <h2>Add Employee</h2>
                        <p> <a href="/"> Home</a> / Add Employee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SUBPAGE HEADER BG -->
    <!--============================= ADD EMPLOYEE =============================-->
    <section class="main-block">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="listing-wrap">                       
                        <?php $form = ActiveForm::begin(); ?>
                        <!-- General Information -->
                        <div class="listing-title">
                            <span class="ti-id-badge"></span>
                            <h4>General Information</h4>
                            <p>Write General Information About Employee</p>
                        </div>                            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">                                        
                                    <?= $form->field($model, 'name')->textInput(['class'=>'form-control add-listing_form']) ?>                                        
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">                                        
                                    <?= $form->field($model, 'email')->textInput(['class'=>'form-control add-listing_form']) ?>                                        
                                </div>
                            </div> 
                        </div>              
                        <!--//End General Information -->
                        <!-- Add Gallery -->
                        <div class="listing-title">
                            <span class="ti-gallery"></span>
                            <h4>Add Photo</h4>
                            <p>Add Any Photo Of Employee</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-file">
                                    <div class="add-gallery-text">
                                        <i class="ti-gallery"></i>
                                        <span>Drag &amp; Drop To Add Photo</span>
                                    </div>
                                    <?= $form->field($model, 'photo')->fileInput(['id'=>'customFile','class'=>'custom-file-input'])->label(false) ?>                                        
                                </div>
                            </div>
                        </div>
                        <!--//End Add Gallery -->
                        <!-- Add Skills -->
                        <div class="listing-title">
                            <span class="ti-bar-chart"></span>
                            <h4>Add Skills</h4>
                            <p>Write Something General Information About Skills Of Employee</p>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'sociability')->textInput(['class'=>'form-control add-listing_form']); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                 <?= $form->field($model, 'engineering_skills')->textInput(['class'=>'form-control add-listing_form']); ?>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'time_management')->textInput(['class'=>'form-control add-listing_form']); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <?= $form->field($model, 'languages')->textInput(['class'=>'form-control add-listing_form']); ?>
                           </div>
                       </div>
                   </div>                           
                   <!--//End Add Skills -->                            

                   <!-- Amenities -->
                   <div class="listing-title">
                    <span class="ti-files"></span>
                    <h4>Projects</h4>
                    <p>Write Something General Information About Your Listing</p>
                </div>
                <div class="row">
                    <div class="col-md-12 responsive-wrap">                                       
                        <?= $form->field($model, 'project_id')->dropDownList($projects_list,
                            ['multiple'=>false, 'class'=>'form-control add-listing_form','name'=>'AddEmployee[project_id][]'])->label(false);   
                            ?>
                        </div>                                
                    </div>                          
                    <!--//End Projects -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-wrap btn-wrap2">
                               <?= Html::submitButton('SUBMIT', ['class' => 'btn btn-simple']) ?>                                        
                           </div>
                       </div>
                   </div>
                   <?php ActiveForm::end(); ?>
                   
               </div>
           </div>
       </div>
   </div>        
</section>
<!--//END ADD EMPLOYEE -->
<?php
$js = <<<JS

$('#addemployee-time_management').on('blur', function(){
    const val = $("#addemployee-time_management").val();
    if (val == 10) {
        $('#addemployee-project_id').attr('multiple','multiple');
        } else {
            $('#addemployee-project_id').removeAttr('multiple');
        }
        
        });
JS;

        $this->registerJs($js);
        ?>  
