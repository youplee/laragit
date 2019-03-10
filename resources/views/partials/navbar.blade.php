 <ul class="navbar-nav mx-auto">
              
               @foreach($menu as $myMenu)
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('post.index') }}">{{ $myMenu->name }}</a>
                </li>
               @endforeach
              </ul>