var modalSubmit = $(".modal-submit");
var deleteUser = $("#delete-user");

$(document).ready(function () {
  const userDeleteButton = $(".button-delete");

  [...userDeleteButton].forEach(function (user) {
    const id = user.id;

    user.addEventListener('click', function() {
      const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons.fire({
            title: "Warning!",
            text: "Anda akan menghapus data dari salah satu user web DKBM. Pastikan perubahan yang anda lakukan sesuai dengan keinginan Anda. Ubahlah dengan penuh tanggung jawab!",
            showCancelButton: true,
            confirmButtonText: "Ya, Saya Yakin!",
            cancelButtonText: "Kembali",
            reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            const formDeleteUser = document.querySelector(`.deleteUser${id}`);
            formDeleteUser.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Penghapusan Data User dibatalkan!",
                "Anda bisa mengecek lagi data yang akan Anda hapus."
            );
        }
        });
    })
  })

    modalSubmit.click(function () {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons.fire({
            title: "Warning!",
            text: "Anda akan mengubah data dari salah satu user web DKBM. Pastikan perubahan yang anda lakukan sesuai dengan keinginan Anda. Ubahlah dengan penuh tanggung jawab!",
            showCancelButton: true,
            confirmButtonText: "Ya, Saya Yakin!",
            cancelButtonText: "Kembali",
            reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            const formEditUser = document.querySelector(".formEditUser");
            formEditUser.submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Pengubahan Data User dibatalkan!",
                "Anda bisa mengecek lagi data yang akan Anda ubah."
            );
        }
        });
    });
});