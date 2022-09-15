<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">       
        <li class="nav-item mr-auto"><a class="navbar-brand" href=""><img class="brand-logo" alt="Chameleon admin logo" src="{{ url('backend/Dashboard Template/theme-assets/images/logo/icon-logo.png') }}"/> 
          <h2 class="brand-text dark">Ina Academy</h2></a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <x-nav-item label="Dashboard" icon="la la-home" :link="route('dashboard')"/>

        @can('role','admin')
        <x-nav-item label="Admin" icon="ft-users" :link="route('admin.index')"/>
        @endcan
        <x-nav-item label="Academy Package" icon="ft-users" :link="route('AcademyPackage.index')"/>

       
       
     
       
     
      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>