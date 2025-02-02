<?php
// Nama file video (pastikan file video ada di direktori yang tepat)
$videoFile = '../asset/videodepan.mp4';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dengan Latar Belakang Video Redup</title>
    <!-- Link Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- Video Latar Belakang -->
    <video autoplay muted loop class="video-background">
        <source src="<?php echo $videoFile; ?>" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>

    <!-- Overlay untuk membuat video lebih redup -->
    <div class="video-overlay"></div>

    <!-- Konten Utama -->
    <div class="content" onclick="swipeLeft()">
        <h1>Selamat Datang</h1>
        <p>Ini adalah menu self order klik dimana saja untuk memulai</p>
    </div>

    <!-- Produk yang ditampilkan dalam barisan -->
    <div class="product-container" id="productContainer">
        <div class="product" onclick="showHvsDetail(this)">
            <h3>Cetak HVS</h3>
            <img src="../asset/hvss.svg" alt="Cetak HVS">
        </div>
        <div class="product" onclick="showPosterDetail(this)">
            <h3>Cetak Poster</h3>
            <img src="../asset/poster.svg" alt="Cetak Poster">
            </a>
        </div>
        <div class="product" onclick="showFotoDetail(this)">
            <h3>Cetak Pas Foto</h3>
            <img src="../asset/pasfoto.svg" alt="Cetak Foto">
        </div>
        <div class="product" onclick="showBrosurDetail(this)">
            <h3>Cetak Brosur</h3>
            <img src="../asset/brosur.svg" alt="Brosur">
        </div>
        <div class="product" onclick="showEmoneyDetail(this)">
            <h3>Print UV E-Money, Brizzi, Flash (Include Kartu)</h3>
            <img src="../asset/emoney.svg" alt="E-money">
        </div>
        <div class="product" onclick="showKaosDetail(this)">
            <h3>Cetak Kaos</h3>
            <img src="../asset/kaos.svg" alt="Cetak Kaos">
        </div>
        <div class="product" onclick="showJamDetail(this)">
            <h3>Custom Jam Dinding D30</h3>
                <img src="../asset/jam.svg" alt="Cetak HVS">
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
        <div class="product">
            <h3>Cetak HVS</h3>
            <a href="path-to-your-destination.html">
                <img src="../asset/hvs.png" alt="Cetak HVS">
            </a>
        </div>
    </div>
    <!-- MODAL HVS -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="HVSDetail" style="border-radius: 40px;">
        <div class="product-container">
            <div class="product">
                <h3>Hitam Putih A3 70/75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/hvs-7075-gsm-a3-hitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna A3 70/75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/hvs-7075-gsm-a3-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Hitam Putih A4 70 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-70-gsm-a4-bwhitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna A4 70 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-70-gsm-a4-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Hitam Putih A4 75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-75-gsm-a4-bwhitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna A4 75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-75-gsm-a4-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Hitam Putih F4 75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-75-gsm-f4-bwhitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna F4 75 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-75-gsm-f4-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Hitam Putih A4 80 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-80-gsm-a4-bwhitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna A4 80 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-80-gsm-f4-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Hitam Putih F4 80 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-80-gsm-f4-bwhitam-putih" class="product-link">
                    <img src="../asset/hvss.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Berwarna F4 80 gsm</h3>
                <a href="https://www.toedjoesinar.com/p/print-hvs-80-gsm-f4-full-color-warna" class="product-link">
                    <img src="../asset/hvswarna80.svg" alt="Cetak HVS">
                </a>
            </div>


        </div>
        <button class="close-detail" onclick="closeHvsDetail()">Tutup</button>
    </div>

    <!-- POSTER MODAL -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="PosterDetail">
        <div class="product-container">
            <div class="product">
                <h3>Poster A0</h3>
                <a href="https://www.toedjoesinar.com/p/poster-a0" class="product-link">
                    <img src="../asset/poster.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Poster A1</h3>
                <a href="https://www.toedjoesinar.com/p/poster-a1" class="product-link">
                    <img src="../asset/poster.svg" alt="Cetak HVS">
                </a>
            </div>
            <div class="product">
                <h3>Poster A2</h3>
                <a href="https://www.toedjoesinar.com/p/poster-a2" class="product-link">
                    <img src="../asset/poster.svg" alt="Cetak HVS">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closePosterDetail()">Tutup</button>
    </div>

    <!-- FOTO MODAL -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="FotoDetail">
        <div class="product-container">
            <div class="product">
                <h3>Cetak Pas Foto</h3>
                <a href="https://www.toedjoesinar.com/p/cetak-pas-photo" class="product-link">
                    <img src="../asset/pasfoto.svg" alt="Cetak Pas Foto">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeFotoDetail()">Tutup</button>
    </div>
    <!-- BROSUR MODAL -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="BrosurDetail">
        <div class="product-container">
            <div class="product">
                <h3>Brosur A4 120 gsm (per rim)</h3>
                <a href="https://www.toedjoesinar.com/p/brosur-flyer-a4-120-gram" class="product-link">
                    <img src="../asset/brosur.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Brosur A5 120 gsm (per rim)</h3>
                <a href="https://www.toedjoesinar.com/p/brosur-flyer-a5-120-gram" class="product-link">
                    <img src="../asset/brosur.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Brosur A6 120 gsm (per rim)</h3>
                <a href="https://www.toedjoesinar.com/p/brosur-flyer-a6-120-gram" class="product-link">
                    <img src="../asset/brosur.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeBrosurDetail()">Tutup</button>
    </div>
    <!-- E-MONEY MODAL -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="EmoneyDetail">
        <div class="product-container">
            <div class="product">
                <h3>Print UV E-Money, Brizzi, Flash (Include Kartu)</h3>
                <a href="https://www.toedjoesinar.com/p/print-uv-e-money-brizzi-flash-include-kartu"
                    class="product-link">
                    <img src="../asset/emoney.svg" alt="Cetak Emoney" style="width: 225px; height: 225px;">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeEmoneyDetail()">Tutup</button>
    </div>

     <!-- KAOS MODAL -->
     <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="KaosDetail">
        <div class="product-container">
            <div class="product">
                <h3>Kaos Polo ( S - XL ) Lengan Panjang</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-polo-s-xl-lengan-panjang" class="product-link">
                    <img src="../asset/polopanjang.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Polo ( S - XL ) Lengan Pendek</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-polo-s-xl-lengan-pendek" class="product-link">
                    <img src="../asset/polo.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Warna ( S - XL ) Lengan Panjang</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-warna-s-xl-lengan-panjang" class="product-link">
                    <img src="../asset/kaospanjang.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Warna ( S - XL ) Lengan Pendek</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-warna-s-xl-lengan-pendek" class="product-link">
                    <img src="../asset/kaos.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeKaosDetail()">Tutup</button>
    </div>

    <!-- KAOS MODAL -->
    <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="KaosDetail">
        <div class="product-container">
            <div class="product">
                <h3>Kaos Polo ( S - XL ) Lengan Panjang</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-polo-s-xl-lengan-panjang" class="product-link">
                    <img src="../asset/polopanjang.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Polo ( S - XL ) Lengan Pendek</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-polo-s-xl-lengan-pendek" class="product-link">
                    <img src="../asset/polo.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Warna ( S - XL ) Lengan Panjang</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-warna-s-xl-lengan-panjang" class="product-link">
                    <img src="../asset/kaospanjang.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
            <div class="product">
                <h3>Kaos Warna ( S - XL ) Lengan Pendek</h3>
                <a href="https://www.toedjoesinar.com/p/kaos-warna-s-xl-lengan-pendek" class="product-link">
                    <img src="../asset/kaos.svg" alt="Cetak Brosur" style="width: 225px; height: 225px;">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeKaosDetail()">Tutup</button>
    </div>

     <!-- JAM DINDING MODAL -->
     <div class="overlay" id="overlay"></div>
    <div class="product-detail" id="JamDetail">
        <div class="product-container">
            <div class="product">
                <h3>Jam Dinding D30</h3>
                <a href="https://www.toedjoesinar.com/p/jam-dinding-d30"
                    class="product-link">
                    <img src="../asset/jam.svg" alt="Cetak Jam Dinding" style="width: 225px; height: 225px;">
                </a>
            </div>
        </div>
        <button class="close-detail" onclick="closeJamDetail()">Tutup</button>
    </div>
    <!-- Overlay Modal -->
    <div id="overlay"
        style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 10;">
    </div>

    <!-- Order Modal Kontainer -->
    <div id="orderModal"
        style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 80%; max-width: 400px; background: white; padding: 20px; z-index: 11; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.2);">
        <h2>Informasi Pesanan</h2>
        <p>Ini adalah detail produk yang Anda pilih. Anda akan diarahkan ke halaman produk dalam beberapa detik.</p>
        <button onclick="closeOrderModal()">Tutup</button>
    </div>

    <!-- Modal untuk menampilkan pesan -->
    <div class="modal" id="productModal">
        <div class="modal-content">
            <h2>Selamat Datang di <i>Self Order</i></h2>
            <p>Pastikan file anda siap cetak, jika sudah silahkan klik lanjutkan</p>
            <button onclick="closeModal()">Lanjutkan</button>
        </div>
    </div>
</body>
<script src="../script.js"></script>

</html>