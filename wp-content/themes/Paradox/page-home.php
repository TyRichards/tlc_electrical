<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <!-- <div class="background">&nbsp;</div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- <div style="padding-top:250px; padding-bottom:250px; margin-right:30px" class="text-center"></div>      -->
                <img class="img-responsive product" src="<?php echo get_template_directory_uri(); ?>/assets/images/devices01.png" alt="Worship Online">
            </div>
            <div class="col-md-5">
                <h1 style="padding-top:60px;"><?php echo get_field('headline') ?></h1>
                <?php echo get_field('subheading') ?>              
                <div class="row">             
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-clear btn-block">View Demo<i class="fa fa-play-circle fa-right"></i></a>
                    </div>                                              
                    <div class="col-sm-6">
                        <a href="#blip" class="btn btn-clear btn-block">Why Worship Online?<i class="fa fa-question-circle fa-right"></i></a>
                    </div>                    
                    <div class="clearfix"></div>   
                    <div class="col-xs-12">                 
                        <a href="/pricing" class="btn btn-lg btn-primary btn-block" style="margin: 20px 0 0 0;">Start Free Trial<i class="fa fa-arrow-circle-right fa-right"></i></a>                  
                    </div>                                    
                </div>                
            </div>            
        </div>        
    </div>
</section>

<section class="block bg-dark blip" id="blip" style="padding-top:130px; padding-bottom:200px;">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-offset-1 col-md-4">
                <h3>Have rehearsals you can be proud of</h2>            
                <p>
                    Imagine walking into rehearsal and every musician on stage knows their part for every song. Rehearsal goes by like a breeze and that means more time to relax in prayer.
                </p>               
                <a href="#features" class="btn btn-primary">
                    Learn More<i class="fa fa-arrow-circle-down fa-right"></i>
                </a>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h3>See how easily you can improve your band with our tools</h2>            
                <p>
                    Whether you’re an individual musician, or a worship leader seeking to equip your team, we have the tools to excellently prepare you for worship.  With tutorials, lessons, chord/number charts, and tabs, you can master your setlist with ease!
                </p>
                <a href="#" class="btn btn-primary">
                    View Demo<i class="fa fa-play-circle fa-right"></i>
                </a>               
            </div>
        </div>
    </div>
</section>

<section class="block bg-light" id="features">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-offset-6 col-md-5">
                <h2>Learn the songs</h2>            
                <p>
                    Your musicians want to learn the songs, but the reality is that many church musicians have full-time jobs and families.  It can be hard to find the time to learn songs excellently. Now you can give them exactly what they need so they never have to spend hours trying to learn those parts again!
                </p>
                <p>
                    Not only are our lessons and tools easy to follow for beginner musicians, but now seasoned musicians have a place to go to learn those hard to pick out parts exactly like the album.
                </p>
                <p>
                    Imagine you can find the exact song you are looking for and send the parts out to your team in an instant.  You'd never have to worry if the parts are accurate. Your players will show up knowing their stuff and be able to focus on what matters the most – Worship.                 
                </p>
                <a href="#features2" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="features2">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-offset-1 col-md-5">
                <h2>Create a standard of excellence</h2>
                <p>
                    Low quality video can make it impossible for team members to learn the songs well. Overcompressed audio and fuzzy footage are the last thing your players need when they are trying to learn intricate parts.
                </p>
                <p>
                    Worship Online offers high quality, professionally recorded video and audio production on all of our video lessons so your musicians can nail the parts as they were intended.
                </p>                
                <a href="#features3" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a>                 
            </div>            
        </div>
    </div>
</section>

<section class="block bg-light" id="features3">           
    <div class="container-fluid">     
        <div class="row">
            <div class="col-md-offset-6 col-md-5">
                <h2>Eliminate all guesswork</h2>
                <p>
                    If you’re like us, you’ve searched YouTube for hours trying to find tutorials. Then you’ve either come up empty handed, or found some low quality hybrid stuff. And the last thing we want, or want our team doing, is IMPROVISING!
                </p>
                <p>
                    Some of the most talented musicians in the world spent some serious time creating the instrument parts to the worship music we love. So why not learn the parts as they created them? Or at least start from there.
                </p>
                <p>
                    With our access to the artist’s original multitracks, we can teach you ALL of the parts, exactly like the artist plays them. From parts that are hard to pick out, to soaring leads. We make learning your favorite worship songs simple and fun!   
                </p>            
                <a href="#features4" class="btn btn-primary">See More<i class="fa fa-arrow-circle-down fa-right"></i></a> 
            </div>
        </div>
    </div>
</section>

<section class="block bg-dark" id="features4">           
    <div class="container-fluid">
        <div class="row">            
            <div class="col-md-offset-6 col-md-5">
                <h2>Empower your band to play with confidence</h2>
                <p>
                    No more stumbling through rehearsal.  No more trainwrecks in the middle of the service. Worship Online will help your team eliminate the guess-work so they can focus on playing the part. Now your team can be fully prepared for downbeat on Sunday, without wasting precious spare time digging through YouTube videos and bad charts.
                </p>
                <p>
                    With Worship Online, you can have the luxury and convenience of a personal music director that you can afford! Streamline your rehearsals and have your band sounding better than ever!
                </p>
                <div class="row">             
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-clear btn-block"><i class="fa fa-play-circle fa-left"></i>View Demo</a>
                    </div>                                              
                    <div class="col-sm-6">
                        <a href="/features" class="btn btn-clear btn-block"><i class="fa fa-th-list fa-left"></i>View Features</a>
                    </div>                    
                    <div class="clearfix"></div>   
                    <div class="col-xs-12">                 
                        <a href="/pricing" class="btn btn-lg btn-primary btn-block" style="margin: 20px 0 0 0;">Start Your Free Trial<i class="fa fa-arrow-circle-right fa-right"></i></a>                  
                    </div>                                    
                </div>                  
<!--                 <p>
                    <a href="#top">Back to top</a>
                </p>                 -->
            </div>            
        </div>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 