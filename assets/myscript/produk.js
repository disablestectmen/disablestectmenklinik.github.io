export function someFunction() {

    /** button hapus */

    let button_hapus = $('.btn-hapus');

    button_hapus.on('click', function (e) {
        e.preventDefault(); // Menghentikan perilaku default dari tautan
        const id_produk = $(this).data('id');
        const nama_produk = $(this).data('nama');
        const kode_produk = $(this).data('kode');
        if (id_produk) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-sm m-1 btn-success",
                    cancelButton: "btn btn-sm m-1 btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Kode: ' + kode_produk + ' , ' + 'nama: ' + nama_produk,
                text: "Apa anda yakin menghapus data tersebut?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Telah dihapus!",
                        text: "Data anda telah dihapus.",
                        icon: "success"
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Data batal dihapus",
                        // text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        }
    })

    /**akhir button hapus */
}