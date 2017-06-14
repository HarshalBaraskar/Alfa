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
     

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../wp-content/themes/alfa/js/header.js"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!--For portfolio form-->
  <?php 
    if($pagename == 'portfolio-form'){
   ?><!--
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-file-upload/2.5.0/angular-file-upload.js"></script>
-->
 <?php 
    }
 ?>

 <!-- Offline bootstrap files 
  <link rel="stylesheet" href="../wp-content/themes/alfa/bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script src="../wp-content/themes/alfa/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../wp-content/themes/alfa/materialize/css/materialize.min.css">
  <script src="../wp-content/themes/alfa/materialize/js/materialize.min.js"></script>

-->



  
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <?php /* Primary navigation */
        wp_nav_menu( array(
          'menu' => 'top_menu',
          'depth' => 2,
          'container' => false,
          'menu_class' => 'nav navbar-nav',
          //Process nav menu using our custom nav walker
          'walker' => new wp_bootstrap_navwalker())
        );
    ?>
      <ul class="nav navbar-nav navbar-right">
      <?php if(empty($posts)){  ?>
          <li><a href="http://localhost/wordpress/portfolio-form/">Create Portfolio</a></li>
     <?php }else{ ?>
          <li><a href="http://localhost/wordpress/portfolio-home/">View Portfolio</a></li>
     <?php } ?>
      </ul>
      
    </div>
  </div>
</nav>
<?php 
    echo do_shortcode("[huge_it_slider id='2']"); 
?>

<!-- Bar below slider  -->
<div class="hbar">
  
        <div class="hbar-icon">
          <img id='hbar-gp' src='../wordpress/wp-content/uploads/2016/10/shade-ngp.png' alt="G" onmouseover="document.getElementById('hbar-gp').src='../wordpress/wp-content/uploads/2016/10/ngp.png';" onmouseout="document.getElementById('hbar-gp').src='../wordpress/wp-content/uploads/2016/10/shade-ngp.png';" />


          <img id='hbar-fb' src='../wordpress/wp-content/uploads/2016/10/shade-nfb.png' alt="F" onmouseover="document.getElementById('hbar-fb').src='../wordpress/wp-content/uploads/2016/10/nfb.png';" onmouseout="document.getElementById('hbar-fb').src='../wordpress/wp-content/uploads/2016/10/shade-nfb.png';" />


          <img id='hbar-in' src='../wordpress/wp-content/uploads/2016/10/shade-nin.png' alt="I" onmouseover="document.getElementById('hbar-in').src='../wordpress/wp-content/uploads/2016/10/nin.png';" onmouseout="document.getElementById('hbar-in').src='../wordpress/wp-content/uploads/2016/10/shade-nin.png';" />


          <img id='hbar-tw' src='../wordpress/wp-content/uploads/2016/10/shade-ntw.png' alt="T" onmouseover="document.getElementById('hbar-tw').src='../wordpress/wp-content/uploads/2016/10/ntw.png';" onmouseout="document.getElementById('hbar-tw').src='../wordpress/wp-content/uploads/2016/10/shade-ntw.png';" />


          <img id='hbar-pin' src='../wordpress/wp-content/uploads/2016/10/shade-npin.png' alt="P" onmouseover="document.getElementById('hbar-pin').src='../wordpress/wp-content/uploads/2016/10/npin.png';" onmouseout="document.getElementById('hbar-pin').src='../wordpress/wp-content/uploads/2016/10/shade-npin.png';" />


        </div>
        <p class="hbar-date">Wednesday, 22 Oct 2016.</p>
      
   
</div>


</body>
</html>

