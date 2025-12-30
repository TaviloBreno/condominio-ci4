<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <title><?= $this->renderSection('title') ?> - Condomínio</title>
  
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url('assets/css/soft-ui-dashboard.css?v=1.0.3') ?>" rel="stylesheet" />

  <?= $this->renderSection('css') ?>
</head>

<body class="g-sidenav-show bg-gray-100">
  <!-- Sidebar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?= base_url() ?>">
        <img src="<?= base_url('assets/img/logo-ct.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Condomínio</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= uri_string() === '' ? 'active' : '' ?>" href="<?= base_url() ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home text-dark"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- Add more menu items here -->
      </ul>
    </div>
    <div class="sidenav-footer mx-3">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('<?= base_url('assets/img/curved-images/white-curved.jpeg') ?>')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="fas fa-question text-dark text-lg top-0" aria-hidden="true"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Precisa de ajuda?</h6>
            <p class="text-xs font-weight-bold">Consulte a documentação</p>
            <a href="#" class="btn btn-white btn-sm w-100 mb-0">Documentação</a>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!-- End Sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="<?= base_url() ?>">Páginas</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $this->renderSection('breadcrumb') ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?= $this->renderSection('page_title') ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Pesquisar...">
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <?php if (auth()->loggedIn()): ?>
              <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none"><?= auth()->user()->username ?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a class="dropdown-item border-radius-md" href="<?= base_url('logout') ?>">
                      <i class="fa fa-sign-out-alt me-2"></i> Sair
                    </a>
                  </li>
                </ul>
              </li>
            <?php else: ?>
              <li class="nav-item d-flex align-items-center">
                <a href="<?= base_url('login') ?>" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Entrar</span>
                </a>
              </li>
            <?php endif; ?>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <div class="container-fluid py-4">
      <?= $this->renderSection('content') ?>

      <!-- Footer -->
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <?= date('Y') ?>, Sistema de Condomínio
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- Core JS Files -->
  <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = { damping: '0.5' }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
  <!-- Control Center for Soft Dashboard -->
  <script src="<?= base_url('assets/js/soft-ui-dashboard.min.js?v=1.0.3') ?>"></script>
  
  <?= $this->renderSection('js') ?>
</body>

</html>
