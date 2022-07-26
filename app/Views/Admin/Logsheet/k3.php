<?= $this->extend('Admin/Layout/index') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4">Ini Halaman K3</h1>
        </div>
    </main>
    <?= $this->include('Admin/Layout/footer') ?>
</div>
<?= $this->endSection() ?>