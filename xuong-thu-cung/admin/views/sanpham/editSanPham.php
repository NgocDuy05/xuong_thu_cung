
<!-- header  -->
<?php include './views/layout/header.php'; ?>
  <!-- Navbar -->
 <?php include './views/layout/navbar.php'; ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
 <?php include './views/layout/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa thông tin sản phẩm: <?= $sanPham['ten_san_pham'] ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thông tin sản phẩm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="<?= BASE_URL_ADMIN . '?act=sua-san-pham' ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="san_pham_id" value="<?= $sanPham['id'] ?>">
                <label for="ten_san_pham">Tên sản phẩm</label>
                <input type="text" id="ten_san_pham" name="ten_san_pham" class="form-control" value="<?= $sanPham['ten_san_pham'] ?>">
                  <?php if(isset($_SESSION['error']['ten_san_pham'])) { ?>
                      <p class="text-danger"><?= $_SESSION['error']['ten_san_pham'] ?></p>
                  <?php } ?>
              </div> 
              <div class="form-group">
                <label for="gia_san_pham">Giá sản phẩm</label>
                <input type="number" id="gia_san_pham" name="gia_san_pham" class="form-control" value="<?= $sanPham['gia_san_pham'] ?>">
              </div> 
              <div class="form-group">
                <label for="gia_khuyen_mai">Giá khuyến mãi</label>
                <input type="number" id="gia_khuyen_mai" name="gia_khuyen_mai" class="form-control" value="<?= $sanPham['gia_khuyen_mai'] ?>">
              </div> 
              <div class="form-group">
                <label for="hinh_anh">Hình ảnh</label>
                <input type="file" id="hinh_anh" name="hinh_anh" class="form-control">
              </div>   
              <div class="form-group">
                <label for="so_luong">Số lượng</label>
                <input type="text" id="so_luong" name="so_luong" class="form-control" value="<?= $sanPham['so_luong'] ?>">
              </div> 
              <div class="form-group">
                <label for="ngay_nhap">Ngày nhập</label>
                <input type="date" id="ngay_nhap" name="ngay_nhap" class="form-control" value="<?= $sanPham['ngay_nhap'] ?>">
              </div> 
              <div class="form-group">
                <label for="inputStatus">Danh mục sản phẩm</label>
                <select id="inputStatus" name="danh_muc_id" class="form-control custom-select">
                  <?php foreach($listDanhMuc as $danhMuc): ?>
                    <option <?= $danhMuc['id'] == $sanPham['danh_muc_id'] ? 'selected':'' ?> value="<?= $danhMuc['id']; ?>"><?= $danhMuc['ten_danh_muc']; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="trang_thai">Trạng thái sản phẩm</label>
                <select id="trang_thai" name="trang_thai" class="form-control custom-select">
                    <option <?= $sanPham['trang_thai'] == 1 ? 'selected':'' ?> value="1">Còn bán</option>
                    <option <?= $sanPham['trang_thai'] == 2 ? 'selected':'' ?> value="2">Dừng bán</option>
                </select>
              </div>
              <div class="form-group">
                <label for="mo_ta">Mô tả sản phẩm</label>
                <textarea id="mo_ta" name="mo_ta" class="form-control" rows="4"><?= $sanPham['mo_ta'] ?>"</textarea>
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="cart-footer text-center">
              <button type="submit" class="btn btn-primary">Sửa thông tin</button>
             </div> 
          </div>
          </form>
          <!-- /.card -->
        </div>
        <div class="col-md-4">
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Album ảnh sản phẩm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- Footer -->
<?php include './views/layout/footer.php'; ?>
<!-- End footer  -->

</body>
</html>