<?= $this->extend('Admin/Layout/index') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <a href="<?= base_url('patrolK3/emergencyDiesel') ?>"><button type="button" class="btn btn-sm btn-danger mt-5">Back</button></a>
            <div class="card shadow-sm mt-4">
                <div class="card-header">
                    <h5>Isian Laporan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jam</label>
                                    <input type="time" class="form-control form-control-md" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Tekanan Air</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option value="1">Tidak</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Fire House</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option value="1">Tidak</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Box Hydrant</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option value="1">Tidak</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Pilar Hydrant</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option value="1">Tidak</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pilar Hydrant</label>
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option value="1">Tidak</option>
                                        <option value="2">Normal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-sm btn-success" type="button">Submit</button>
                            <button class="btn btn-sm btn-danger" type="button">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?= $this->include('Admin/Layout/footer') ?>
</div>
<?= $this->endSection() ?>