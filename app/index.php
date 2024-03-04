<?php
session_start();
$user = $_SESSION['user'];
if ($user == ""){
  ?>
<script>
  document.location = '../index.php ' ;
</script>
<?php
}else{
  include "boot.php";
?>
  <body>
    <div class="container">
    <!-- ini bagian navbar -->
    <nav class="navbar navbar-expand-lg bg-info mt-2">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#"><i class="bi bi-book"></i>   Buku Tamu Kecamatan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>

      <form class="d-flex" action="search.php" method="post" target="wadah" >
        <!-- <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="Search" > -->
        <input type="text" name="cari" >
        <input class="btn btn-outline-success" type="submit" value="cari">
      </form>
    </div>
  </div>
</nav>


<!-- ini penutup navbar -->
    
    <div class="row">
    <div class="col col-3 mt-2">
    <ul class="list-group">
    <a href="dashboard.php" target="wadah">
   <li class="list-group-item"><i class="bi bi-speedometer"></i> Dashboard</li>
  </a>
      <a href="input.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-card-checklist"></i> Input Data Pengunjung</li>
  </a>
  <a href="tampil.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-person-fill-check"></i> Data Pengunjung</li>
  </a>
  <a href="rekap.php" target="wadah">
  <li class="list-group-item"><i class="bi bi-file-earmark-bar-graph-fill"></i> Rekap</li>
  </a>
  <a href="logout.php">
  <li class="list-group-item"><i class="bi bi-box-arrow-left"></i> logout</li>
</a>
</ul>
</div>
<div class="col mt-2">
  <iframe src="dashboard.php" name="wadah" frameborder="0" width=100% height=800></iframe>
</div>
</div>
    </div>
  </body>
  <?php
}
?>
</html>