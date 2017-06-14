<?php 

    $user_id = get_current_user_id();
    $flag = '0';
    // custom size for profile picture 
    $profile_size =   array('270','334' );

    // get post for user portfolio
    $port_post =
    //  custom meta query to only get post for current logged in user
                 array(
                    'meta_query' => array(
                            array(
                                'key' => 'user_id',
                                'value' => $user_id
                            )
                        ),
    // end of meta query
                    
                    'post_type'		=> 'portfolio_home',
                    'post_status'	=> 'publish'
                ); 
    //  make sure we have user portfolio available
     $posts          = get_posts($port_post);
     if(empty($posts)){
         
     }
     
    //  get mangoes into basket
     $post_id        = $posts[0]->ID;
     $post_meta      = get_post_meta($post_id);  
     $first_name     = $post_meta['first_name'][0];
     $last_name      = $post_meta['last_name'][0];
     $full_name        = $first_name.' '.$last_name;
     $profession       = $post_meta['profession'][0];
     $about_me_title   = $post_meta['about_me_title'][0];
     $about_me_summary = $post_meta['about_me_summary'][0];
     $profile_picture  = $post_meta['profile_picture'][0];
     $contact_email  = $post_meta['email'][0];
     $contact_no  = $post_meta['contact_number'][0];
     $contact_address  = $post_meta['address'][0];
     $image_url =  wp_get_attachment_image_src($profile_picture,$profile_size);
     // Fetch experiences
     $expJson = get_post_meta( $post_id, 'experience1', true);
     $exp_array = json_decode($expJson,true);
     // Fetch Technical skills
     $techJson = get_post_meta( $post_id, 'technical_skills', true);
     $tech_array = json_decode($techJson,true);
     // Fetch Language skills
     $langJson = get_post_meta( $post_id, 'language_skills', true);
     $lang_array = json_decode($langJson,true);
      // Fetch Others skills
     $otherJson = get_post_meta( $post_id, 'other_skills', true);
     $other_array = json_decode($otherJson,true);
     // Fetch Education
     $eduJson = get_post_meta( $post_id, 'education', true);
     $edu_array = json_decode($eduJson,true);
     // Fetch Achievments
     $achJson = get_post_meta( $post_id, 'achievments', true);
     $ach_array = json_decode($achJson,true);
      // Fetch Testimonials
     $testJson = get_post_meta( $post_id, 'testimonials', true);
     $test_array = json_decode($testJson,true);
      // Fetch Services
     $serviceJson = get_post_meta( $post_id, 'services', true);
     $service_array = json_decode($serviceJson,true);
     // Fetch Portfolio
     $portJson = get_post_meta( $post_id, 'portfolio', true);
     $port_array = json_decode($portJson,true);
     // Fetch Blogs
     $blogJson = get_post_meta( $post_id, 'blogs', true);
     $blog_array = json_decode($blogJson,true);

     
 ?>



<?php

/***********************************
 * Template Name: Portfolio home *
 ***********************************/
get_header();

 ?>
<link href="../wp-content/themes/kallyas/port.css" rel="stylesheet">
<style>
.huge_it_slideshow_image_wrap_2 {
    display:none;
}

.navbar navbar-inverse navbar-fixed-top{
    display:none;
}
.hbar{
    display:none;
}

.navbar-inverse {
    display:none;
}
</style>



<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from savvy.themedelight.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2017 18:37:07 GMT -->

<head>
    <meta charset="utf-8">
    <title>Savvy - Home</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-file-upload/2.5.0/angular-file-upload.js"></script>


    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/kallyas/portfolio1/assets/css/basic-full.css">
    <link rel="stylesheet" type="text/css" id="savvyStyle" href="../wp-content/themes/kallyas/portfolio1/assets/css/main-skin-style5.css">
    <link rel="stylesheet" type="text/css" href="../wp-content/themes/kallyas/portfolio1/assets/css/envato-frame-fix.css">
    <script src="../wp-content/themes/kallyas/js/formTab.js"></script>
</head>

<body class="layout-body layout-body--home">
    <script>
        ! function(e, a, t, n, c, o, s) {
            e.GoogleAnalyticsObject = c, e[c] = e[c] || function() {
                (e[c].q = e[c].q || []).push(arguments)
            }, e[c].l = 1 * new Date, o = a.createElement(t), s = a.getElementsByTagName(t)[0], o.async = 1, o.src = n, s.parentNode.insertBefore(o, s)
        }(window, document, "script", "../www.google-analytics.com/analytics.js", "ga"), ga("create", "UA-49600144-2", "auto"), ga("send", "pageview");

        // set single portolio data
         <?php 
        echo "var portJson ='".$portJson."';";  
        ?>

    </script>
    

    <a href="http://localhost/wordpress/portfolio-form/"><button>Edit</button></a>
    <div class="layout layout-width">
        <div class="layout-anti-scroll layout-anti-scroll--active layout-width"></div>
        <div class="layout-header layout-width">
            <header>
                <div id="headerMenuSlidingElement" class="main-nav__sliding-element"></div>
                <ul class="main-nav">
                    <li class="main-nav__item main-nav__item--active" id='active-index2'><a class="main-nav__item-link" href="index-2.html" onclick="activateTab('active-index2','port-home')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-home"></i></span> <span class="main-nav__item-content">Home</span></a>
                    </li>
                    <li class="main-nav__item" id='active-resume'><a class="main-nav__item-link" href="resume.html" onclick="activateTab('active-resume','page-resume')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-profile"></i></span> <span class="main-nav__item-content">Resume</span></a>
                    </li>
                    <li class="main-nav__item" id='active-services'><a class="main-nav__item-link" href="services.html" onclick="activateTab('active-services','page-services')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-stats-bars2"></i></span> <span class="main-nav__item-content">Services</span></a>
                    </li>
                    <li class="main-nav__item" id='active-portfolio'><a class="main-nav__item-link" href="portfolio.html" onclick="activateTab('active-portfolio','page-portfolio')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-books"></i></span> <span class="main-nav__item-content">Portfolio</span></a>
                    </li>
                    <li class="main-nav__item" id='active-blog'><a class="main-nav__item-link" href="blog.html" onclick="activateTab('active-blog','page-blog')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-blog"></i></span> <span class="main-nav__item-content">Blog</span></a>
                    </li>
                    <li class="main-nav__item" id='active-contact'><a class="main-nav__item-link" href="contact.html" onclick="activateTab('active-contact','page-contact')"><span class="main-nav__item-icon-wrapper"><i class="main-nav__item-icon icon-envelop"></i></span> <span class="main-nav__item-content">Contact</span></a>
                    </li>
                </ul>
                <div class="mobile-menu"><a class="mobile-menu__toggle" href="index-2.html#"><span class="mobile-menu__toggle__icon"><i class="fa fa-bars mobile-menu__toggle__icon__open"></i> <i class="fa fa-times mobile-menu__toggle__icon__close"></i></span></a>
                </div>
            </header>
        </div>
        <div class="layout-sidebar layout-sidebar-width">
            <div class="sidebar">
                <div class="sidebar__site-name"><?php echo $full_name ?>.</div>
                <div class="widget">
                    <ul class="widget__list">
                       <li><?php echo $profession ?></li>
                    </ul>
                </div>
                <ul class="social-icons">
                    <li><a href="https://twitter.com/" target="_blank" class="social-icon--twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://facebook.com/" target="_blank" class="social-icon--facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/" target="_blank" class="social-icon--google-plus"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="https://pinterest.com/" target="_blank" class="social-icon--pinterest"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/" target="_blank" class="social-icon--linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
              <!--  <footer class="footer">
                    <p class="footer__copyright"></p>
                </footer> -->
            </div>
        </div>
        <div class="layout-container-main layout-container-width">
            <div class="layout-content">
            <!--Home page starts-->
                <section class="page-home layout-row" id="port-home">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="page-home__page-title"><?php echo $about_me_title?></h1>
                            <div class="page-home__text">
                                <p> <?php echo $about_me_summary ?> </p>
                            </div>
                        </div>
                        <div class="col-md-6 page-home__thumbnail-wrap"><img class="page-home__thumbnail" src="<?php echo $image_url[0] ?>" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><img class="page-home__sign" src="uploads/home/sign.jpg" alt="">
                        </div>
                    </div>
                </section>
            <!--Home page ends-->

            

            

            <!--Resume page starts-->
                <section class="tabcontent" id="page-resume">
                    <div class="layout-title-wrapper layout-row">
                        <h1 class="layout-title layout-container-width layout-container">Resume. <span class="layout-title__subtitle">Up-to-date</span></h1>
                    </div>
                    <div class="layout-row">
                        <div class="accordion-group" role="tablist" aria-multiselectable="true">
                            <div class="accordion-item accordion-item--layout">
                                <h2 data-toggle="collapse" data-target="#collapse0" class="accordion-title layout-container"><i class="accordion-title__icon fa fa-suitcase"></i>Experience <i class="accordion-title__state-icon fa"></i></h2>
                                <div id="collapse0" class="accordion-item__panel collapse in">
                                    <div class="timeline timeline--layout layout-container">
                                        <?php   
                                            foreach($exp_array as $exp){  
                                            ?>
                                        <div class="timeline-item">
                                            <div class="timeline-item__col timeline-item__col--info">
                                                <div class="timeline-item__period"><?php echo $exp['duration']; ?></div>
                                                <div class="timeline-item__place"><?php echo $exp['place']; ?></div>
                                                <div class="timeline-item__location"><?php echo $exp['location']; ?></div>
                                            </div>
                                            <div class="timeline-item__col timeline-item__col--description">
                                                <div class="timeline-item__title"><?php echo $exp['title']; ?></div>
                                                <div class="timeline-item__description"><?php echo $exp['descr']; ?></div>
                                            </div>
                                        </div>
                                        <hr class="divider layout-row">
                                        <?php   
                                            }  
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-item--layout">
                                <h2 data-toggle="collapse" data-target="#collapse1" class="accordion-title layout-container collapsed"><i class="accordion-title__icon fa fa-cubes"></i>Skills <i class="accordion-title__state-icon fa"></i></h2>
                                <div id="collapse1" class="accordion-item__panel collapse collapse in">
                                    <div class="layout-container">
                                        <div class="skill-section">
                                            <h3 class="skill-section__title">Technical</h3>
                                            <?php   
                                            foreach($tech_array as $tech){  
                                            ?>
                                         
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar__name"><?php echo $tech['techSkillName']; ?></div>
                                                <br>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style=<?php echo '" width :'.$tech['techSkillNumber'].'%"'; ?>>    
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                }
                                            ?>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <hr class="divider layout-row">
                                        <div class="skill-section">
                                            <h3 class="skill-section__title">Languages</h3>
                                            <?php   
                                            foreach($lang_array as $tech){  
                                            ?>
                                            <div class="rating">
                                                <div class="rating__title"><?php echo $tech['langSkillName']; ?></div>
                                                <div data-score=<?php echo '"'.$tech['langSkillNumber'].'"'; ?> class="rating__score"></div>
                                                <div class="rating__value">
                                                <?php 
                                                    $count = (int)$tech['langSkillNumber'];
                                                    if($count==8){ echo "Native"; }
                                                    else{
                                                        if($count>=6){ echo "Fluent"; }
                                                        else{
                                                            if($count>=4){ echo "Intermediate"; }
                                                            else{ echo "Beginner"; }
                                                        }
                                                    }
                                                 ?>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="clearfix"></div>
                                        </div>

                                        <hr class="divider layout-row">
                                        <div class="skill-section">
                                            <h3 class="skill-section__title">Other Skills</h3>
                                            <?php   
                                            foreach($other_array as $other){  
                                            ?>
                                            <div class="donut-chart-wrap">
                                                <div class="donut-chart" data-percent=<?php echo '"'.$other['otherSkillNumber'].'"'; ?>>
                                                    <div class="donut-chart__value"><?php echo $other['otherSkillNumber']; ?></div>
                                                    <div class="donut-chart__pallete-second-color"></div>
                                                </div>
                                                <div class="donut-chart__title"><?php echo $other['otherSkillName']; ?></div>
                                                <div class="donut-chart__sub-title">
                                                    <?php 
                                                    $count = (int)$other['otherSkillNumber'];
                                                    if($count>=90){ echo "Advanced Level"; }
                                                    else{
                                                        if($count>=75){ echo "Intermediate Level"; }
                                                        else{
                                                             echo "Basic Level"; 
                                                        }
                                                    }
                                                 ?>
                                                </div>
                                            </div>
                                            <?php  
                                            }
                                            ?>
                                            <div class="clearfix"></div>
                                        </div>  
                                        <hr class="divider layout-row">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-item--layout">
                                <h2 data-toggle="collapse" data-target="#collapse2" class="accordion-title layout-container collapsed"><i class="accordion-title__icon fa fa-graduation-cap"></i>Education <i class="accordion-title__state-icon fa"></i></h2>
                                <div id="collapse2" class="accordion-item__panel collapse">
                                    <div class="timeline timeline--layout layout-container">
                                        <?php   
                                            foreach($edu_array as $edu){  
                                            ?>
                                        <div class="timeline-item">
                                            <div class="timeline-item__col timeline-item__col--info">
                                                <div class="timeline-item__period"><?php echo $edu['eduDuration']; ?></div>
                                                <div class="timeline-item__place"><?php echo $edu['eduPlace']; ?></div>
                                                <div class="timeline-item__location"><?php echo $edu['eduLocation']; ?></div><img src="uploads/resume/brown-logo.png" alt="">
                                            </div>
                                            <div class="timeline-item__col timeline-item__col--description">
                                                <div class="timeline-item__title"><?php echo $edu['eduTitle']; ?></div>
                                                <div class="timeline-item__description">
                                                    <ul class="list-style--check">
                                                        <!-- <li>Project management overview</li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="divider layout-row">
                                        <?php  
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-item--layout">
                                <h2 data-toggle="collapse" data-target="#collapse3" class="accordion-title layout-container collapsed"><i class="accordion-title__icon fa fa-trophy"></i>Achievements <i class="accordion-title__state-icon fa"></i></h2>
                                <div id="collapse3" class="accordion-item__panel collapse">
                                    <div class="layout-container">
                                        <div class="achievement-grid">
                                            <div class="achievement-grid__screen">
                                                <?php   
                                                foreach($ach_array as $ach){  
                                                ?>
                                                <div class="achievement-grid__cell">
                                                    <div class="achievement-item">
                                                        <div class="achievement-item__icon"><i class="fa fa-users"></i>
                                                        </div>
                                                        <div class="achievement-item__titles">
                                                            <div class="achievement-item__title"><?php echo $ach['achTitle']; ?></div>
                                                            <div class="achievement-item__sub-title"><?php echo $ach['achDescr']; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php  
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item accordion-item--layout">
                                <h2 data-toggle="collapse" data-target="#collapse4" class="accordion-title layout-container collapsed"><i class="accordion-title__icon fa fa-comments"></i>Testimonials <i class="accordion-title__state-icon fa"></i></h2>
                                <div id="collapse4" class="accordion-item__panel collapse">
                                    <div class="layout-container">
                                        <div class="layout-horizontal-padding container-fluid">
                                            <?php   
                                                foreach($test_array as $test){  
                                                ?>
                                            <div class="testimonial testimonial__with-image row">
                                                <div class="testimonial__images col-sm-2"><img class="testimonial__image" src="uploads/resume/testimonials-tom.png" alt=""> <i class="testimonial__quote fa fa-quote-left"></i>
                                                </div>
                                                <div class="testimonial__text col-sm-10">
                                                    <p><?php echo $test['testDescr']; ?></p>
                                                    <div class="testimonial__name small-line-top"><?php echo $test['testBy']; ?></div>
                                                    <p><?php echo $test['testDes']; ?></p>
                                                </div>
                                            </div>
                                            <?php  
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                    
            <!--Resume page ends-->

            <!--Services page starts-->
                <section class="tabcontent" id="page-services">
                   <div class="layout-title-wrapper layout-row">
                        <h1 class="layout-title layout-container-width layout-container">Services. <span class="layout-title__subtitle">What I offer</span></h1>
                    </div>
                    <?php   
                        foreach($service_array as $service){  
                        ?>
                    <div class="layout-row service-item">
                        <div class="layout-container">
                            <div class="service-item__icon-wrap">
                                <div class="service-item__icon"><i class="fa fa-gears"></i>
                                </div>
                            </div>
                            <div class="service-item__content">
                                <h2 class="service-item__title"><?php echo $service['serviceTitle']; ?></h2>
                                <p class="service-item__description"><?php echo $service['serviceDescr']; ?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php   
                        }
                    ?>
                </section>
            <!--Services page ends-->

            <!--Portfolio page starts-->
                <section class="tabcontent" id="page-portfolio">
                     <div class="layout-title-wrapper layout-row">
                        <h1 class="layout-title layout-container-width layout-container">Portfolio. <span class="layout-title__subtitle"></span></h1>
                    </div>
                    <div class="page-portfolio__items-container layout-row">
                        <?php   
                        foreach($port_array as $port){ 
                            $img_url =  wp_get_attachment_image_src($port['attachment_id'],$profile_size);
                            $pos = $port['pos'];
                        ?>
                        <script>
                                temp_<?php echo $pos;  ?> = <?php echo $pos;  ?>;
                                url_<?php echo $pos;  ?> = <?php echo "'".$img_url[0]."'";  ?>;
                        </script>
                        <div class="page-portfolio__item-wrapper">
                            <div class="page-portfolio__item">
                                <a href="#portfolio-single.html"><img class="page-portfolio__image" src=<?php echo '"'.$img_url[0].'"'; ?> alt="Autumn collection" onclick='openPort(temp_<?php echo $pos;  ?>,url_<?php echo $pos;  ?>); return false;' style="width:376px;height:226px;">
                                </a>
                                <div class="page-portfolio__item__info">
                                    <h2 class="page-portfolio__item__title"><?php echo $port['portTitle']; ?></h2>
                                    <div class="page-portfolio__item__content"><?php echo $port['portDescr']; ?></div><a class="btn btn-lg btn--style2" onclick="openPort(temp_<?php echo $pos;  ?> ,url_<?php echo $pos;  ?>); return false;" href="#portfolio-single.html">See More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php  
                        }
                        ?>
                    </div>

                </section>
            <!--Portfolio page ends-->

            <!--Single Portfolio page starts -->
                <section class='single_port' id='single-port'>
                    <div class="layout-title-wrapper layout-row" style="margin-left: -45px;margin-right: -69px;margin-top: -33px;">
                        <h1 class="layout-title layout-container-width layout-container">My Project. <span class="layout-title__subtitle">In detail</span></h1>
                    </div>
                    <div class="layout-row"><img id='proj_image' class="portfolio-single__image" src="" alt="Project image">
                    </div>
                    <div class="portfolio-single__info layout-horizontal-padding">
                        <div>
                            <div class="portfolio-single__info__name">Project name:</div>
                            <div id='project' class="portfolio-single__info__description"></div>
                        </div>
                        <div>
                            <div  class="portfolio-single__info__name">Completed:</div>
                            <div id='date' class="portfolio-single__info__description"></div>
                        </div>
                        <div>
                            <div  class="portfolio-single__info__name">Client:</div>
                            <div id='client' class="portfolio-single__info__description"></div>
                        </div>
                        <p id='descr' class="portfolio-single__info__text"></p>
                    </div>
                </section>
           <!--Single Portfolio page ends-->

            <!--Blog page starts-->
                <section class="tabcontent" id="page-blog">
                    <div class="layout-title-wrapper layout-row">
                        <h1 class="layout-title layout-container-width layout-container">Blog. <span class="layout-title__subtitle">About everything</span></h1>
                    </div>
                    <div class="blog-posts">
                        <?php   
                        foreach($blog_array as $blog){ 
                            $blog_url = $blog['blogUrl'];
                            $blog_img_url =  wp_get_attachment_image_src($blog['attachment_id'],$profile_size);
                        ?>
                        <div class="blog-post layout-row">
                            <a class="blog-post__image-wrap" <?php echo 'href="'.$blog_url.'"'; ?> ><img class="blog-post__image" src=<?php echo '"'.$blog_img_url[0].'"'; ?> style="width:754px;height:254px;" alt="Blog Image">
                            </a>
                            <div class="layout-container layout-horizontal-padding">
                                <h2 class="blog-post__title"><a href="blog-single.html"><?php echo $blog['blogTitle']; ?></a></h2>
                                <!--ul class="blog-post__article-info">
                                    <li><a href="blog.html#"><i class="fa fa-calendar"></i>20 December 2014</a>
                                    </li>
                                    <li><a href="blog.html#"><i class="fa fa-folder-open"></i>work</a>
                                    </li>
                                    <li><a href="blog.html#"><i class="fa fa-tags"></i>work, office</a>
                                    </li>
                                    <li><a href="blog.html#"><i class="fa fa-comments-o"></i>14 comments</a>
                                    </li>
                                </ul -->
                                <p class="blog-post__content"><?php echo $blog['blogDescr']; ?></p><a class="btn btn-lg btn--style1 btn--blog" <?php echo 'href="'.$blog_url.'"'; ?> >Read More</a>
                            </div>
                        </div>
                        <?php 
                        }
                         ?>
                    </div>
                </section>
            <!--Blog page ends-->

            <!--Contact page starts-->
                <section class="tabcontent" id="page-contact">
                    <div class="layout-title-wrapper layout-row">
                        <h1 class="layout-title layout-container-width layout-container">contact. <span class="layout-title__subtitle">Wanna talk to me?</span></h1>
                    </div>
                    <div class="layout-row">
                        <div id="savvyMapCanvas" class="google-map--contact"></div>
                    </div>
                    <form action="http://oleg.dev/savvy/www/mail/fake.js" id="contactForm" method="post" class="layout-horizontal-padding">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" class="form__item" type="text" placeholder="name">
                                <div class="form__item__failed-wrap"></div>
                            </div>
                            <div class="col-md-6">
                                <input name="email" class="form__item" type="text" placeholder="email">
                                <div class="form__item__failed-wrap"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="msg" class="form__textarea form__item" placeholder="message"></textarea>
                                <div class="form__item__failed-wrap"></div>
                                <div class="form__status"></div>
                                <button type="submit" class="btn btn-lg btn--style1">Send message</button>
                            </div>
                        </div>
                    </form>
                    <div class="layout-horizontal-padding--clean"></div>
                    <div class="layout-horizontal-padding">
                        <ul class="contact-info">
                            <li><i class="fa fa-envelope"></i> <span><?php echo $contact_email; ?></span>
                            </li>
                            <li><i class="fa fa-phone"></i> <span><?php echo $contact_no; ?></span>
                            </li>
                            <li><i class="fa fa-map-marker"></i> <span><?php echo $contact_address; ?></span>
                            </li>
                        </ul>
                    </div>
                </section>
            <!--Contact page ends-->
            </div>
            <div class="footer--bottom layout-row">
                <p class="footer__copyright"></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!--<script type="text/javascript" src="../wp-content/themes/alfa/portfolio1/assets/jslib/jquery-1.11.2.js"></script>-->
    <script type="text/javascript" src="../wp-content/themes/alfa/portfolio1/assets/js/basic-full.js"></script>
    <script type="text/javascript" src="../wp-content/themes/alfa/portfolio1/assets/js/Template.js"></script>
    <div class="style-panel" style="display:none">
        <div class="style-panel__button"><i class="fa fa-paint-brush"></i>
        </div>
        <div class="style-panel__title">Choose a color:</div>
        <div class="style-panel__colors">
            <a data-value="style1" href="index-2.html#" class="style-panel__color style-panel__color--style1"></a>
            <a data-value="style2" href="index-2.html#" class="style-panel__color style-panel__color--style2"></a>
            <a data-value="style3" href="index-2.html#" class="style-panel__color style-panel__color--style3"></a>
            <a data-value="style4" href="index-2.html#" class="style-panel__color style-panel__color--style4"></a>
            <a data-value="style5" href="index-2.html#" class="style-panel__color style-panel__color--style5"></a>
            <a data-value="style6" href="index-2.html#" class="style-panel__color style-panel__color--style6"></a>
        </div>
        <div class="style-panel__info">and many more...</div>
        <div class="style-panel__reset">
            <button class="btn-reset btn btn-xs btn--style1">reset</button>
        </div>
    </div>
    <script type="text/javascript" src="../wp-content/themes/kallyas/portfolio1/assets/jslib/jquery.cookie.js"></script>
    <script type="text/javascript" src="../wp-content/themes/kallyas/portfolio1/assets/js/StylePanel.js"></script>
</body>
<!-- Mirrored from savvy.themedelight.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2017 18:37:15 GMT -->

</html>
