@extends('blog.template')

@section('content')
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container valign">
        <br><br>
        <h1 class="header center grey-text text-darken-3">Contact us</h1>
        <div class="row center">
          <h5 class="header col s12 light grey-text text-darken-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
        </div>
        <div class="row center">
          <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-3 head-link"><i class="fa fa-angle-double-down"></i></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('blog/images/contact1.jpg')}}" alt="Unsplashed background img 2"></div>
  </div>

<div class="container" id="startPosts">
	<br>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col s12 m10 offset-m1 l9 offset-l1">

		<form class="col s8">

    <div class="row">
      <div class="input-field col s6">
        <input id="name" type="text" class="validate">
        <label for="name">Your Name</label>
      </div>


      <div class="input-field col s6">
        <input id="email" type="email" class="validate">
        <label for="email">Your Email</label>
      </div>
    </div><!--row-->

     <div class="row">
      <div class="input-field col s12">
        <input id="message-sub" type="email" class="validate">
        <label for="message-sub">Message Subject</label>
      </div>
    </div>

     <div class="row">
      <div class="input-field col s12">
         <textarea id="text_area" class="materialize-textarea"></textarea>
        <label for="text_area">Your Message</label>
      </div>
    </div>


      <div>
      	<a class="waves-effect waves-light btn">Send Message<i class="mdi-content-send right"></i></a>
      </div>
     </form>




		</div>
	</div>
</div>


@endsection
