 <!-- Navigation Start  -->
 <nav class="navbar navbar-default navbar-sticky bootsnav">

 <div class="container">
 <!-- Start Header Navigation -->
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
 <i class="fa fa-bars"></i>
 </button>
 <a class="navbar-brand" href="{{ route('home') }}"><img src="img/logo.png" class="logo" alt=""></a>
 </div>
 <!-- End Header Navigation -->

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="navbar-menu">
 <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
 <li><a href="{{ route('home') }}">Home</a></li>
 <li><a href="{{ route('login') }}">Login</a></li>
 </ul>
 </div><!-- /.navbar-collapse -->
 </div>
 </nav>
 <!-- Navigation End  -->
