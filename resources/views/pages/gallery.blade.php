@extends('layouts.default')
@section('style')
<!--link href='http://fonts.googleapis.com/css?family=Allura|Cabin' rel='stylesheet' type='text/css' /-->
<link type="text/css" rel="stylesheet" href="{{ URL::asset('public/css/gallery.css') }}" media="screen" />
@append

@section('content')
<div class="container">
	<div id="mainwrap">

	<div id="cardstyle">

		<div id="content">
			<div id="pagecontainer">
				<ul>
					<li id="portfolio" class="section">
						<h2><div align="center">Our Memories</div></h2>
						<ul class="poptroxactive">
							<li><a href="{{ URL::asset('public/img/gallery/1.jpg') }}"><img src="{{ URL::asset('public/img/gallery/1.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/2.jpg') }}"><img src="{{ URL::asset('public/img/gallery/2.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/3.jpg') }}"><img src="{{ URL::asset('public/img/gallery/3.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/4.jpg') }}"><img src="{{ URL::asset('public/img/gallery/4.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/5.jpg') }}"><img src="{{ URL::asset('public/img/gallery/5.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/6.jpg') }}"><img src="{{ URL::asset('public/img/gallery/6.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/7.jpg') }}"><img src="{{ URL::asset('public/img/gallery/7.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/8.jpg') }}"><img src="{{ URL::asset('public/img/gallery/8.jpg') }}" alt="" /></a></li>    
						</ul>
						<p class="portfoliomore"><a href="#portfolio2">Next page</a></p>
					</li>

					<li id="portfolio2" class="section">
						<h2><div align="center">Our Memories</div></h2>
						<ul class="poptroxactive">
							<li><a href="{{ URL::asset('public/img/gallery/9.jpg') }}"><img src="{{ URL::asset('public/img/gallery/9.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/10.jpg') }}"><img src="{{ URL::asset('public/img/gallery/10.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/11.jpg') }}"><img src="{{ URL::asset('public/img/gallery/11.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/12.jpg') }}"><img src="{{ URL::asset('public/img/gallery/12.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/13.jpg') }}"><img src="{{ URL::asset('public/img/gallery/13.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/14.jpg') }}"><img src="{{ URL::asset('public/img/gallery/14.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/15.jpg') }}"><img src="{{ URL::asset('public/img/gallery/15.jpg') }}" alt="" /></a></li>
							<li><a href="{{ URL::asset('public/img/gallery/16.jpg') }}"><img src="{{ URL::asset('public/img/gallery/16.jpg') }}" alt="" /></a></li>
						</ul>
						<p class="portfoliomore"><a href="#portfolio">Previous page</a></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div> <!-- .container -->
@append

@section('script')
<script type="text/javascript" src="{{ URL::asset('public/js/jquery-1.6.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('public/js/gallery.js') }}"></script>
<script type="text/javascript">
	$('.poptroxactive').each(function() {
	   $(this).poptrox();
	});
</script>
@stop