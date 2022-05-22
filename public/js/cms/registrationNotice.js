var registerSubmit = $("#register-submit");

$(document).ready(function () {
    registerSubmit.click(function () {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
        });

        swalWithBootstrapButtons.fire({
            title: "Anda yakin?",
            text: "Periksalah kembali data diri yang anda masukkan. Pastikan data diri Anda sudah terisi benar!",
            showCancelButton: true,
            confirmButtonText: "Ya, Saya Yakin!",
            cancelButtonText: "Kembali",
            reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                title: "Pendaftaran berhasil dilakukan!",
                text: "Registrasi Anda berhasil dilakukan, Anda bisa memberikan aspirasi Anda kepada DKBM melalui form aspirasi.",
                confirmButtonText: "Okay",
            }).then((result) => {
                if(result.isConfirmed) {
                    const formRegistration = document.querySelector(".formRegistration");
                    formRegistration.submit();
                }
            });
        }
        });
    });
});