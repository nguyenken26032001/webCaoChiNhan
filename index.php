<?php
// require_once 'config/connect.php';
require_once 'config/functionHelper.php';

if (isset($_GET['pages'])) {
    $pages = $_GET['pages'];
} else {
    $pages = '';
}

require_once 'layout/header.php';

switch ($pages) {
    case 'product': {
            require_once 'include/product.php';
            break;
        }
    case 'dangnhap': {
            require_once 'include/dangnhap.php';
            break;
        }
    case 'users': {
            require_once 'include/users.php';
            break;
        }
    case 'dangky': {
            require_once 'include/dangky.php';
            break;
        }
    case 'giohang': {
            require_once 'include/giohang.php';
            break;
        }
    case 'chitietsanpham': {
            require_once 'include/chitiet.php';
            break;
        }
    case 'thanhtoan': {
            require_once 'include/thanhtoan.php';
            break;
        }
    case 'muangay': {
            require_once 'include/mua_ngay.php';
            break;
        }
    case 'kiemtra_donhang': {
            require_once 'include/kiemtra_donhang.php';
            break;
        }
    case 'chitiet_donhang': {
            require_once 'include/chitiet_donhang.php';
            break;
        }
    case 'chitiet_donhangdat': {
            require_once 'include/chitiet_donhang_user.php';
            break;
        }
    case 'cart': {
            require_once 'include/cart.php';
            break;
        }
    default: {
            require_once 'include/home.php';
        }
}
require_once 'layout/footer.php';
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
<script>
swal.fire({
    title: "",
    text: "<?php echo $_SESSION['status'] ?>",
    icon: "<?php echo $_SESSION['status_code'] ?>",
    button: "ok",
});
</script>
<?php
    unset($_SESSION['status']);
    unset($_SESSION['status_code']);
}
if (isset($_SESSION['noti']) && $_SESSION['noti'] != '') {
?>
<script>
swal.fire({
    title: "",
    text: "<?php echo $_SESSION['noti'] ?>",
    icon: "<?php echo $_SESSION['status_noti'] ?>",
    button: "ok",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
});
</script>
<?php
    unset($_SESSION['noti']);
    unset($_SESSION['status_noti']);
}
?>