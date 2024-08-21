<style>
  .gradientBRD{
  	background: -webkit-linear-gradient(left, #4e298f, #9466d5, #7a28df);
	background: linear-gradient(left, #5e298f, #4b376f, #7d28df);

}
 .gradientBRDdark{
    background: -webkit-linear-gradient(left, #8537c9, #7644b3, #7129c8);
	background: linear-gradient(left, #57298f, #4e376f, #7728df);

}
   </style>
   <nav id="sidebar" class="" aria-label="Main Navigation">
       <!-- Side Header -->
       <div class="content-header gradientBRDdark " >
           <!-- Logo -->
           <a class="font-w600 text-dual" href="{{ url('dmw/admins') }}">
               <span class="smini-visible">
                   <i class="">
                    <img src="{{ asset('assets/img/logo.png') }}"  width="30" alt="Log">
                   </i>
               </span>
               <span class="smini-hide font-size-h5 tracking-wider">
                    <label>DMW</label>
                    <a class="" href="{{ url('dmw/admins') }}">
                       <img src="{{ asset('assets/img/logo.png') }}"  width="70" alt="Log">

                   </a>
               </span>
           </a>
           <!-- END Logo -->

           <!-- Extra -->
           <div>
               <!-- Options -->
               <div class="dropdown d-inline-block ml-2 ">

                   <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                       <!-- Color Themes -->

                       <!-- END Color Themes -->

                       <div class="dropdown-divider"></div>

                       <!-- Sidebar Styles -->
                       <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                       <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                           <span>Sidebar Light</span>
                       </a>
                       <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                           <span>Sidebar Dark</span>
                       </a>
                       <!-- Sidebar Styles -->

                       <div class="dropdown-divider"></div>

                       <!-- Header Styles -->
                       <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                       <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                           <span>Header Light</span>
                       </a>
                       <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                           <span>Header Dark</span>
                       </a>
                       <!-- Header Styles -->
                   </div>
               </div>
               <!-- END Options -->

               <!-- Close Sidebar, Visible only on mobile screens -->
               <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
               <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                   <i class="fa fa-fw fa-times"></i>
               </a>
               <!-- END Close Sidebar -->
           </div>
           <!-- END Extra -->
       </div>
       <!-- END Side Header -->
       {{-- rgb(81, 183, 252) --}}
       <!-- Sidebar Scrolling -->
       <div class="js-sidebar-scroll gradientBRD"  >
           <!-- Side Navigation -->
           <div class="content-side">

             <ul class="nav-main "  >
                       <li class="nav-main-item pl-3"  >
                       <a class="nav-main-link  {{  request()->is('list*') ? 'active' : ''}}"  href="{{ route('admin.list') }}">
                       <i class="nav-main-link-icon si si-emoticon-smile fa-1x"></i>
                               <span class="nav-main-link-name">Admins</span>

                           </a>
                       </li>
                   </ul>




          </div>
    <!-- END Side Navigation -->
       </div>
       <!-- END Sidebar Scrolling -->
   </nav>
   <!-- END Sidebar -->
<style>
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}


</style>
