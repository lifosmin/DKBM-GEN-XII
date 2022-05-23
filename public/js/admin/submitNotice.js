var modalSubmit = $("#modal-submit");

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
            title: "Anda yakin?",
            text: "Anda akan mengubah Status dan Solusi dari Aspirasi ini. Pastikan Status dan Solusi yang Anda berikan sesuai dengan yang Anda inginkan!",
            showCancelButton: true,
            confirmButtonText: "Ya, Saya Yakin!",
            cancelButtonText: "Kembali",
            reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            var solusi = document.querySelector("#solusi");
            if(solusi.value != ""){
                swalWithBootstrapButtons.fire({
                    title: "Solusi berhasil dikirimkan!",
                    text: "Status dan Solusi telah diubah. Solusi akan dikirimkan melalui email ke pengirim Aspirasi.",
                    confirmButtonText: "Okay",
                }).then((result) => {
                    if(result.isConfirmed) {
                        const formAspirasi = document.querySelector(".formAspirasi");
                        formAspirasi.submit();
                    }
                });
            }else{
                swalWithBootstrapButtons.fire({
                    title: "Solusi masih kosong!",
                    text: "Pastikan Anda telah mengisi kolom Solusi sebelum mengirimkannya ke pemberi Aspirasi!",
                    confirmButtonText: "Okay",
                });
            }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire(
                "Pengubahan Status dan Solusi dibatalkan!",
                "Anda bisa mengecek lagi Status dan Solusi yang akan Anda berikan."
            );
        }
        });
    });
});