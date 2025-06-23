  <div class="sidebar" id="sidebar">
      <!-- Logo -->
      <div class="sidebar-logo">
          <a href="index-2.html" class="logo logo-normal">
              <img src="{{ asset('assets/img/logo.svg') }}" alt="Img">
          </a>
          <a href="index-2.html" class="logo logo-white">
              <img src="{{ asset('assets/img/logo-white.svg') }}" alt="Img">
          </a>
          <a href="index-2.html" class="logo-small">
              <img src="{{ asset('assets/img/logo-small.png') }}" alt="Img">
          </a>
          {{-- <a id="toggle_btn" href="javascript:void(0);">
              <i data-feather="chevrons-left" class="feather-16"></i>
          </a> --}}
      </div>
      <!-- /Logo -->
      <div class="modern-profile p-3 pb-0">
          <div class="text-center rounded bg-light p-3 mb-4 user-profile">
              <div class="avatar avatar-lg online mb-3">
                  <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" alt="Img"
                      class="img-fluid rounded-circle">
              </div>
              <h6 class="fs-14 fw-bold mb-1">Wickdey</h6>
              <p class="fs-12">System Admin</p>
          </div>
          <div class="sidebar-nav mb-3">
              <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                  <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                  <li class="nav-item"><a class="nav-link border-0" href="chat.html">Chats</a></li>
                  <li class="nav-item"><a class="nav-link border-0" href="email.html">Inbox</a></li>
              </ul>
          </div>
      </div>
      <div class="sidebar-header p-3 pb-0 pt-2">
          <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
              <div class="avatar avatar-md onlin">
                  <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" alt="Img"
                      class="img-fluid rounded-circle">
              </div>
              <div class="text-start sidebar-profile-info ms-2">
                  <h6 class="fs-14 fw-bold mb-1">Wickdey</h6>
                  <p class="fs-12">System Admin</p>
              </div>
          </div>
          <div class="d-flex align-items-center justify-content-between menu-item mb-3">
              <div>
                  <a href="index-2.html" class="btn btn-sm btn-icon bg-light">
                      <i class="ti ti-layout-grid-remove"></i>
                  </a>
              </div>
              <div>
                  <a href="chat.html" class="btn btn-sm btn-icon bg-light">
                      <i class="ti ti-brand-hipchat"></i>
                  </a>
              </div>
              <div>
                  <a href="email.html" class="btn btn-sm btn-icon bg-light position-relative">
                      <i class="ti ti-message"></i>
                  </a>
              </div>
              <div class="notification-item">
                  <a href="activities.html" class="btn btn-sm btn-icon bg-light position-relative">
                      <i class="ti ti-bell"></i>
                      <span class="notification-status-dot"></span>
                  </a>
              </div>
              <div class="me-0">
                  <a href="#" onclick="logout()" class="btn btn-sm btn-icon bg-light">
                      <i class="ti ti-logout"></i>
                  </a>
              </div>
          </div>
      </div>

      <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
              <ul>
                    <li class="submenu-open">
                      <h6 class="submenu-hdr">Data Master</h6>
                      <ul>
                          <li><a href="{{ route('residential-areas.index') }}"><i class="ti ti-home fs-16 me-2"></i><span>Data Perumahan</span></a></li>
                          <li><a href="{{ route('housing-units.index') }}"><i class="ti ti-user-up fs-16 me-2"></i><span>Data Unit Rumah</span></a>
                          </li>
                          <li>
                              <a href="{{ route('resident.index') }}">
                                  <i class="ti ti-user-up fs-16 me-2"></i>
                                  <span>Data Warga</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="submenu-open">
                      <h6 class="submenu-hdr">Keuangan</h6>
                      <ul>
                          <li>
                              <a href="{{ route('payment-types.index') }}">
                                  <i class="ti ti-building-bank fs-16 me-2"></i>
                                  <span>Tipe Pembayaran</span>
                              </a>
                          </li>
                          <li>
                              <a href="{{ route('resident-payments.index') }}">
                                  <i class="ti ti-building-bank fs-16 me-2"></i>
                                  <span>Data Pembayaran</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="submenu-open">
                      <h6 class="submenu-hdr">Laporan</h6>
                      <ul>
                          <li><a href="income-report.html"><i class="ti ti-chart-ppf fs-16 me-2"></i><span>Laporan Iuran
                                      Warga</span></a></li>
                      </ul>
                  </li>

                  <li class="submenu-open">
                      <h6 class="submenu-hdr">User Management</h6>
                      <ul>
                          <li><a href="users.html"><i class="ti ti-shield-up fs-16 me-2"></i><span>Users</span></a>
                          </li>
                          <li><a href="roles-permissions.html"><i class="ti ti-jump-rope fs-16 me-2"></i><span>Roles &
                                      Permissions</span></a>
                          </li>
                          <li><a href="delete-account.html"><i class="ti ti-trash-x fs-16 me-2"></i><span>Delete
                                      Account Request</span></a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </div>
