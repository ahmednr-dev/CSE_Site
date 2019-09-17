
                                <!-- Quick Access Navbar -->
<nav class="navbar  navbar-fixed-top navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"  >
          <button type="button" style="float:left;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
    </button>  
                                    <!-- NavLogo-->
              <a class="navbar-brand" href="/">
                <img alt="Brand" src="{{asset('/images/logo.jpg')}}" class="navCse">
              </a>
            </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="/"> @lang('app.Home') <span class="sr-only">(current)</span></a></li>
          <li><a href="/contact">@lang('app.Contact Us') </a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> @lang('app.More') <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/about"> @lang('app.About Us')</a></li>
              <li><a href="/contact"> @lang('app.Contact Us')</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/find-us"> @lang('app.Find Us')</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/blog"> @lang('app.Last News')</a></li>
            </ul>
          </li>
        </ul>     
                 <!-- Language Switch -->
        <ul class="nav navbar-nav navbar-right"> 
        <select id="LanguageSwitcher" class="btn-sm noorLang" >
        <option value="en" <?php $cuRRlocal = Config::get('app.locale'); echo ($cuRRlocal == 'en' ? "selected" : "") ?>>English</option>
         <div class="dropdown-divider"></div>
         <option value="ar" <?php $cuRRlocal = Config::get('app.locale'); echo ($cuRRlocal == 'ar' ? "selected" : "") ?> >العربية</option>
         </select>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

                       <!-- End Quick Access Navbar -->

			                	<!-- Start Navbar -->
          <nav class="fh5co-nav" role="navigation">
              <div class="container-wrap">
                <div class="top-menu">
                  <div class="row">
                    <div class="col-xs-2">
                      <div id="fh5co-logo">
                                         <!-- Title -->
                          <a href="/" >@lang('app.title')
                          
                     
                          
                          </a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                       <ul>

         <li class="has-dropdown">
             <a href="#" class="noorSize">@lang('app.DEPARTMENTS') </a>
             <ul class="dropdown">
               <li><a href="/blog">@lang('app.Faculty News') </a></li>
               <li><a href="/faculty-map">@lang('app.Facutly-Map')</a></li>
               <li><a href="/quality"> @lang('app.Quality') </a></li>
             </ul>
           </li>        
           <li class="has-dropdown">
              <a href="#">@lang('app.Education')</a>
               <ul class="dropdown">
               <li><a href="/blog">@lang('app.Last News')</a></li>
               <li><a href="/event">@lang('app.Events')</a></li>
               <li><a href="/gallery">@lang('app.Gallery')</a></li>
               <li><a href="/studentActivities">@lang('app.StudentActivities')</a></li>
               </ul>
             </li>
               <li><a href="/teachers">@lang('app.Teachers')</a></li>
               <li><a href="/about">@lang('app.About Us')</a></li>
        
              <li class="has-dropdown">
              <a href="#">@lang('app.More')</a>
                        <ul class="dropdown">
              <li><a href="/contact">@lang('app.Contact Us')</a></li>
             <li><a href="/find-us">@lang('app.Find Us')</a></li>
                        </ul>
              </li>       
                                         <!-- Authentication Links -->
        
                          <!-- If Not logged in guest -->
                       @guest
                        <li >
                            <a class="nav-link" href="{{ route('login') }}">@lang('app.login')</a>
                        </li>
                                 <!-- Register    -->
                        @if (Route::has('register'))
        
                         <!--
                                        Hide registration                         
                         <li>
                            <a class="nav-link" href="{ { route('register') }}">{ { __('Register') }}</a>
                        </li>
                        -->
                    @endif
                @else
                    <li class="has-dropdown">       
                        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown"  aria-labelledby="navbarDropdown">
                            <!-- ControllPanel-->
              <li>   <a href="/dashboard" target="_blank">@lang('app.Control-Panel') </a>      </li>
              <li>   <a href="/blog/create"> @lang('app.Create News')</a>        </li>
              <li><a href="/event/create"> @lang('app.Create Event')</a>       </li>
               <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                               @lang('app.Logout')
              </a>        </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
                </form>
             </ul>                 
            </li>               
                                           @endguest
            </ul>
                                               <!-- Authentication Links --> 
        
                      </ul>
                    </div>
                  </div>                  
                </div>
              </div>
            </nav>
            <!-- End Navbar -->