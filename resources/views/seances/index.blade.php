
@include('layout.header')
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    @include('layout.nav ')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
         
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bienvenue chez Princess Fitness</h4>
          <ul class="navbar-nav navbar-nav-right">
            <!--<li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>-->
            <div class="bg-white font-weight-bolder text-center" id="horloge"></div>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="images/bb4.jpg" alt="profile"/>
                <span class="nav-profile-name">Administrateur</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Déconnexion
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>enregistrer seance</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('seances.create') }}"> Creer une seance</a>
                        </div>
                    </div>
                </div>
               
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            
                <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>TAUXHOAIRE</th>
                      <th>DUREE</th>
                      

                      <th width="250px">ACTION</th>
                  </tr>
                  @foreach ($seances as $seance)
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $seance->tauxHoaire }}</td>
                      <td>{{ $seance->duree }}</td>
                      
                        <td>
                          
                            <form action="{{ route('seances.destroy',$seance->id) }}" method="POST">
              
                                <a class="btn btn-primary" href="{{ route('seances.edit',$seance->id) }}">Edit</a>
                                
                                @csrf
                                @method('DELETE')
  
                                <button type="submit" class="btn btn-danger" onclick="return myConfirmation();">Delete</button>
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
              
                {!! $seances->links() !!}
                  
                <div style="height: 15vh;"></div>
            
        
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        @include('layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
 @include('layout.script')
</body>
<script>
function myConfirmation()
{
  if(!confirm ("etes vous sure?"))
  event.preventDefault();
  
}
</script>
</html>
