var modalSubmit = $(".modal-submit");
var deleteUser = $("#delete-user");

$(document).ready(function () {
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
            swalWithBootstrapButtons.fire({
                title: "Data User berhasil di edit!",
                confirmButtonText: "Okay",
            }).then((result) => {
                if(result.isConfirmed) {
                    const formEditUser = document.querySelector(".formEditUser");
                    formEditUser.submit();
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Pengubahan Data User dibatalkan!",
                "Anda bisa mengecek lagi data yang akan Anda ubah."
            );
        }
        });
    });

    deleteUser.click(function(){
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
            swalWithBootstrapButtons.fire({
                title: "Data User berhasil di hpaus!",
                confirmButtonText: "Okay",
            }).then((result) => {
                if(result.isConfirmed) {
                    const formDeleteUser = document.querySelector(".deleteUser");
                    formDeleteUser.submit();
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Penghapusan Data User dibatalkan!",
                "Anda bisa mengecek lagi data yang akan Anda hapus."
            );
        }
        });
    });
});