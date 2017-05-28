@extends('layouts.default')
@section('style')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="{{ URL::asset('public/css/member.css') }}">
@append

@section('content')
	<div class="container">
   <?php
		Use App\Member;
		$members = Member::orderBy('name')->get();

    	if (isset($name) && $name != null) {
    		foreach ($members as $member) {
    			if ($member->link() == $name && $member->verified) { ?>
    			<h2> {{$member->name}} </h2>
    			<img style="max-height: 250px;" src="{{$member->getprofpicurl1()}}"> </img>
    			<img style="max-height: 250px;" src="{{$member->getprofpicurl2()}}"> </img>
    			<p> </p>
    			<p> <b> {{$member->nim}} </b> - {{$member->prodi}} </p>
    			<p> "{{$member->bio}}" </p>
    	<?php
    			}
    		}
    	} else { ?>

		    <h2> Here's our member </h2>
		    <div class="row"><?php

		    foreach ($members as $member) {
		    	if ($member->verified) { ?>
		    <div class="col-md-4">
		      <div class="thumbnail">
		        <a href="{{ $member->geturl() }}" target="_blank">
				    <div class="gambar1 w3-animate-left">
						<img src="{{ $member->getprofpicurl1() }}" alt="" style="width:100%">
						<img src="{{ $member->getprofpicurl2() }}" class="img-top" alt="" style="width:100%;">
					</div> <!-- gambar1 -->

					<div class="caption text-center">
						<p>{{ $member->name }}</p>
					</div> <!-- .caption -->
		        </a>
		      </div> <!-- .thumbnail -->
		    </div> <!-- .col-md-4 --> <?php

		    	}
		    }?>

		 	</div> <!-- .row --> <?php
    	}
    	
    ?>
    </div>

@stop