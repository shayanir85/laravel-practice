<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  @include('admin-parts.admin-head')
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary ">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    @include('admin-parts.admin-nav')

    @include('admin-parts.sideBar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    @yield('main-part')
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('admin-parts.admin-footer')
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  @include('admin-parts.scripts')
  <!--end::Script-->
</body>
<!--end::Body-->

</html>