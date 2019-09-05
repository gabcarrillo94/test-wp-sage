{{--
  Template Name: Page Products
--}}

@extends('layouts.app')

@section('content')
	<div class="container">
		@php 
			$args = array('post_type' => 'product','posts_per_page'=>'10');
			$loop = new WP_Query($args);
		@endphp
		@while($loop->have_posts()) @php($loop->the_post())
			<div class="row">
				<div class="col-md-12">
					<h2 class="mt-2 mb-2">
						<a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
					</h2>
					<p>{!! get_the_excerpt() !!}</p>
				</div>
			</div>
		@endwhile
	</div>
	
@endsection
	