<?= $this->extend('Layouts/app') ?>

<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>Dashboard<?= $this->endSection() ?>

<?= $this->section('page_title') ?>Dashboard<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Total de Moradores</p>
              <h5 class="font-weight-bolder mb-0">
                150
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Unidades</p>
              <h5 class="font-weight-bolder mb-0">
                48
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
              <i class="ni ni-building text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Ocorrências Abertas</p>
              <h5 class="font-weight-bolder mb-0">
                5
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
              <i class="ni ni-bell-55 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-capitalize font-weight-bold">Reservas do Mês</p>
              <h5 class="font-weight-bolder mb-0">
                12
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
              <i class="ni ni-calendar-grid-58 text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Últimas Ocorrências</h6>
      </div>
      <div class="card-body p-3">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Unidade</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tipo</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Data</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Apto 101</p>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Vazamento</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-warning">Pendente</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">28/12/2025</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Apto 305</p>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Barulho</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-success">Resolvido</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">25/12/2025</span>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Apto 202</p>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">Manutenção</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="badge badge-sm bg-gradient-info">Em andamento</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">27/12/2025</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Próximas Reservas</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-primary shadow text-center">
                <i class="ni ni-satisfied text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Churrasqueira</h6>
                <span class="text-xs">Apto 401 - João Silva</span>
              </div>
            </div>
            <div class="d-flex">
              <span class="text-xs text-secondary">31/12/2025</span>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-success shadow text-center">
                <i class="ni ni-diamond text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Salão de Festas</h6>
                <span class="text-xs">Apto 203 - Maria Santos</span>
              </div>
            </div>
            <div class="d-flex">
              <span class="text-xs text-secondary">02/01/2026</span>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-info shadow text-center">
                <i class="ni ni-controller text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Quadra Esportiva</h6>
                <span class="text-xs">Apto 102 - Pedro Costa</span>
              </div>
            </div>
            <div class="d-flex">
              <span class="text-xs text-secondary">03/01/2026</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
