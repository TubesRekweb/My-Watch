
  <div class="content-wrapper">
    <section class="content">
<!-- carausel dashboard -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" style="max-height: 400px;">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/baground.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/baground.jpg')?>"class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      
<style>
  .p-10{
    padding: 10px;
  }
  .card .card-body{
    display: flex ;
    flex-direction: column ;
    color: #333 ; 
    padding:1.25rem 1.25rem 0 ;
  }
</style>
<div class="container-fluid">

  <!--menampilkan produk barang  -->
  <div class="row text-center mt-3">
    <?php foreach ($barang as $brg) : ?>
      <div class="col-md-3" style="margin-bottom: 20px;">
      <a href="<?= base_url(); ?>admin/product/detail/<?= $brg->id ?>">
        <div class="card" style="width: 100%;">
          <img src="<?= base_url().'assets/img/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-2"><?= $brg->nama_produk ?></h5>
            <small class=" mb-3"><?= $brg->spesifikasi_produk ?></small>
            <span class="badge badge-success p-10">Rp.<?= number_format($brg->harga_produk, 0,',','.') ?></span><br>
          </div>
      </div>
    </a>
    </div>
    <?php endforeach; ?>
    
  </div>
</div>