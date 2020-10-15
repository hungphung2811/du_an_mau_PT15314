const form = document.getElementById('form');
form.addEventListener("submit", (e) => {
    let messages = [];
    // ma khach hang
    if (ma_kh.value.trim() === '' || ma_kh.value.trim() == null) {
        document.getElementById('error_ma_kh').innerHTML = 'bạn chưa nhập mã khách hàng';
        messages.push('a');
    } else {
        document.getElementById('error_ma_kh').innerHTML = '';
    }

    // ho ten khach hang
    if (ho_ten.value.trim() === '' || ho_ten.value.trim() == null) {
        document.getElementById('error_ho_ten').innerHTML = 'bạn chưa nhập họ tên ';
        messages.push('a');
    } else {
        if (ho_ten.value.trim().length > 50) {
            document.getElementById('error_ho_ten').innerHTML = 'họ tên không được lớn hơn 50';
            messages.push('a');
        } else {
            document.getElementById('error_ho_ten').innerHTML = '';
        }
    }

    // mat khau
    if (mat_khau.value.trim() === '' || mat_khau.value.trim() == null) {
        document.getElementById('error_mat_khau').innerHTML = 'bạn chưa nhập mật khẩu';
    } else {
        if (mat_khau.value.trim().length > 20) {
            document.getElementById('error_mat_khau').innerHTML = 'mật khẩu không được lớn hơn 20';
            messages.push('a');

        } else {
            document.getElementById('error_mat_khau').innerHTML = '';
        }
    }

    // mat khau 2
    if (mat_khau2.value.trim() ===  '' || mat_khau2.value.trim() == null) {
        document.getElementById('error_mat_khau2').innerHTML = 'bạn chưa nhập ngày nhập';
        messages.push('a');
    } else {
        if (mat_khau2.value.trim() == mat_khau.value.trim()) {
            document.getElementById('error_mat_khau2').innerHTML = '';
        }
        else {
            document.getElementById('error_mat_khau2').innerHTML = 'nhập lại mật khẩu không chính xác';
            messages.push('a');
        }
    }

    // email
    if (email.value.trim() === '') {
        document.getElementById('error_email').innerHTML = 'bạn chưa nhập email';
        messages.push('a');
    } else {
        document.getElementById('error_email').innerHTML = '';
    }

    //hinh
    if (hinh.value.trim() === '') {
        document.getElementById('error_hinh').innerHTML = 'bạn chưa nhập ảnh';
        messages.push('a');

    } else {
        document.getElementById('error_hinh').innerHTML = '';
    }


    // return false;
    if (messages.length > 0) {
        e.preventDefault();
    }
});

// preview image
hinh.onchange = function () {
    if (hinh.value !== '') {
        render.readAsDataURL(hinh.files[0]);
        desc.style.display="none";
    }
}
var render = new FileReader();
render.onload = function (e) {
    document.getElementById('result_image').innerHTML = '<img class="img-fluid ml-5 mt-3" width=100 src="' + e.target.result + '"/>';
};