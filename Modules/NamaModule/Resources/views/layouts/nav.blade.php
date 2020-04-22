 <nav class="navbar navbar-expand-md bg-warning navbar-light navbar-laravel">
     <div class="container">

         <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             <span class="sr-only">{!! trans('titles.toggleNav') !!}</span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             {{-- Left Side Of Navbar --}}
             <ul class="navbar-nav mr-auto">

                 @role('user')
                 @include('namamodule::layouts.user-menunav')
                 @endrole
             </ul>
             {{-- Right Side Of Navbar --}}
             <ul class="navbar-nav ml-auto">
                 {{-- Authentication Links --}}
                 @guest

                 @else


                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
 document.getElementById('logoutform').submit();"> {{ Auth::user()->name }} <span class="caret"></span>
                     <b>{{ __('Logout') }}</b>
                 </a>

                 <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>

                 @endguest
             </ul>
         </div>
     </div>
 </nav>