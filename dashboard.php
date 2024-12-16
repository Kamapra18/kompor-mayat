<?php
    session_start();
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        // Set pesan logout
        $message = urlencode("Anda telah berhasil logout.");
        header("location: index.php?message=$message");
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YADNYA KREMASI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hero{
            margin-top: 50px;
            display: flex;
            min-height: 100vh;
        }
        .hero .konten{
            padding: 1.8rem 8%;
            max-width: 40rem;
        }

        .hero .konten h1{
            font-size: 3.3em;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            line-height: 1.2;   
        }

        .hero .konten h1 span{
            color: #e3c4ae;
        }

        .hero .konten p{
            text-align: justify;
            font-size: 1.4rem;
            color: #fff;
            line-height: 1.4;
            font-weight: 100;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
        }

        .hero .konten a{
            margin-left: 30%;
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: 9px;
            box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }

        .hero .konten a:hover{
            background-color: #e3c4ae;
            transition: 0.3s;
            transform: scale(1.1);
        }

        .img-logo{
            margin-top: 5%;
            border-radius: 5px;
            width: 350px;
            height: 400px;
            background-color: #e3c4ae;
            display: inline-block;

        }

        .img-logo img{
            width: 350px;
            height: 400px;
            display: block;
        }

        .about{
            min-height: 90vh;
            padding: 5px;
        }

        .about h3{
            font-size: 2em;
            color: white;
            text-align: center;
        }

        .about .box{
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: auto 15%;
            padding: 30px 30px;
        }

        .about .box h2{
            text-align: center;
            color: white;
            font-weight: 800;
        }

        .about .box p{
            line-height: 1.5em;
            letter-spacing: 1px;
            position: relative;
            font-size: 1.3rem;
            color: white;
        }

        .about .box a{
            margin-left: 42%;
            border-radius: 20px;
            padding: 10px 15px;
            background-color: #109010;
            text-decoration: none;
            color: #fff;
        }
        .about .box a:hover{
            background-color: #076107;
        }

        .kontak{
            min-height: 90vh;
            padding: 5px;
        }

        .kontak .contak{
            margin-top: 11%;
            width: 80%;
            height: 350px;
            flex-wrap: wrap;
            display: flex;
            padding: 10px;
            margin-left: 8%;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0px 0px 10px 0px #666;
        }

        .kontak-map{
            width: 100%;
            height: auto;
            flex: 50%;
        }

        .kontak-map iframe{
            width: 100%;
            height: 100%;
            transition: 0.3s;
        }

        .kontak-map iframe:hover{
            transform: scale(1.1);
            transition: 0.3s;
        }

        .kontak-form{
            width: 100%;
            height: auto;
            flex: 50%;
        }

        .kontak-form h1{
            text-align: center;
            margin-bottom: 20px;
        }

        .kontak-form img {
            margin-left: 40%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
            transition: 0.3s;
        }

        .kontak-form img:hover{
            transform: scale(1.5);
            transition: 0.3s;
        }

        .kontak-form a{
            text-decoration: none;
            color: white;
            display: flex;
            padding: 20px;
            margin-left: 30%;
        }
        button{
            margin-left: 43%;
            background-color: red;
            color: #fff;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<header>
    <?php include "layout/header.html" ?>
</header>

    <!-- Hero section start -->
    <section id="home" class="hero">
        <main class="konten">
            <h1>
                Ajal Anda Sudah Dekat? Tapi<span> Belum Nemu yang Tepat?</span>
            </h1>
            <p>
                Tenang, ada kami Yadnya Kremasi yang akan menghiasi akhir hidup Anda. Jadi, <span>tunggu apalagi?</span>  segera order sekarang
            </p>
            <a href="layanan.php">Order Now</a>
        </main>
        <div class="img-logo">
            <img src="img/logo.png" alt="log">
        </div>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section id="about" class="about">
    <h3>
            About Us
        </h3>
        <div class="box">
            <h2>
                "Menyala untuk Kehidupan, Bermakna untuk Perpisahan"
            </h2>
            <p>
                Start up kami menghadirkan solusi modern untuk tradisi sakral dengan teknologi ramah lingkungan dan efisiensi tinggi. Kami mendukung proses kremasi yang menghormati budaya, memperhatikan kenyaman keluarga, dan menjaga kelestarian budaya bali agar tetap lestari 
            </p>
            <a href="about.php">selengkapnya</a>
        </div>
    </section>
    <!-- about section end -->

    <!-- contaact section start -->
    <section id="kontak" class="kontak">
        <div class="contak">
            <div class="kontak-map">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1733285980053!6m8!1m7!1sImrEA1UsDB0Q_QvhhzRZSw!2m2!1d-8.542102742780521!2d115.1753803378739!3f234.49378273654133!4f-15.463715307556356!5f1.1196342080933823" width="100" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="kontak-form">
                <h1>Contact Us</h1>
                <img src="img/wisnu.jpeg" alt="img">

                <a href="https://web.whatsapp.com/081394355698" target="blank" class="wa-link"><i class="fa-brands fa-whatsapp"></i>  : 081-394-355-698</a>
                <a href="mailto:wisnupradnya16@gmail.com?subject=Ini%20adalah%20judul%20email%20default" class="mail-link"><i class="fa-regular fa-envelope"></i>  : wisnupradnya16@gmail.com</a>

                <form action="dashboard.php" method="POST" onsubmit="return confirmLogout();">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </section>

    <script>
    function confirmLogout() {
        return confirm("Apakah Anda yakin ingin logout?");
    }
</script>

</body>
</html>