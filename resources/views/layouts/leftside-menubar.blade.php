
<style>
  .nav-item.active {
    background-color: #fce8e6;
    font-weight: bold;
  }

  .nav-item.active a {
    color: #d93025;
  }

  .nav-link-text {
    padding-left: 10%;
  }

  #side-navbar ul>li>a {
    padding: 8px 15px;
  }
</style>


  <li class="nav-item">
    <a class="nav-link" href="{{ route('employes')}}"><span class="nav-link-text">Gérer employé</span>
  </li>
  @endif
  <li class="nav-item">
    <a class="nav-link" href="{{ route('rapports')}}"><span class="nav-link-text">Gérer rapport</span>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('adresses')}}"><span class="nav-link-text">Gérer adresse</span>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('services')}}"><span class="nav-link-text">Gérer service</span>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('depenses')}}"><span class="nav-link-text">Gérer depense</span>
  </li>
</ul>
