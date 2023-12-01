function toggleNavigation() {
    var navList = document.getElementById('navList');
    navList.classList.toggle('hidden');
  }

function cancelEdit() {
    document.getElementById('tampilModalUbah').classList.add('hidden');
}

function editModal() {
    var editModal = document.getElementById('tampilModalUbah');
    editModal.classList.remove('hidden');
}


document.getElementById('editButton').addEventListener('click', editModal);

document.getElementById('cancelEditButton').addEventListener('click', cancelEdit);

//AJAX Create Admin

$(document).ready(function(){
    $(".tombol-simpan").click(function(){
    var data = $('.form-input').serialize();
    $.ajax({
      type: 'POST',
      url: "?controller=Admin&method=tambah",
      data: data,
      success: function() {
        tampilkanData();
      }
    });
   });

})

//AJAX Read Admin
function tampilkanData() {
    $.ajax({
        type: 'GET',
        url: "?controller=Admin",
        success: function (data) {
            $('.tampilData').html(data);
        }
    });
}