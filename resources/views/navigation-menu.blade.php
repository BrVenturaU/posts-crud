<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
                <a>Posts Site</a>
                <div id="close-sidebar">
                    <i data-feather="x"></i>
                </div>
        </div>
      <div class="sidebar-header">
            <div class="user-pic">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                @else
                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                      alt="User picture">
                @endif
            </div>
            <div class="user-info">
                <span class="user-name">{{ Auth::user()->name }}
            </span>
            <span class="user-status">
                <i class="text-success" data-feather="circle"></i>
                <span>Online</span>
            </span>
            </div>
      </div>
      <!-- sidebar-header  -->
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
              <a href="{{route('home')}}">
                <i class="p-1 text-white rounded bg-dark" data-feather="home"></i>
                <span>Home</span>
              </a>
          </li>
          <li class="sidebar-dropdown">
              <a>
                  <i class="p-1 text-white rounded bg-dark" data-feather="book"></i>
                  <span>Posts</span>
              </a>
              <div class="sidebar-submenu">
                    <ul>
                        <li>
                            <a href="{{route('posts.create')}}">Crear</a>
                        </li>
                        <li>
                            <a href="{{url('posts')}}">Ver posts</a>
                        </li>
                    </ul>
              </div>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="p-1 sidebar-footer">
        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
            <a href="{{ route('api-tokens.index') }}">
                <i data-feather="monitor"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
        @endif
        <a href="{{ route('profile.show') }}">
            <i data-feather="settings"></i>
            <span class="badge-sonar"></span>
        </a>
        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i data-feather="power"></i>
        </a>
        <form method="POST" id="logout-form" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>
</nav>