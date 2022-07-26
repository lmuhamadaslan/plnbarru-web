<?= $this->extend('Admin/Layout/index') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Area K3</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">K3</li>
            </ol>
            <div class="card shadow-sm">
                <div class="card-header"><h5>Patrol Check</h5></div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Emergency Diesel Generator</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Fire Fighting Sistem</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Hydrandt Indor</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="#"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex justify-content-center">Hydrandt Outdor</div>
                                <h1 class="d-flex justify-content-center"><i style="height: 100px;" class="fa-solid fa-building"></i></h1>
                                <a class="small text-white stretched-link" href="#"></a>
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