<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .content {
            text-align: center;
            padding: 2rem;
        }
        .content h2 {
            margin-top: 5%;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #f0f0f0;
        }

        .contact {
            display: flex;
            justify-content: space-around;
            margin: 2rem 0;
            padding: 2rem;
            border-radius: 8px;
        }

        .owner, .rules {
            width: 40%;
            padding: 20px;
            border-radius: 30px;
            background-color: rgba(240, 240, 240, 0.386);
        }

        .owner h3{
            letter-spacing: 10px;
            font-size: 1.4rem;
            color: #f0f0f0;
            font-weight: 600;
        }

        .owner img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }

        .owner p, .rules p, .rules ol {
            margin: 0.5rem 0;
        }

        .owner a{
            line-height: 1.6rem;
            color: #000;
            display: block;
            text-decoration: none;
        }

        .owner a:hover{
            transform: scaleX(1.1);
        }

        .rules p{
            line-height: 1.6rem;
            margin-left: 20px;
            text-align: left;
        }

    </style>
</head>
<body>
    <?php include "layout/header.html" ?>

    <main class="content">
        <h2>Om Swastyastu</h2>
        <section class="contact">
            <div class="owner">
                <h3>OWNER</h3>
                <img src="img/wisnu.jpeg" alt="img">
                <p>Nama: I Made Wisnu Pradnya Yoga</p>
                <a href="https://maps.app.goo.gl/QQtmbvu7n9z9uiD37" target="blank"><i class="fa-solid fa-location-dot"></i>: Br. Angkeb Canging Gulingan, Mengwi, Badung</a>
                <a href="https://web.whatsapp.com/081547473104" target="blank" class="wa-link"><i class="fa-brands fa-whatsapp"></i> : 081547473104</a>
                <a href="mailto:wisnupradnya16@gmail.com?subject=Ini%20adalah%20judul%20email%20default" class="mail-link"><i class="fa-regular fa-envelope"></i> : wisnupradnya16@gmail.com</a>
            </div>
            
            <div class="rules">
                <h3>Peraturan Penyewaan</h3>
                    <p>1. Pelanggan wajib konfirmasi H-7</li>
                    <p>2. Pelanggan harap membayar setengah dari harga terlebih dahulu</li>
                    <p>3. Pelanggan tidak bisa melakukan cancel jika sudah H-1</li>
                    <p>4. Sesi untuk kompor mati di tempat ditanggung penyewa</li>
                    <p>5. Jika lebih dari jam yang tertera di paket akan dikenakan biaya tambahan</li>

                <p>Mengenai info lebih lanjut hubungi WA yang tertera</p>
            </div>
        </section>
        
    </main>

    <script>
            feather.replace();
        </script>
</body>
</html>