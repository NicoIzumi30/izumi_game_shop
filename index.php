<?php 
    $title = "Home ";
    require "includes/header.php";

    if (isset($_GET['filter'])) {
         $sql = "SELECT * FROM akun WHERE id_kategori = '".$_GET['filter']."'";
         $result = mysqli_query($conn, $sql);
         $data = mysqli_fetch_assoc($result);
    }else
    if (isset($_GET['s'])) {
        $key = "%".$_GET['s']."%";
         $sql = "SELECT * FROM akun WHERE nama_akun like '$key'";
         $result = mysqli_query($conn, $sql);
         $data = mysqli_fetch_assoc($result);
     }else {
        $sql = "SELECT * FROM akun ORDER BY id_akun DESC";
         $result = mysqli_query($conn, $sql);
         $data = mysqli_fetch_assoc($result);
    }

 ?>

<div class="row">
           <div class="col-sm-3">
                <h1 class="my-4 text-white font-weight-bold text-center">Izumi Game <br>STORE</h1>
                <div class="list-group">
                     <a style="color: #FF69B4;
                             font-weight: 600;"
                     href="<?=BASE_URL;?>" class="list-group-item">Semua Kategori</a>
                    <?php 
                        $sqll = "SELECT * FROM kategori order by nama_kategori ASC";
                        $Qkategori = mysqli_query($conn, $sqll);
                        $kategori = mysqli_fetch_assoc($Qkategori);

                        do{
                     ?>
                    <a style="color: #f2d61e;
                             font-weight: 500;"
                    href="?filter=<?=$kategori['id_kategori'];?>" class="list-group-item"><?=$kategori['nama_kategori']?></a>
                    <?php 
                       }while ($kategori = mysqli_fetch_assoc($Qkategori));
                     ?>
                </div>

            </div>


            <div class="col-lg-9">
                <div class="col-lg-12 mt-3">
                    <form action="?s=" class="mt-5">
                        <div class="row">
                            <div class="col-md-9">
                               <div class="form-group">
                                  <input class="form-control" type="search" value="<?php if(isset($_GET['s'])) {echo $_GET['s'];} ?>" name="s" placeholder="Masukkan Keywoard">
                               </div>
                           </div>
                           <div class="col-md-3">
                               <div class="form-group">
                                  <input type="submit" class="btn btn-sm btn-info" value="Cari Item" > 
                        </div>
                    </div>
                </div>
                    </form>

                </div>
               <!--  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> -->

                <div class="row">

                    <?php 

                    if (mysqli_num_rows($result) > 0) {
                    do{

                     ?>
                    

                    <div class="col-lg-4 col-md-6 mb-4 mt-4">
                        <div class="card h-100">
                            <a href="tampil.php?id=<?=$data['id_akun'];?>" style="padding: 10px"><img class="card-img-top" src="<?=BASE_URL;?>assets/akun/<?= $data['gambar_akun'];?>"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                  <a style="color: #cf7609;" href="tampil.php?id=<?=$data['id_akun'];?>"><?=$data['nama_akun'];?></a>
                                </h4>
                                <h5>Rp. <?=number_format($data['harga_akun']);?></h5>
                                
                                <p class="card-text">Note : Akun Yang DI Jual Disini Bukan Milik Saya. Website ini hanya untuk latihan saja</p>
                            </div>
                            <div class="card-footer text-center btn-beli">
                                <a href="tampil.php?id=<?=$data['id_akun'];?>">Beli
                             </a>
                            </div>
                        </div>
                    </div>

                    <?php 
                }while ($data = mysqli_fetch_assoc($result));
            }else{
                echo "Tidak Ada Akun Ditampilkan";
            }
                     ?>
            </div>

        </div>
    </div>
  <?php require "includes/footer.php"; ?> 