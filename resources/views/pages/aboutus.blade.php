@extends('layouts.app')

@section('content')
<div class="container-fluid postbody">
	
<div class="container-fluid">
	<h1>Meet the Staff</h1>
	<h2>Administrators</h2>
	<div class="col-md-4">
		 <div class="card-container manual-flip">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="{{ asset('assets/placeholder.jpg') }}"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="{{ asset('assets/ironman.png') }}"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <button class="btn btn-simple" onclick="rotateCard(this)">
                                    <i class="fa fa-mail-forward"></i> Manual Rotation
                         </button>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                 	<button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
	</div>
	<div class="col-md-4">
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
	</div>
</div>
<div class="container-fluid">
	<h2>Contributors</h2>
	<div class="col-md-4">
		 <div class="card-container">
         <div class="card">
             <div class="front">
                 <div class="cover">
                     <img src="images/rotating_card_thumb3.png"/>
                 </div>
                 <div class="user">
                     <img class="img-circle" src="images/rotating_card_profile.png"/>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h3 class="name">Inna Corman</h3>
                         <p class="profession">Product Manager</p>

                         <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                     </div>
                     <div class="footer">
                         <div class="rating">
                             <i class="fa fa-mail-forward"></i> Auto Rotation
                         </div>
                     </div>
                 </div>
             </div> <!-- end front panel -->
             <div class="back">
                 <div class="header">
                     <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                 </div>
                 <div class="content">
                     <div class="main">
                         <h4 class="text-center">Job Description</h4>
                         <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                         <div class="stats-container">
                             <div class="stats">
                                 <h4>235</h4>
                                 <p>
                                     Followers
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>114</h4>
                                 <p>
                                     Following
                                 </p>
                             </div>
                             <div class="stats">
                                 <h4>35</h4>
                                 <p>
                                     Projects
                                 </p>
                             </div>
                         </div>

                     </div>
                 </div>
                 <div class="footer">
                     <div class="social-links text-center">
                         <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                         <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                     </div>
                 </div>
             </div> <!-- end back panel -->
         </div> <!-- end card -->
     </div> <!-- end card-container -->
	</div>
</div>
</div>
@endsection