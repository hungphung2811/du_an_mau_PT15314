const form = document.getElementById('form');
form.addEventListener("submit", (e) => {
    let messages = [];
    // ten hang hoa
    if (ten_hh.value.trim() === '') {
        document.getElementById('error_ten_hh').innerHTML = 'bạn chưa nhập tên hàng hóa';
        messages.push('a');
    } else {
        document.getElementById('error_ten_hh').innerHTML = '';
    }

    // don gia
    if (don_gia.value.trim() === '') {
        document.getElementById('error_don_gia').innerHTML = 'bạn chưa nhập đơn giá';
        messages.push('a');

    } else {
        if (don_gia.value <= 0) {
            document.getElementById('error_don_gia').innerHTML = 'đơn giá phải là số lơn hơn 0';
            messages.push('a');

        } else {
            document.getElementById('error_don_gia').innerHTML = '';
        }
    }

    // giam gia
    if (giam_gia.value.trim() === '' || giam_gia.value.trim() == null) {
        giam_gia.value = 0;
    } else {
        if (giam_gia.value < 0) {
            document.getElementById('error_giam_gia').innerHTML = 'giá giảm phải là số lơn hơn 0';
            messages.push('a');

        } else {
            document.getElementById('error_giam_gia').innerHTML = '';
        }
    }

    // ngay nhap
    if (ngay_nhap.value.trim() === '') {
        document.getElementById('error_ngay_nhap').innerHTML = 'bạn chưa nhập ngày nhập';
        messages.push('a');

    } else {
        document.getElementById('error_ngay_nhap').innerHTML = '';
    }

    //hinh
    // if (hinh.value.trim() === '') {
    //     document.getElementById('error_hinh').innerHTML = 'bạn chưa nhập ảnh';
    //     messages.push('a');

    // } else {
    //     document.getElementById('error_hinh').innerHTML = '';
    // }


    // mo ta
    if (mo_ta.value.trim() === '') {
        document.getElementById('error_mo_ta').innerHTML = 'bạn chưa nhập mô tả';
        messages.push('a');
    } else {
        document.getElementById('error_mo_ta').innerHTML = '';
    }
    // return false;
    if (messages.length > 0) {
        e.preventDefault();
    }
    console.log(abc.value);
});

// preview image
hinh.onchange = function () {
    if (hinh.value !== '') {
        render.readAsDataURL(hinh.files[0]);
        desc.style.display = "none";
    }
}
var render = new FileReader();
render.onload = function (e) {
    document.getElementById('result_image').innerHTML = '<img class="img-fluid" width=200 src="' + e.target.result + '"/>';
};

