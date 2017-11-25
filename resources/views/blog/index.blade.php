@extends('blog.template')

@section('content')
<div id="index-banner" class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container valign">
      <br><br>
      <h1 style="color:white" class="header center ">Blog Desenvolvimento Web Fasa 2017</h1>
      <div class="row center">
        <h5 class="header col s12 light grey-text text-darken-2"></h5>
      </div>
      <div class="row center">
        <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-2 head-link"><i class="fa fa-angle-double-down"></i></a>
      </div>
      <br><br>

    </div>
  </div>
    <div class="parallax"><img src="{{asset('blog/images/capa.jpg')}}" alt="Unsplashed background img 2"></div>
</div>

<div class="container" id="startPosts">
	<br>
	<br>
	<br>
	<br>
	<div class="row">

    <div class="col-lg-6 col-md-6">
      @foreach($posts as $post)
  <aside>
     <img src="{{asset('files')}}/{{$post->imagem}}" class="img-responsive">
     <div class="content-title">
<div class="text-center">
<h3><a href="{{url('/detail')}}/{{$post->id}}">{{$post->titulo}}</a></h3>
</div>
</div>
<div class="content-footer">


</div>
  </aside>
  @endforeach
 </div>
</div>
</div>
<div class="row">
    <a href="#startPosts" class="pagination">
        {!! $posts->render() !!}
    </a>
</div>




	</div>
</div>


<section id="blog-section" >
     <div class="container">
       <div class="row">
         <div class="col-lg-8">
           <div class="row">





</div>
</div>

    </section>



@endsection


<style media="screen">

body{background-color:#ECF0F1;}

.navbar-inverse {
  background-color: #34495E;
  border-color: #34495E;
}

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 0px solid transparent;
  border-radius:0px;

}
.navbar-brand {

  float: left;
  height:auto;
  padding: 10px 10px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand>img{ width:80%;}

.navbar-inverse .navbar-nav > li > a {
  color: #F39C12;
}
.navbar-inverse .navbar-nav > li > a:hover {
 background-color: #009688;
}

.btn-default {
  color: #333;
  background-color: #009688;
  border-color: #009688;
  border-radius:0px;
  color:#fff;
}

#blog-section{margin-top:40px;margin-bottom:80px;}
.content-title{padding:5px;background-color:#fff;}
.content-title h3 a{color:#34495E;text-decoration:none; transition: 0.5s;}
.content-title h3 a:hover{color:#F39C12; }
.content-footer{background-color:#16A085;padding:10px;position: relative;}
.content-footer span a {
  color: #fff;
  display: inline-block;
  padding: 6px 5px;
  text-decoration: none;
  transition: 0.5s;
}
.content-footer span a:hover{
  color:#F39C12;
}
aside{
  margin-top: 30px;
  -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
-moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
aside .content-footer>img {
  width: 33px;
  height: 33px;
  border-radius: 100%;
  margin-right: 10px;
  border: 2px solid #fff;
}

.user-ditels {
  width: 300px;
  top: -100px;
  height: 100px;
  padding-bottom: 99px;
  position: absolute;
  border: solid 2px #fff;
  background-color: #34495E;
  right: 25px;
  display: none;
  z-index: 1;
}

@media (max-width:768px){
  .user-ditels {
  right: 5px;
}

}
.user-small-img{cursor: pointer;}

.content-footer:hover .user-ditels  {
  display: block;
}


.content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
.user-full-ditels h3 {
  color: #fff;
  display: block;
  margin: 0px;
  padding-top: 10px;
  padding-right: 28px;
  text-align: right;
}
.user-full-ditels p{
  color: #fff;
  display: block;
  margin: 0px;
   padding-right: 20px;
  padding-top: 5px;
 text-align: right;}
.social-icon {
  background-color: #fff;
  margin-top: 10px;
  padding-right: 20px;
  text-align: right;
}
.social-icon>a{font-size:20px;text-decoration:none;padding: 5px;}
.social-icon a:nth-of-type(1){color:#4E71A8;}
.social-icon a:nth-of-type(2){color:#3FA1DA;}
.social-icon a:nth-of-type(3){color:#E3411F;}
.social-icon a:nth-of-type(4){color:#CA3737;}
.social-icon a:nth-of-type(5){color:#3A3A3A;}


/*recent-post-col////////////////////*/
.widget-sidebar {
  background-color: #fff;
  padding: 20px;
  margin-top: 30px;
}

.title-widget-sidebar {
  font-size: 14pt;
  border-bottom: 2px solid #e5ebef;
  margin-bottom: 15px;
  padding-bottom: 10px;
  margin-top: 0px;
}

.title-widget-sidebar:after {
  border-bottom: 2px solid #f1c40f;
  width: 150px;
  display: block;
  position: absolute;
  content: '';
  padding-bottom: 10px;
}

.recent-post{width: 100%;height: 80px;list-style-type: none;}
.post-img img {
  width: 100px;
  height: 70px;
  float: left;
  margin-right: 15px;
  border: 5px solid #16A085;
  transition: 0.5s;
}

.recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}
.post-img, .recent-post a:hover{color:#F39C12;}
.post-img img:hover{border: 5px solid #F39C12;}

/*===============ARCHIVES////////////////////////////*/



button.accordion {
  background-color: #16A085;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
  background-color: #F39C12;color: #fff;
}

button.accordion:after {
  content: '\002B';
  color: #fff;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

button.accordion.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}


/*categories//////////////////////*/

.categories-btn{
  background-color: #F39C12;
  margin-top:30px;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;

}
.categories-btn:after {
  content: '\25BA';
  color: #fff;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}
.categories-btn:hover {
  background-color: #16A085;color: #fff;
}

.form-control{border-radius: 0px;}

.btn-warning {
  border-radius: 0px;
  background-color: #F39C12;
  margin-top: 15px;
}
.input-group-addon{border-radius: 0px;}

.img-responsive{
  width: 100%;
height: 254px;
object-fit: cover !important;
object-position: 50% 50% !important;
}
</style>
