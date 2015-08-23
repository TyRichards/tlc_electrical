<div class="panel-group sidebar-nav" id="accordion2" role="tablist" aria-multiselectable="true">
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
        <div class="panel-heading" role="tab" id="headingFive">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Electrical Panels, Circuits & Breakers
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
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
        <div class="panel-heading" role="tab" id="headingSix">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Lighting & Fixture Installation
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
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
        <div class="panel-heading" role="tab" id="headingSeven">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Swimming Pool Service
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
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
        <div class="panel-heading" role="tab" id="headingEight">
            <div class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseSeven">
                    General Electrical Services
                    <i class="fa fa-arrow-circle-down pull-right"></i>
                </a>
            </div>
        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
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