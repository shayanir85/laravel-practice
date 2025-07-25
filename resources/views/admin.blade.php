    @extends('layout.master-admin')
    @section('nav-section-admin')
    <nav class="app-header navbar navbar-expand bg-dark ">
      <!--begin::Container-->
      <div class="container-fluid ">
      <!--begin::Start Navbar Links-->
      <ul class="navbar-nav ">
        <li class="nav-item">
        <a class="nav-link text-light" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
        </li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link text-light">Home</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link text-light">Contact</a></li>
      </ul>
      <!--end::Start Navbar Links-->
      <!--begin::End Navbar Links-->
      <ul class="navbar-nav ms-auto">
        <!--begin::Navbar Search-->
        <li class="nav-item">
        <a class="nav-link text-light" data-widget="navbar-search" href="#" role="button">
          <i class="bi bi-search"></i>
        </a>
        </li>
        <!--end::Navbar Search-->
        <!--begin::Messages Dropdown Menu-->
        <li class="nav-item dropdown">
        <a class="nav-link text-light" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-chat-text"></i>
          <span class="navbar-badge badge text-bg-danger">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <a href="#" class="dropdown-item">
          <!--begin::Message-->
          <div class="d-flex">
            <div class="flex-shrink-0">
            <img src="{{ asset('asset/img/user1-128x128.jpg') }}" alt="User Avatar"
              class="img-size-50 rounded-circle me-3" />
            </div>
            <div class="flex-grow-1">
            <h3 class="dropdown-item-title">
              Brad Diesel
              <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
            </h3>
            <p class="fs-7 ">Call me whenever you can...</p>
            <p class="fs-7 text-secondary">
              <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
            </p>
            </div>
          </div>
          <!--end::Message-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <!--begin::Message-->
          <div class="d-flex">
            <div class="flex-shrink-0">
            <img src="{{ asset('asset/img/user8-128x128.jpg') }}" alt="User Avatar"
              class="img-size-50 rounded-circle me-3" />
            </div>
            <div class="flex-grow-1">
            <h3 class="dropdown-item-title">
              John Pierce
              <span class="float-end fs-7 text-secondary">
              <i class="bi bi-star-fill"></i>
              </span>
            </h3>
            <p class="fs-7">I got your message bro</p>
            <p class="fs-7 text-secondary">
              <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
            </p>
            </div>
          </div>
          <!--end::Message-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <!--begin::Message-->
          <div class="d-flex">
            <div class="flex-shrink-0">
            <img src="{{ asset('asset/img/user3-128x128.jpg') }}" alt="User Avatar"
              class="img-size-50 rounded-circle me-3" />
            </div>
            <div class="flex-grow-1">
            <h3 class="dropdown-item-title">
              Nora Silvester
              <span class="float-end fs-7 text-warning">
              <i class="bi bi-star-fill"></i>
              </span>
            </h3>
            <p class="fs-7">The subject goes here</p>
            <p class="fs-7 text-secondary">
              <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
            </p>
            </div>
          </div>
          <!--end::Message-->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
        </li>
        <!--end::Messages Dropdown Menu-->
        <!--begin::Notifications Dropdown Menu-->
        <li class="nav-item dropdown">
        <a class="nav-link text-light" data-bs-toggle="dropdown" href="#">
          <i class="bi bi-bell-fill"></i>
          <span class="navbar-badge badge text-bg-warning">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="bi bi-envelope me-2"></i> 4 new messages
          <span class="float-end text-secondary fs-7">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="bi bi-people-fill me-2"></i> 8 friend requests
          <span class="float-end text-secondary fs-7">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
          <span class="float-end text-secondary fs-7">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
        </div>
        </li>
        <!--end::Notifications Dropdown Menu-->
        <!--begin::Fullscreen Toggle-->
        <li class="nav-item ">
        <a class="nav-link text-light" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
        </li>
        <!--end::Fullscreen Toggle-->
        <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img src="{{ asset('asset/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow"
          alt="User Image" />
          <span class="d-none d-md-inline text-light">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!--begin::User Image-->
          <li class="user-header text-bg-primary">
          <img src="{{ asset('asset/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
          <p>
            Alexander Pierce - Web Developer
            <small>Member since Nov. 2023</small>
          </p>
          </li>
          <!--end::User Image-->
          <!--begin::Menu Body-->
          <li class="user-body">
          <!--begin::Row-->
          <div class="row">
            <div class="col-4 text-center"><a href="#">Followers</a></div>
            <div class="col-4 text-center"><a href="#">Sales</a></div>
            <div class="col-4 text-center"><a href="#">Friends</a></div>
          </div>
          <!--end::Row-->
          </li>
          <!--end::Menu Body-->
          <!--begin::Menu Footer-->
          <li class="user-footer ">
          <a href="#" class="btn btn-default btn-flat">Profile</a>
          <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
          </li>
          <!--end::Menu Footer-->
        </ul>
        </li>
        <!--end::User Menu Dropdown-->
      </ul>
      <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
  @endsection
    <!--end::Header-->
    <!--begin::Sidebar-->
 
    <!--end::Sidebar-->
    <!--begin::App Main-->
    @section('main-part')
    
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <!--begin::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 1-->
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                  </path>
                </svg>
                <a href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 2-->
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>53<sup class="fs-5">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                  </path>
                </svg>
                <a href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 2-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 3-->
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                  </path>
                </svg>
                <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 3-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 4-->
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                  </path>
                  <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                  </path>
                </svg>
                <a href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 4-->
            </div>
            <!--end::Col-->
          </div>
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content-->
    </main>
    @endsection
    <!--end::App Main-->
    <!--begin::Footer-->
    
    <!--end::Footer-->
