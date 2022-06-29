<nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
    <div class="nav-top flex-grow-1">
      <div class="container d-flex flex-row h-100">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="index.html">
           <h1 style="color: white;margin-top: 12px;">Smart Debt Collect
            </h1>
        </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <h1 style="color: white;margin-top: 12px;">Smart Debt Collect
            </h1>
        </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <form class="search-field" action="#">
            <div class="form-group mb-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="search">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-magnifier"></i></span>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav navbar-nav-right mr-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="icon-bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                  </p>
                  <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-success">
                      <i class="icon-exclamation mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0">
                      Just now
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-warning">
                      <i class="icon-bubble mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0">
                      Private message
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-info">
                      <i class="icon-user-following mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-equalizer"></i>
              </a>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link  dropdown-toggle"  id="notificationDropdownProfile" href="#" data-toggle="dropdown">
                <span class="nav-profile-text">Hello {{ Auth::user()->name }}</span>
                <img src="{{url('images/faces/face1.jpg')}}" class="rounded-circle" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdownProfile">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">{{ (Auth::user()->role==1) ?'Admin' :'User'  }} Settings
                  </p>
                </a>
                <div class="dropdown-divider"></div><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
                <a class="dropdown-item preview-item"  href="#">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-success">
                      <i class="icon-user-following mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Profile</h6>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-inverse-info">
                      <i class="icon-logout mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Logout</h6>
                  </div>
                </a>
              </div>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </ul>
          <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu text-white"></span>
          </button>
        </div>
      </div>
    </div>
    <div class="nav-bottom">
      <div class="container">
        <ul class="nav page-navigation">
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link"><i class="link-icon icon-home"></i><span class="menu-title">Home</span></a>
          </li>
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link"><i class="link-icon icon-badge"></i><span class="menu-title">Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Reminder</span></a>
          </li>
          <!-- <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-user"></i><span class="menu-title">Admin</span></a>
          </li> -->
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">Reports</span></a>
          </li>
          @if(Auth::user()->role)
          <li class="nav-item">
            <a href="{{ url('accounts') }}" class="nav-link"><i class="link-icon icon-credit-card"></i><span class="menu-title">Open Account</span></a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="link-icon icon-wallet"></i><span class="menu-title">Logout</span></a>
          </li>
          <li class="nav-item mega-menu">
            <a href="#" class="nav-link"><i class="link-icon icon-film"></i><span class="menu-title">RTP</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <div class="col-group-wrapper row">
                <div class="col-group col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <p class="category-heading">Basic Elements</p>
                      <div class="submenu-item">
                        <div class="row">
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/tooltips.html">Tooltip</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-group col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <p class="category-heading">Advanced Elements</p>
                      <div class="submenu-item">
                        <div class="row">
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                            </ul>
                          </div>
                          <div class="col-md-6">
                            <ul>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>
                              <li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-group col-md-4">
                  <p class="category-heading">Icons</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">RPC</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item mega-menu">
            <a href="#" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">BILLING QUERIES</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <div class="col-group-wrapper row">
                <div class="col-group col-md-6">
                  <p class="category-heading">Charts</p>
                  <div class="submenu-item">
                    <div class="row">
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <ul>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-group col-md-3">
                  <p class="category-heading">Table</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                  </ul>
                </div>
                <div class="col-group col-md-3">
                  <p class="category-heading">Maps</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item mega-menu">
            <a href="#" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">AOD</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <div class="col-group-wrapper row">
                <div class="col-group col-md-3">
                  <p class="category-heading">User Pages</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                  </ul>
                </div>
                <div class="col-group col-md-3">
                  <p class="category-heading">Error Pages</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a></li>
                  </ul>
                </div>
                <div class="col-group col-md-3">
                  <p class="category-heading">E-commerce</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                  </ul>
                </div>
                <div class="col-group col-md-3">
                  <p class="category-heading">General</p>
                  <ul class="submenu-item">
                    <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">EXCLUSSIONS</span><i class="menu-arrow"></i></a>
            <div class="submenu">
              <ul class="submenu-item">
                <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
              </ul>
            </div>
          </li> -->
          <!-- 
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-user"></i><span class="menu-title">USER</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-user-following"></i><span class="menu-title">ASSIGN USER</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-people"></i><span class="menu-title">Clients</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">Debtors</span></a>
          </li>

          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-envelope-letter"></i><span class="menu-title">Email Template</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-speech"></i><span class="menu-title">Reports</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link"><i class="link-icon icon-credit-card"></i><span class="menu-title">Open Account</span></a>
          </li> -->


        </ul>
      </div>
    </div>
  </nav>
