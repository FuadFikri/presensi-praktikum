 <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ url('/admin') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ url('/admin/asprak') }}"><i class="fa fa-male"></i> Data Asprak</a></li>
                <li><a href="{{ url('/admin/matkul') }}"><i class="fa fa-book"></i> Data Mata Kuliah</a></li>

                <li><a href="{{ url('/admin/dosen') }}"><i class="fa fa-male"></i> Data Dosen</a></li>

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
