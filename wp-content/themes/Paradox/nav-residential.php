<div class="panel-group sidebar-nav" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <a href="/247-emergency-electricians" style="color: #E02323;">
                    24/7 Emergency Electricians                    
                </a>
            </div>
        </div>    
    </div>    
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Electrical Panel Installation
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <?php 
                $menu_args = array(
                  'menu'            => 'Residential Services 1',
                  'container'       => 'container', 
                  'container_class' => 'interior-menu'
                  );
                ?>
                <?php wp_nav_menu($menu_args);?>                                
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Lighting & Fixture Installation
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <?php 
                $menu_args = array(
                  'menu'            => 'Residential Services 2',
                  'container'       => 'container', 
                  'container_class' => 'interior-menu'
                  );
                ?>
                <?php wp_nav_menu($menu_args);?>                                  
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Pool Equipment Repair & Installation
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <?php 
                $menu_args = array(
                  'menu'            => 'Residential Services 3',
                  'container'       => 'container', 
                  'container_class' => 'interior-menu'
                  );
                ?>
                <?php wp_nav_menu($menu_args);?>                                  
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    General Services
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <?php 
                $menu_args = array(
                  'menu'            => 'Residential Services 4',
                  'container'       => 'container', 
                  'container_class' => 'interior-menu'
                  );
                ?>
                <?php wp_nav_menu($menu_args);?>                                  
            </div>
        </div>
    </div>  
</div> <!-- .panel-group -->