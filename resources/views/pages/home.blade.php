@extends('layouts.default')
@section('style')
<link rel="stylesheet" href="{{ URL::asset('public/css/sequence-theme.parallax-basic.min.css') }}" />
@append

@section('content')


<div id="sequence" class="seq">
    <div class="seq-bg"></div>
    <div class="seq-screen">
      <ul class="seq-canvas">
        <li class="seq-in seq-valign">
          <div class="seq-content">
            <h2 data-seq class="seq-title">Hello Guys!</h2>
            <div data-seq class="seq-description">
			
              <p>This is the Homepage of Ca-Kru ARC 2017!</p>
			  
			  <p> Ca-Kru ARC 2017 is a group of ITB's students and wanna be Kru ARC ! </p>
			
			
			
			  <a class="seq-button" href = "http://tpb.kuliah.itb.ac.id/my/">Institut teknologi bandung<span class="seq-next-arrow">&gt;</span></a>
              
			</div>
          </div>
        </li>
        <li class="seq-valign">
          <div class="seq-content">
            <h2 data-seq class="seq-title">Who Are We?</h2>
            <div data-seq class="seq-description">
              <p>As we said before, we are a bunch of happy college students <br> AND wanna be Kru ARC (hopefully we can be accepted).</p>
          </div>
        </li>
        <li class="seq-valign">
          <div class="seq-content">
            <h2 data-seq class="seq-title">Then, what is this website for?</h2>
            <div data-seq class="seq-description">
				<p> <span>&gt;</span> To Register Yourselves As A Ca-Kru ARC 2017! <p>
				<p> <span>&gt;</span> To Post A Picture of Yourselves! <p>
				<p> <span>&gt;</span> To Know The Members of Ca-Kru ARC 2017!  <p>
				<div class="seq-button"></div>
            </div>
          </div>
        </li>
		<li class="seq-valign">
          <div class="seq-content">
            <h2 data-seq class="seq-title">What to do now?</h2>
            <div data-seq class="seq-description">
				<p style="font-size:40px;text-shadow: 2px 2px black; font-family: 'Lucidatypewriter', monospace"> Just Enjoy This Website!!!!! :D <p>
				
            </div>
          </div>
        </li>
      </ul>
</div>

    <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
      <button type="button" class="seq-prev" aria-label="Previous">
        <span class="seq-prev-arrow">&lt;</span>
      </button>

      <ul role="navigation" aria-label="Pagination" class="seq-pagination">
        <li><a href="#step1" rel="step1">1</a></li>
        <li><a href="#step2" rel="step2">2</a></li>
        <li><a href="#step3" rel="step3">3</a></li>
		<li><a href="#step4" rel="step4">4</a></li>
      </ul>

      <button type="button" class="seq-next" aria-label="Next">
        <span class="seq-next-arrow">&gt;</span>
      </button>
    </fieldset>
  </div>
@append

@section('script')
<script src="{{ URL::asset('public/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('public/js/hammer.min.js') }}"></script>
<script src="{{ URL::asset('public/js/sequence.min.js') }}"></script>
<script src="{{ URL::asset('public/js/sequence-theme.parallax-basic.js') }}"></script>
@stop