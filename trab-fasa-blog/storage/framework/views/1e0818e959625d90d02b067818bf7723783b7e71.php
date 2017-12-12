<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Web Fasa Blog</title>

<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo e(asset('blog/css/materialize.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="<?php echo e(asset('blog/css/index.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" href="<?php echo e(asset('blog/css/font-awesome-4.3.0/css/font-awesome.min.css')); ?>">
<link rel="shortcut icon" href="<?php echo e(asset('blog/images/favicon (9).ico')); ?>" type="image/x-icon">
<link rel="icon" href="<?php echo e(asset('blog/images/favicon.ico')); ?>" type="image/x-icon">
</head>
<body>
<div id="navbar" class="navbar-fixed scrollspy">
<nav class="grey darken-2">
  <a class="left" style="padding-left: 17px;" href="">Logo</a> 
  <div align="center" style="left:20%" class="nav-wrapper container">


    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    <ul  class=" hide-on-med-and-down">

      <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
       <li><a href="<?php echo e(url('/about')); ?>">Quem Somos</a></li>

      <li><a href="<?php echo e(url('/contact')); ?>">Contato</a></li>
        <li><a href="<?php echo e(env('URL_ADMIN_LOGIN')); ?>">Administrador</a></li>


    </ul>
    <ul class="right side-nav" id="mobile-demo">
          <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
          <li><a href="<?php echo e(url('/about')); ?>">Quem Somos</a></li>
          <li><a href="<?php echo e(url('/contact')); ?>">Contato</a></li>
          <li><a href="<?php echo e(env('URL_ADMIN_LOGOUT')); ?>">Sair</a></li>

    </ul>
  </div>
</nav>
</div>



<?php echo $__env->yieldContent('content'); ?>

<footer class="page-footer grey darken-2">
  <div class="container">
          <div class="row">
            <div class="col s12 l4 m10">
              <h5 class="white-text">Follow "BlogName"</h5>
              <p class="white-text">Get every new post delivered to your inbox.</p>
         <form>

          <div class="input-field">
            <i class="mdi-communication-email prefix"></i>
            <input id="icon_prefix" type="email" class="validate">
            <label for="icon_prefix">Email</label>
          </div>

         </form>

        <a class="waves-effect waves-light btn">Sign Up
                  <i class="fa fa-sign-in right"></i></a>
     </div><!--col-->


            <div id="categories" class="col l3 offset-l1 s12 m8">
              <h5 class="white-text">Categories</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Category1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Category2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Category3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Category4</a></li>
              </ul>
            </div><!--col-->



            <div class="col l3 s12 m8">
              <h5 class="white-text">Archives</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">March 2015</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">April 2015</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">May 2015</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">June 2015</a></li>
              </ul>
            </div><!--col-->

          </div><!--row-->

          <div class="row">
            <div class="col s12 l3 offset-l5">


            <a href="#"><i style="font-size: 38px;" class="fa fa-facebook-square"></i></a> &nbsp;&nbsp;&nbsp;
            <a href="#"><i style="font-size: 38px;" class="fa fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i style="font-size: 38px;" class="fa fa-google-plus-square"></i></a>
            </div>

          </div><!--row-->
        </div><!--conatiner-->
  <div class="footer-copyright">
    <div class="container">
     <p>Copyright © Your website name</p>
     <br>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script type="text/javascript" script-name="alex-brush" src="http://use.edgefonts.net/alex-brush.js"></script>
<script type="text/javascript" script-name="carter-one" src="http://use.edgefonts.net/carter-one.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo e(asset('blog/js/materialize.js')); ?>"></script>
<script src="<?php echo e(asset('blog/js/init.js')); ?>"></script>
<script>
$(document).ready(function(){
  $('.materialboxed').materialbox();
   $('.parallax').parallax();
    $('.button-collapse').sideNav();
});
</script>
<script>
      $('.head-link').click(function(e) {
      e.preventDefault();

      var goto = $(this).attr('href');

      $('html, body').animate({
          scrollTop: $(goto).offset().top
      }, 800);
  });

</script>





     <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-60673008-2', 'auto');
ga('send', 'pageview');
</script>






</body>
</html>
