var modalSubmit = $(".modal-submit");

$(document).ready(function () {
    [...modalSubmit].forEach(function (eachButton) {
      console.log(eachButton);
        eachButton.addEventListener("click", function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger me-3",
                },
                buttonsStyling: false,
            });

            swalWithBootstrapButtons
                .fire({
                    title: "Anda yakin?",
                    text: "Anda akan mengubah Status dan Solusi dari Aspirasi ini. Pastikan Status dan Solusi yang Anda berikan sesuai dengan yang Anda inginkan!",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Saya Yakin!",
                    cancelButtonText: "Kembali",
                    reverseButtons: true,
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        var solusi = this.parentNode;
                        solusi = solusi.querySelector("#solusi");
                        if (solusi.value != "") {
                          const form = this.parentNode;
                          form.submit();
                        } else {
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
});
