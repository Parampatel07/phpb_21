     <!-- GLOBAL-LOADER -->
     <div id="global-loader">
          <img src="theme/assets/images/loader.svg" class="loader-img" alt="Loader">
     </div>
     <!-- /GLOBAL-LOADER -->

     <!-- PAGE -->
     <div class="page">
          <div class="page-main">

               <!--APP-SIDEBAR-->
               <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
               <aside class="app-sidebar">
                    <div class="side-header">
                         <a class="header-brand1" href="index.html">
                              <img src="theme/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                              <img src="theme/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                              <img src="theme/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                              <img src="theme/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                         </a><!-- LOGO -->
                    </div>
                    <ul class="side-menu">
                         <li>
                              <h3>Main</h3>
                         </li>
                         <li class="slide">
                              <a class="side-menu__item" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                         </li>
                         <li>
                              <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Widgets</span></a>
                         </li>
                    </ul>
               </aside>
               <!--/APP-SIDEBAR-->
               <!-- Mobile Header -->
               <div class="app-header header">
                    <div class="container-fluid">
                         <div class="d-flex">
                              <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                              <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                   <div class="dropdown d-none d-md-flex">
                                        <a class="nav-link icon full-screen-link nav-link-bg">
                                             <i class="fe fe-minimize fullscreen-button"></i>
                                        </a>
                                   </div><!-- FULL-SCREEN -->
                                   <div class="dropdown d-none d-md-flex profile-1">
                                        <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                                             <span>
                                                  <img src="theme/assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                             </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                             <div class="drop-heading">
                                                  <div class="text-center">
                                                       <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                                  </div>
                                             </div>
                                             <a class="dropdown-item" href="emailservices.html">
                                                  <i class="dropdown-icon fe fe-settings"></i> Change Password
                                             </a>
                                             <a class="dropdown-item" href="login.html">
                                                  <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                             </a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                         <div class="d-flex order-lg-2 ms-auto">
                              <div class="dropdown d-sm-flex">
                                   <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                        <i class="fe fe-search"></i>
                                   </a>
                                   <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2">
                                             <input type="text" class="form-control" placeholder="Search....">
                                             <div class="input-group-text btn btn-primary">
                                                  <i class="fa fa-search" aria-hidden="true"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div><!-- SEARCH -->
                              <div class="dropdown d-md-flex">
                                   <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                        <span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Dark Theme"><i class="fe fe-moon"></i></span>
                                        <span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Light Theme"><i class="fe fe-sun"></i></span>
                                   </a>
                              </div><!-- Theme-Layout -->
                              <div class="dropdown d-md-flex">
                                   <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="fe fe-minimize fullscreen-button"></i>
                                   </a>
                              </div><!-- FULL-SCREEN -->
                              <div class="dropdown  d-md-flex notifications">
                                   <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                             <div class="d-flex">
                                                  <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Notification</h6>
                                                  <div class="ms-auto">
                                                       <span class="badge bg-success rounded-pill">3</span>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="notifications-menu">
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <div class="me-3 notifyimg  bg-primary-gradient brround box-shadow-primary">
                                                       <i class="fe fe-message-square"></i>
                                                  </div>
                                                  <div class="mt-1">
                                                       <h5 class="notification-label mb-1">New review received</h5>
                                                       <span class="notification-subtext">2 hours ago</span>
                                                  </div>
                                             </a>
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <div class="me-3 notifyimg  bg-secondary-gradient brround box-shadow-primary">
                                                       <i class="fe fe-mail"></i>
                                                  </div>
                                                  <div class="mt-1">
                                                       <h5 class="notification-label mb-1">New Mails Received</h5>
                                                       <span class="notification-subtext">1 week ago</span>
                                                  </div>
                                             </a>
                                             <a class="dropdown-item d-flex" href="cart.html">
                                                  <div class="me-3 notifyimg  bg-success-gradient brround box-shadow-primary">
                                                       <i class="fe fe-shopping-cart"></i>
                                                  </div>
                                                  <div class="mt-1">
                                                       <h5 class="notification-label mb-1">New Order Received</h5>
                                                       <span class="notification-subtext">1 day ago</span>
                                                  </div>
                                             </a>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a href="#" class="dropdown-item text-center p-3 text-muted">View all Notification</a>
                                   </div>
                              </div><!-- NOTIFICATIONS -->
                              <div class="dropdown d-md-flex message">
                                   <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                        <i class="fe fe-message-square"></i><span class=" pulse-danger"></span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                             <div class="d-flex">
                                                  <h6 class="mt-1 mb-0 fs-16 fw-semibold">You have Messages</h6>
                                                  <div class="ms-auto">
                                                       <span class="badge bg-danger rounded-pill">4</span>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="message-menu">
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/1.jpg"></span>
                                                  <div class="wd-90p">
                                                       <div class="d-flex">
                                                            <h5 class="mb-1">Madeleine</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                 3 hours ago
                                                            </small>
                                                       </div>
                                                       <span>Hey! there I' am available....</span>
                                                  </div>
                                             </a>
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/12.jpg"></span>
                                                  <div class="wd-90p">
                                                       <div class="d-flex">
                                                            <h5 class="mb-1">Anthony</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                 5 hour ago
                                                            </small>
                                                       </div>
                                                       <span>New product Launching...</span>
                                                  </div>
                                             </a>
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/4.jpg"></span>
                                                  <div class="wd-90p">
                                                       <div class="d-flex">
                                                            <h5 class="mb-1">Olivia</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                 45 mintues ago
                                                            </small>
                                                       </div>
                                                       <span>New Schedule Realease......</span>
                                                  </div>
                                             </a>
                                             <a class="dropdown-item d-flex" href="chat.html">
                                                  <span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/15.jpg"></span>
                                                  <div class="wd-90p">
                                                       <div class="d-flex">
                                                            <h5 class="mb-1">Sanderson</h5>
                                                            <small class="text-muted ms-auto text-end">
                                                                 2 days ago
                                                            </small>
                                                       </div>
                                                       <span>New Schedule Realease......</span>
                                                  </div>
                                             </a>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a href="#" class="dropdown-item text-center p-3 text-muted">See all Messages</a>
                                   </div>
                              </div><!-- MESSAGE-BOX -->
                              <div class="dropdown d-md-flex profile-1">
                                   <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                                        <span>
                                             <img src="assets/images/users/8.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                        </span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                             <div class="text-center">
                                                  <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                                  <small class="text-muted">Administrator</small>
                                             </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="profile.html">
                                             <i class="dropdown-icon fe fe-user"></i> Profile
                                        </a>
                                        <a class="dropdown-item" href="email.html">
                                             <i class="dropdown-icon fe fe-mail"></i> Inbox
                                             <span class="badge bg-primary float-end">3</span>
                                        </a>
                                        <a class="dropdown-item" href="emailservices.html">
                                             <i class="dropdown-icon fe fe-settings"></i> Settings
                                        </a>
                                        <a class="dropdown-item" href="faq.html">
                                             <i class="dropdown-icon fe fe-alert-triangle"></i> Need help?
                                        </a>
                                        <a class="dropdown-item" href="login.html">
                                             <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                        </a>
                                   </div>
                              </div>
                              <div class="dropdown d-md-flex header-settings">
                                   <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                        <i class="fe fe-menu"></i>
                                   </a>
                              </div><!-- SIDE-MENU -->
                         </div>
                    </div>
               </div>
               <!-- /Mobile Header -->