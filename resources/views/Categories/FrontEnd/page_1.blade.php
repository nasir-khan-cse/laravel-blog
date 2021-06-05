@extends('Layouts.master')


@section('SEO')
<title>FrontEnd</title>
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
@endsection

@section('main-container')

	<section class="medium-gap standard-home without-sidebar-home">
	      <div class="container">
	        <div class="row">
	          <div class="col-lg-12">
	          	<h1 class="text-center page-title pb-4">FrontEnd</h1>
	          	
	            <div class="standard-posts">
	              <div class="row masonry-layout normal-col-gap">

	              	<div class="col-lg-4 masonry-item travel">
	              		<div class="standard-post without-sidebar-post">
	              			<div class="post-image">
	              				<a href="{{route('Single_Post_1')}}"><img src="{{asset('assets/image/posts/css-pseudo-element-in-javascript.jpg')}}" alt="How to catch CSS pseudo element using javaScript"></a>
	              			</div>
	              			<div class="down-content">
	              				<a href="{{route('Single_Post_1')}}">
	              					<h4>
	              						How to catch CSS pseudo element using javaScript.
	              					</h4>
	              				</a>
	              			</div>
	              		</div>
	              	</div>

	              	<div class="col-lg-4 masonry-item travel">
	              		<div class="standard-post without-sidebar-post">
	              			<div class="post-image">
	              				<a href="{{route('Single_Post_2')}}"><img src="{{asset('assets/image/posts/js-array-map-vs-filter.jpg')}}" alt="Difference Between javaScript Array map and filter"></a>
	              			</div>
	              			<div class="down-content">
	              				<a href="{{route('Single_Post_2')}}">
	              					<h4>
	              						Difference Between javaScript Array map and filter.
	              					</h4>
	              				</a>
	              			</div>
	              		</div>
	              	</div>


	              	<div class="col-lg-4 masonry-item travel">
	              		<div class="standard-post without-sidebar-post">
	              			<div class="post-image">
	              				<a href="{{route('Single_Post_4')}}"><img src="{{asset('assets/image/posts/popup-message-box.jpg')}}" alt="Automatic Show and Hide pop-up message box"></a>
	              			</div>
	              			<div class="down-content">
	              				<a href="{{route('Single_Post_4')}}">
	              					<h4>
	              						Automatic Show and Hide pop-up message box.
	              					</h4>
	              				</a>
	              			</div>
	              		</div>
	              	</div>						

	         
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

@endsection