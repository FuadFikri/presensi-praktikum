 <div class="menu_section">
               
                <ul class="nav side-menu">
                  {{-- <li><a href=""><i class="fa fa-book"></i> Presentase</a></li> --}}
                  <li><a href="{{ url('/praktikan') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ url('/praktikan/profile') }}"><i class="fa fa-male"></i> Edit Profil</a></li>
               


                </ul>
              </div>
              <div class="menu_section">
                  <ul class="nav side-menu">
                  <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                  </li>
               </ul>
            </div>
