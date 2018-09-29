 @extends('dosen/dashboard')
 @section('konten')


 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profil Dosen</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ asset('assets/images/picture.jpg') }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>


                      <br />

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Data Diri</h2>
                        </div>
                      </div>
                      <br>
                      {{-- TABEL --}}
                <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <th scope="row">NIP</th>
                          <td>18/8282/re/112</td>
                        </tr>
                        <tr>
                          <th scope="row">Nama</th>
                          <td>Jonwo</td>
                        </tr>
                         <tr>
                          <th scope="row">Tanggal Lahir</th>
                          <td>2016</td>
                        </tr>
                         <tr>
                          <th scope="row">HP</th>
                          <td>089898189</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
              {{-- END TABEL --}}
              @include('dosen/modal/edit_profil')
               <a class="btn btn-success pull-right" onclick="edit_profil()"><i class="fa fa-edit m-right-xs"></i>  Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
            function edit_profil(){
                $('#modal-form').modal('show');
            }
        </script>
@endsection
