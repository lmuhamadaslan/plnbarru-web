<?= $this->extend('Admin/Layout/index') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Emergency Diesel Generator</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="#">patrolK3</a></li>
                    <li class="breadcrumb-item active" aria-current="page">emergencyDiesel</li>
                </ol>
            </nav>
            <a href="<?= base_url('patrolK3') ?>"><button type="button" class="btn btn-sm btn-danger mt-4 mb-4">Back</button></a>
            <div class="card shadow-sm mb-5">
                <div class="card-header">
                    <h5>Shift Bertugas</h5>
                </div>
                <div class="card-body">
                    
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header">
                    <h5>Lokasi</h5>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Ground Floor Turbine Hall A</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="<?= base_url('patrolK3/isipatrol1') ?>"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Ground Floor Turbine Hall B</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="<?= base_url('patrolK3/isipatrol2') ?>"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Ground Floor Turbine Hall C</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="<?= base_url('patrolK3/isipatrol3') ?>"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Ground Floor Turbine Hall C</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="<?= base_url('patrolK3/isipatrol4') ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include('Admin/Layout/footer') ?>
</div>
<?= $this->endSection() ?>