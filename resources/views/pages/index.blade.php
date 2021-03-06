@extends('layouts.app')

@section('content')
<div class="container-fluid postbody">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="row">{{-- interior row --}}
				<div class="col-md-9 carouselcontainer"> {{-- for carousel --}}
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
						      <img src="{{ asset('/assets/placeholder.jpg') }}" alt="PRODUCT1">
									<div class="carousel-caption">
										<h3>Product 1</h3>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
						    </div>

						    <div class="item">
						      <img src="{{ asset('/assets/placeholder.jpg') }}" alt="PRODUCT2">
						      <div class="carousel-caption">
										<h3>Product 2</h3>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
						    </div>

						    <div class="item">
						      <img src="{{ asset('/assets/placeholder.jpg') }}" alt="PRODUCT3">
						      <div class="carousel-caption">
										<h3>Product 3</h3>
										<p>Lorem ipsum dolor sit amet</p>
									</div>
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div> {{-- end of carousel --}}
					<div class="col-md-3">
						<div class="well">
							<h3>Archives</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur.
						</div>
					</div>
					<div class="col-md-9">
						<div class="panel panel-default"> {{-- panel --}}
							<div class="panel-heading"><h3>Recent Posts</h3></div>
							<div class="panel-body"> {{-- panel body --}}
								<div class="row is-flex">
									@if(count($posts)>0)
										@foreach($posts as $post)
											<div class="col-md-4 spacer">
													<div class="panel panel-default">
														{{-- <div class="panel-heading">
														</div> --}}
														<div class="panel-body blogpost">
															<a href="/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
															<img class="image-responsive postimage" src="/storage/cover_images/{{$post->cover_image}}">
															<p class="">{!!mb_strimwidth($post->body, 0, 60, '...')!!}</p>
														</div>
														<div class="panel-footer">
															<small>posted: <abbr title="{{$post->created_at}}">{{$post->created_at->diffForHumans()}}</abbr></small>
															@if ($post->created_at != $post->updated_at)
																<small>edited: <abbr title="{{$post->updated_at}}">{{$post->updated_at->diffForHumans()}}</abbr></small>
															@endif
															<small>posted by: {{$post->user->name}}</small>
														</div>
													</div>
											</div>
										@endforeach
									@else
										<p>No posts to show!</p>
									@endif
								</div>
							</div> {{-- end of panel body --}}
							<div class="panel-footer">
								<div class="text-center">
									
								{{$posts->links()}}
								</div>
							</div>
						</div> {{-- end of panel --}}

					</div>
					<div class="col-md-3">
						<div class="well">
							<h3>Tags</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div> {{-- end of interior row --}}
		</div>
	</div>
</div>
@endsection