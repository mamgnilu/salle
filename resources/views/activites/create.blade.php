

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
         
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bienvenue ches Princesse Fitness</h4>
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
                        <h2>Créer activité</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('activites.index') }}"> Retour</a>
                    </div>
                </div>
            </div>
               
                  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Erreur!</strong> SVP! veuillez saisir les informations correctement<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
               
            <form action="{{ route('activites.store') }}" method="POST">
                @csrf
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><i class="fas fa-notes-medical "></i>libelle:</strong>
                            <input type="text" name="libelle" class="form-control" placeholder="libelle">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>description:</strong>
                            <textarea id="w3mission"name="description" rows="4" cols="50"></textarea>
                            <!--<input type="textarea" name="motivation" class="form-control" placeholder="motivation">-->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>nom:</strong>
                            <input type="text" name="nom" class="form-control" placeholder="nom">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>montant:</strong>
                            <input type="double" name="montant" class="form-control" placeholder="montant">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        
                      <select class="custom-select" name="moniteurs_id">      
                        <option selected>Moniteur</option>
                        @foreach ($moniteurs as $moniteur)
                      <option value="{{$moniteur->id}}">{{$moniteur->prenom}}--{{$moniteur->nom}}</option>

                      @endforeach
                      </select>
          
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>avance:</strong>
                            <input type="double" name="avance" class="form-control" placeholder="avance">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>datedebut:</strong>
                            <input type="date" name="datedebut" class="form-control" placeholder="datedebut">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>datefin:</strong>
                            <input type="date" name="datefin" class="form-control" placeholder="datefin">
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
               
            </form>
        

<div style="height: 20vh;"></div>
          @include('layout.footer')
        
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
       
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

</html>