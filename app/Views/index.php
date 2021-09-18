<?php
$this->extend('layout');
$this->section('sidebar');
?>
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Корисник
            </div>
            <a class="nav-link" href="index.html">
            </a>
            <div class="sb-sidenav-menu-heading">Статус пријаве
            </div>
            <a class="nav-link" href="index.html">
                Негде тамо далеко
            </a>
            <div class="sb-sidenav-menu-heading">Операције
            </div>
            <a class="nav-link" href="index.html">
                Пријава теме
            </a>
            <div class="sb-sidenav-menu-heading">Брисање теме
            </div>
            <a class="nav-link" href="index.html">
                Размислите прво
            </a>
        </div>
    </div>
</nav>

<?php $this->endSection(); ?>

<?php
$this->section('content');
?>

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Primary Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Warning Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View
                    Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endSection(); ?>