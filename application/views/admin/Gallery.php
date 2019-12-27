   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">

<!--   Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Gallery</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <div class="card-title">
              Gallery with MyWatch
          </div>
          <div class="card-body">
            <div>
              <div class="btn-group w-100 mb-2">
                <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category Man </a>
                <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category Woman</a>
                <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category Couple</a>
              </div>
              <div class="mb-2">
                <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                <div class="float-right">
                  <select class="custom-select" style="width: auto;" data-sortOrder>
                    <option value="index"> Sort by Position </option>
                    <option value="sortData"> Sort by Custom Data </option>
                  </select>
                  <div class="btn-group">
                    <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                    <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                  </div>
                </div>
              </div>
            </div>
            <div>

              <div class="filter-container p-0 row">
                      <?php foreach ($man as $brg1) : ?>
                <div class="filtr-item col-sm-2" data-category="1">
                  <a href="<?= base_url().'assets/img/uploads/'.$brg1->gambar ?>" data-toggle="lightbox" data-title="<?= $brg1->nama_produk ?>">
                    <img src="<?= base_url().'assets/img/uploads/'.$brg1->gambar ?>" class="img-fluid mb-2" alt="white sample"/>
                  </a>
                </div>
                     <?php endforeach; ?>
                      <?php foreach ($woman as $brg2) : ?>
                <div class="filtr-item col-sm-2" data-category="2">
                  <a href="<?= base_url().'assets/img/uploads/'.$brg2->gambar ?>" data-toggle="lightbox" data-title="<?= $brg2->nama_produk ?>">
                    <img src="<?= base_url().'assets/img/uploads/'.$brg2->gambar ?>" class="img-fluid mb-2" alt="white sample"/>
                  </a>
                </div>
                     <?php endforeach; ?>
                <?php foreach ($couple as $brg3) : ?>
                <div class="filtr-item col-sm-2" data-category="3">
              
                  <a href="<?= base_url().'assets/img/uploads/'.$brg3->gambar ?>" data-toggle="lightbox" data-title="<?= $brg3->nama_produk ?>">
                    <img src="<?= base_url().'assets/img/uploads/'.$brg3->gambar ?>" class="img-fluid mb-2">
                  </a>
                </div>  
                     <?php endforeach; ?>
              
              </div>
            </div>

          </div>
        </div>
      </div>
     