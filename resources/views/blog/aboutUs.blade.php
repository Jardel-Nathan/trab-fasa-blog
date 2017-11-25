@extends('blog.template')


@section('content')
  <div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container valign">
        <br><br>
        <h1 class="header center grey-text text-darken-2">About me</h1>
        <div class="row center">
          <h5 class="header col s12 light grey-text text-darken-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</h5>
        </div>
        <div class="row center">
          <a href="#startPosts" class="btn-floating btn-large waves-effect waves-light grey darken-2 head-link"><i class="fa fa-angle-double-down"></i></a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{asset('blog/images/about.jpg')}}" alt="Unsplashed background img 2"></div>
  </div>

<div class="container" id="startPosts">
	<br>
	<br>
	<br>
	<br>
	<div class="row">
		<div class="col s12 m10 offset-m1 l9 offset-l1">

                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur
                 	</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!
                	</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.
                	</p>
                	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.
                	</p>


		</div>
	</div>
</div>

@endsection
