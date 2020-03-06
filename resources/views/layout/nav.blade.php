<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item sidebar-category">
        
      
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-view-quilt menu-icon"></i>
          <span class="menu-title">Accueil</span>
          <div class="badge badge-info badge-pill">2</div>
        </a>
      </li>-->



      <li class="nav-item">
        <a class="nav-link" href="pages/samples/accueil.html"> <span class="menu-title">ACCUEIL</span></a>
         
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>-->
            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>-->
            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>-->
            <!--<li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>-->
            <li class="nav-item"></li>
          </ul>
        </div>
      </li>


      <!--<li class="nav-item sidebar-category">
        <p>Components</p>
        <span></span>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">ABONNES</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('abonnes.index')}}">Inscriptions</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Paiements</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">évalutions</a></li>
            </ul>
        </div>
      </li>
     
      
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">GESTION DE LA SALLE</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('moniteurs.index')}}">Moniteurs</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('activites.index')}}">Activités</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('seances.index')}}">Seances</a></li>

              </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">STATISTIQUES</span>
          </a>
        </li>
          
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="mdi mdi-account menu-icon"></i>
                  <span class="menu-title">ADMINISTRATION</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Mises à jour du système</a></li> 
                    </ul>
                </div>
              </li>
    
      <li class="nav-item sidebar-category">
       
        <span></span>
      </li>
      
    </ul>
  </nav>