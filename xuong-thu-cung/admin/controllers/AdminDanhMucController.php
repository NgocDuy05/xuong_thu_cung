<?php
class AdminDanhMucController {

    public $modelDanhMuc;

    public function __construct()
    {
        $this->modelDanhMuc = new AdminDanhMuc();
    }

    public function danhSachDanhMuc(){

        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();

        require_once 'views/danhmuc/listDanhMuc.php';
    }

    public function formAddDanhMuc() {
        // hàm này dùng để hiển thì form nhập
        require_once 'views/danhmuc/addDanhMuc.php';
    }

    public function postAddDanhMuc() {
        // hàm này dùng để xử lý dữ liệu

        // Kiểm tra xem DL có phải đc submit hay không
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lấy ra DL
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];

            // Tạo 1 mảng trống để chứa DL
            $errors = [];
            if(empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'Tên danh mục không được để trống';
            }

            // Nếu không có lỗi thì tiến hành thêm danh mục
            if(empty($errors)) {
                // Nếu không có lỗi thì tiến hành thêm danh mục
            } else {
                // Trả về form và lỗi
                require_once 'views/danhmuc/addDanhMuc.php';
            }
        }

    }
}
?>