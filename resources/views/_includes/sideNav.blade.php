<header>
  <nav>
    <div class="nav-wrapper indigo">
      <div class="row">
        <div class="col s12">
          <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
          <a href="#" data-target="sidenav-2" class="right sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a>
          <a class="brand-logo center">DeviceManager</a>
        </div>
      </div>
    </div>
  </nav>
</header>




<!-- LEFT SIDEBAR  -->
<ul id="sidenav-1" class="sidenav sidenav-fixed">
  <a href="{{route('dashboard')}}">
    <h4 class="center"><span class="grey-text">Fun</span><span class="red-text">Tech</span></h4>
  </a>
  @if(Auth::check())
  <li>

     <a><i class="material-icons">people</i>{{Auth::User()->name}}</a>
     <a><i class="material-icons">email</i>{{Auth::User()->email}}</a>
     <a class="center">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
            <button class="btn indigo lighten-1">log out</button>
        </form>
      </a>
  </li>
  @endif

  <li><a class="subheader">Menu</a></li>
    <li><a class="waves-effect indigo-text" href="{{route('checking')}}">
          <i class="material-icons indigo-text">devices</i>
          Checking Device
  </a></li>

</ul>


<!-- RIGHT SIDEBAR   -->
<ul id="sidenav-2" class="sidenav">
  <li><a class="subheader">Subheader</a></li>
  <li><a href="#" target="_blank">link 1</a></li>
  <li><a href="#" target="_blank">link 2</a></li>
  <li><a href="#" target="_blank">link 3</a></li>
</ul>
