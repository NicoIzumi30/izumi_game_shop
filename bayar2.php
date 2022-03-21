
          <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">Detail yang harus di bayar</h2>
                <table class="table">
                  <thead>
                  <tr>
                      <td class="text-white">Nama Produk</td>
                      <td class="text-white">Harga Satuan</td>
                      <td class="text-white">Qty</td>
                      <td class="text-white">Jumlah</td>
                  </tr>
                  </thead>
                  <tbody>  
                  <tr>
                      <td class="text-white"><?=$data['nama_akun'];?></td>
                      <td class="text-white">Rp. <?=number_format($data['harga_akun']);?></td>
                      <td class="text-white"><?=$qty;?></td>
                      <td class="text-white">Rp. <?=number_format($data['harga_akun'] * $qty);?></td>
                  </tr>  
                  </tbody>
                </table>
                <h3 class="text-white">Total Yang Harus Di Bayar : Rp. <?=number_format($jml);?></h3>
         </div>
         <div class="col-md-12 ">
             <p class="text-white">Informasi Pembayaran: </p>
             <img style="height: 300px; width: 300px" src="<?=BASE_URL;?>assets/img/qrcode.png">
             <p class="text-white">1. Unduh QR Code di atas dengan cara tahan gambar lalu simpan. <br>
                2. Buka OVO, Gojek, Dana, Link Aja, atau aplikasi mobile-banking yang Anda miliki. <br>
                3. Pilih opsi bayar lalu unggah QR Code melalui menu di kanan atas <br>
                4. Input jumlah sesuai nominal diatas <br>
                5. Masukkan nama lengkap Anda lalu esekusi pembayaran

            </p>
         </div>
      </div>


<?php require "includes/footer.php"; ?>