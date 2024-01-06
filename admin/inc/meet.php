<?php if (@$_GET['page'] == 'meet') { ?>
<script src='https://meet.jit.si/external_api.js'></script>
    <div class="row">
        <div class="col-md-12">
            <h4 class="page-head-line">Video Conference</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="alert alert-info alert-has-icon">
    <div class="alert-icon"><i class="fas fa-podcast"></i></div>
    <div class="alert-body">
      <div class="alert-title">Info</div>
      Silahkan pilih kelas dan room sesuai dengan jadwal, pastikan webcam dan microphone anda berfungsi dengan benar.
    </div>
    </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <a href="?page=room1">
            <div class="card-icon bg-danger">
              <i class="fas fa-school"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Room 1</h4>
              </div>
            </div>
          </div>
        </div>
        </a>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <a href="?page=room2">
            <div class="card-icon bg-warning">
              <i class="fas fa-school"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Room 2</h4>
              </div>
            </div>
          </div>
        </div>
        </a>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <a href="?page=room3">
            <div class="card-icon bg-primary">
            <i class="fas fa-school"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Room 3</h4>
                </div>
            </div>
          </div>
        </div>
        </a>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <a href="?page=room4">
            <div class="card-icon bg-success">
            <i class="fas fa-school"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Room 4</h4>
                </div>
            </div>
          </div>
        </div>
        </a>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <a href="?page=room-rapat-guru">
            <div class="card-icon bg-info">
            <i class="fas fa-school"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Rapat Guru</h4>
                </div>
            </div>
          </div>
        </div>
        </a>
    </div>
<?php
} ?>
