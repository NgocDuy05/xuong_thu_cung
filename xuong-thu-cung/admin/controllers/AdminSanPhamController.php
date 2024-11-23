<?php
class AdminSanPhamController {

    public $modelSanPham;

    public function __construct()
    {
        $this->modelSanPham = new AdminSanPham();
    }

    public function danhSachSanPham(){

        $listSanPham = $this->modelSanPham->getAllSanPham();

        require_once 'views/sanpham/listSanPham.php';
    }

    // public function formAddDanhMuc() {
    //     // hàm này dùng để hiển thì form nhập
    //     require_once 'views/danhmuc/addDanhMuc.php';
    // }

    // public function postAddDanhMuc() {
    //     // hàm này dùng để xử lý dữ liệu

    //     // Kiểm tra xem DL có phải đc submit hay không
    //     if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // lấy ra DL
    //         $ten_danh_muc = $_POST['ten_danh_muc'];
    //         $mo_ta = $_POST['mo_ta'];

    //         // Tạo 1 mảng trống để chứa DL
    //         $errors = [];
    //         if(empty($ten_danh_muc)) {
    //             $errors['ten_danh_muc'] = 'Tên danh mục không được để trống';
    //         }

    //         // Nếu không có lỗi thì tiến hành thêm danh mục
    //         if(empty($errors)) {
    //             // Nếu không có lỗi thì tiến hành thêm danh mục

    //             $this->modelDanhMuc->insertDanhMuc($ten_danh_muc, $mo_ta);
    //             header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
    //             exit();
    //         } else {
    //             // Trả về form và lỗi
    //             require_once 'views/danhmuc/addDanhMuc.php';
    //         }
    //     }
    // }

    // public function formEditDanhMuc() {
    //     // hàm này dùng để hiển thì form nhập
    //     // Lấy ra thông tin của danh mục cần sửa
    //     $id = $_GET['id_danh_muc'];
    //     $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
    //     if($danhMuc) {
    //         require_once 'views/danhmuc/editDanhMuc.php';
    //     } else {
    //         header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
    //         exit();
    //     }
    // }

    // public function postEditDanhMuc() {
    //     // hàm này dùng để xử lý dữ liệu

    //     // Kiểm tra xem DL có phải đc submit hay không
    //     if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // lấy ra DL
    //         $id = $_POST['id'];
    //         $ten_danh_muc = $_POST['ten_danh_muc'];
    //         $mo_ta = $_POST['mo_ta'];

    //         // Tạo 1 mảng trống để chứa DL
    //         $errors = [];
    //         if(empty($ten_danh_muc)) {
    //             $errors['ten_danh_muc'] = 'Tên danh mục không được để trống';
    //         }

    //         // Nếu không có lỗi thì tiến hành sửa danh mục
    //         if(empty($errors)) {
    //             // Nếu không có lỗi thì tiến hành sửa danh mục

    //             $this->modelDanhMuc->updateDanhMuc($id, $ten_danh_muc, $mo_ta);
    //             header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
    //             exit();
    //         } else {
    //             // Trả về form và lỗi
    //             $danhMuc = ['id' => $id,  'ten_danh_muc' => $ten_danh_muc, 'mo_ta' => $mo_ta];
    //             require_once 'views/danhmuc/editDanhMuc.php';
    //         }
    //     }
    // }

    // public function deleteDanhMuc () {
    //     $id = $_GET['id_danh_muc'];
    //     $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

    //     if($danhMuc) {
    //         $this->modelDanhMuc->destroyDanhMuc($id);
    //     } 
            
    //     header("Location: " . BASE_URL_ADMIN . '?act=danh-muc');
    //     exit();   
    // }
}
?>