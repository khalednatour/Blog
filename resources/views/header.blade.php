<div class="container">

  
 <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Blog</a>
          </div>
 @if(Auth::check())     
          <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="nav navbar-nav">
              <li @if (Request::path() == "home" || Request::path() == "/" || Request::path() == "index") class="active" @endif><a href="/home">Home</a></li>                                                   
              <li class="dropdown @if (strpos(Request::path(),'articles') !== false) active @endif">
                <a href="/articles" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My articles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/articles">Show articles</a></li>
                  <li><a href="/articles/create">Create new article</a></li>                
                </ul>
              </li>  
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ $username }}! <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/">My profile</a></li>                  
                  <li><a href="/logout">Log out</a></li>                  
                </ul>
              </li>              
            </ul>                                                  
                          
          

<form class="navbar-form navbar-right" role="search" action="/search">
  <div class="form-group">
    <input type="text" name="query" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Search</button>  
</form>

@endif
 
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      @if(Auth::check())<div class="jumbotron">@endif
<main>
  @yield('content')
</main>
      @if(Auth::check())</div>@endif

    </div> <!-- /container -->