@extends('layouts.default')
@section('content')
	<div class="container">
   <?php
		Use App\Member;
        
        $members = Member::all(); ?>

	    <h2> Verification: </h2>
        <p> Click on name to verify </p>
	    <ul><?php

		foreach ($members as $member) {
			$member->name;?>

			<li> [{{ $member->verified ? 'Active' : 'Inactive' }}] <a href="./verif?id={{$member->id}}"> {{$member->name}} </a> </li> <?php
		}?>

		</ul>
	</div>

@stop