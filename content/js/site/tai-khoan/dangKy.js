hinh.onchange = function () {
    if (hinh.value !== '') {
        render.readAsDataURL(hinh.files[0]);
        desc.style.display = "none";
    }
}
var render = new FileReader();
render.onload = function (e) {
    document.getElementById('result_image').innerHTML = '<img class="img-fluid" width="50" src="' + e.target.result + '"/>';
};