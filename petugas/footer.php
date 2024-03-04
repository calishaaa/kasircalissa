<style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 20px;
            font-size: 18px;
            color: #333;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }
    </style>
    <div class="card mt-2 mb-5">
	<div class="card">
		<div class="card-body text-center">
			&copy; 2024 Aplikasi UKK Kasir
		</div>
	</div>
</div>
</div>
</div>
<script>
    function beliProduk(produkID) {
        // Lakukan proses pembelian sesuai dengan kebutuhan, misalnya dengan mengirimkan permintaan Ajax ke backend
        // Di sini Anda bisa memanggil endpoint PHP yang bertugas untuk menangani proses pembelian
        // Contoh:
         $.ajax({
         url: 'beli_produk.php',
          type: 'POST',
           data: { produk_id: produkID },
           success: function(response) {
                Tindakan setelah pembelian berhasil
                alert('Produk berhasil dibeli');
            },
             error: function(xhr, status, error) {
                  Tindakan jika terjadi kesalahan saat pembelian
              alert('Gagal membeli produk: ' + error);
           }
         });
        // Catatan: Anda perlu mengganti 'beli_produk.php' dengan nama file PHP yang menangani proses pembelian sesuai dengan struktur proyek Anda.
        
        // Contoh sederhana untuk tujuan demonstrasi:
        alert('Anda telah membeli produk dengan ID: ' + produkID);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>