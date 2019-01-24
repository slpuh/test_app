 <?php

 $this->title = 'Employees';

 ?>
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


