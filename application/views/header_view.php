<div class="navbar-fixed">
  <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
    <li><a href="#!"><span class="green-text">My Profile</span></a></li>
    <li class="divider"></li>
    <li><a href="#!"><span class="green-text">Settings</span></a></li>
    <li class="divider"></li>
    <li><a href="#!"><span class="green-text">Logout</span></a></li>
  </ul>
  <nav class="green">
    <div class="nav-container nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <form>
            <div class="input-field">
              <label for="search"><i class="mdi-action-search"></i></label>
              <input id="search" type="text" required>
            </div>
          </form>
        </li>
        <li><a href="#"><i class="mdi-social-notifications"></i></a></li>
        <li><a class="custom-a dropdown-button" href="#!" data-activates="dropdown1"><img class="img-icon circle responsive-img" src="assets/img/elka.png"></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#"><i class="mdi-action-search"></i></a></li>
        <li><a href="components.html">Components</a></li>
        <li><a href="javascript.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
</div>
<script>
$( document ).ready(function(){
  $(".button-collapse").sideNav();
  $(".dropdown-button").dropdown({hover:false, constraint_width: true});
})
</script>
