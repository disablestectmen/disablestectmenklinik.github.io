(function ($) {
	"use strict";
	$(function () {
		// Ambil URL saat ini
		let currentUrl = window.location.href;
		$(this).closest(".menu-item").removeClass("active open");

		// Loop melalui setiap elemen menu
		$(".menu-item a").each(function () {
			let menuLink = $(this).attr("href");

			// Periksa apakah URL saat ini cocok dengan URL menu
			if (currentUrl.includes(menuLink)) {
				// Tambahkan kelas 'active' jika cocok
				$(this).closest(".menu-item").addClass("active");

				// Aktifkan menu induk jika ada
				$(this).parents(".menu-item").addClass("active open");
			} else {
				// Hapus kelas 'active' jika tidak cocok
				$(this).closest(".menu-item").removeClass("active open");
			}
		});
		// Jika tidak ada yang aktif, tambahkan kelas 'active' pada elemen menu pertama
		if (!$(".menu-item.active").length) {
			$(".menu-item:first").addClass("active open");
			$(".menu-item:eq(1)").addClass("active");
		}
	});
})(jQuery);
