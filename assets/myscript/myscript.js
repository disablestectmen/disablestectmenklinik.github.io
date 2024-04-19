// main.js utnuk script sendiri
async function importUserModul(modulePath) {
  try {
      const module = await import(modulePath);
      // Gunakan fungsi-fungsi dari modul di sini
      module.someFunction();
  } catch (error) {
      console.error('Error loading module:', error);
  }
}

// Pemanggilan dinamis untuk modul yang berbeda
importUserModul('./produk.js');
importUserModul('./list_penjualan.js');