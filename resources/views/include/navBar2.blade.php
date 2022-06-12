  <!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="ti-home menu-icon"></i>  
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">Création</span>
          <i class="menu-arrow"></i>
        </a>
        {{-- !! Creation des different formulaire --}}
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/categorie/ajouter')}}">Ajouter Categories</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/produit/ajouter')}}">Ajouter Produits</a></li>
            <li class="nav-item"><a class="nav-link" href="{{URL::to('/slider/ajouter')}}">Ajouter Slider</a></li>
           
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">Affichages</span>
          <i class="menu-arrow"></i>
        </a>
        {{-- !! Affichage des differents DataTable listes of... --}}
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/categorie/categories')}}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/produit/produits')}}">Produits</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/commande/commandes')}}">Commandes</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/slider/sliders')}}">Sliders</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->