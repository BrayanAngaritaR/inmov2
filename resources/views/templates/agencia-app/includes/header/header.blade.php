<header class="main-header">
   <!--  logo  -->
   @include('templates.agencia-app.includes.header._logo')
   <!-- logo end  -->
   <!-- nav-button-wrap-->
   <div class="nav-button-wrap color-bg nvminit">
      <div class="nav-button"><span></span><span></span><span></span></div>
   </div>
   <!-- nav-button-wrap end-->
   <!-- header-search button  -->
   <div class="header-search-button">
      <i class="fal fa-search"></i>
      <span>Buscar...</span>
   </div>
   <!-- header-search button end  -->
   <!--  add new  btn -->
   {{-- <div class="add-list_wrap">
      <a href="dashboard-add-listing.html" class="add-list color-bg"><i class="fal fa-plus"></i> <span>Add Listing</span></a>
   </div> --}}
   <!--  add new  btn end -->
   <!--  header-opt_btn -->
   {{-- <div class="header-opt_btn tolt" data-microtip-position="bottom" data-tooltip="Language / Currency">
      <span><i class="fal fa-globe"></i></span>
   </div> --}}
   <!--  header-opt_btn end -->

   <!--  Notifications   -->
   {{-- @include('templates.agencia-app.includes.header.notifications._notifications-btn') --}}
   <!--  Notifications end -->

   <!--  login btn -->
   <div class="show-reg-form modal-open">
   	<i class="fas fa-user"></i>
   	<span>Mi cuenta</span>
   </div>
   <!--  login btn  end -->
   <!--  navigation -->
   <div class="nav-holder main-menu">
      @include('templates.agencia-app.includes.header._menu-items')
   </div>
   <!-- navigation  end -->
   <!-- header-search-wrapper -->
   @include('templates.agencia-app.includes.header._top-search')
   <!-- header-search-wrapper end  -->
   <!-- wishlist-wrap-->
   @include('templates.agencia-app.includes.header.notifications._notifications-content')
   <!--wishlist-wrap end -->
   <!--header-opt-modal-->
   <div class="header-opt-modal novis_header-mod">
      <div class="header-opt-modal-container hopmc_init">
         <div class="header-opt-modal-item lang-item fl-wrap">
            <h4>Language: <span>EN</span></h4>
            <div class="header-opt-modal-list fl-wrap">
               <ul>
                  <li><a href="#" class="current-lan" data-lantext="EN">English</a></li>
                  <li><a href="#" data-lantext="FR">Franais</a></li>
                  <li><a href="#" data-lantext="ES">Español</a></li>
                  <li><a href="#" data-lantext="DE">Deutsch</a></li>
               </ul>
            </div>
         </div>
         <div class="header-opt-modal-item currency-item fl-wrap">
            <h4>Currency: <span>USD</span></h4>
            <div class="header-opt-modal-list fl-wrap">
               <ul>
                  <li><a href="#" class="current-lan" data-lantext="USD">USD</a></li>
                  <li><a href="#" data-lantext="EUR">EUR</a></li>
                  <li><a href="#" data-lantext="GBP">GBP</a></li>
                  <li><a href="#" data-lantext="RUR">RUR</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!--header-opt-modal end -->
</header>