<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero{
            min-height: 100vh;
        }

        .hero h3{
            margin-top: 9%;
            font-size: 2em;
            color: white;
            text-align: center;
        }

        .hero .box{
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: auto 15%;
            padding: 30px 30px;
        }

        .hero .box h2{
            text-align: center;
            color: white;
            font-weight: 800;
        }

        .hero .box p{
            text-align: justify;
            line-height: 1.5em;
            letter-spacing: 1px;
            position: relative;
            font-size: 1.3rem;
            color: white;
        }

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #3b0a45, #4b0e5a);
            color: white;
        }

        .mean {
            min-height: 100vh;
            display: flex;
        }

        .mean .meaning {
            padding: 30px;
            display: flex;
            align-items: center;
        }

        .img-logo {
            border-radius: 10px;
            background-color: #f3d1c1;
            padding: 20px;
            margin-right: 10%;
            display: inline-block;
            transition: 0.3s;
        }

        .img-logo:hover {
            transition: 0.3s;
            transform: scale(1.1);
        }

        .img-logo img {
            width: 300px;
            height: 300px;
            display: block;
        }

        .box-2 {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 30px 40px;
            border-radius: 10px;
            width: 700px;
        }

        .box-2 h2 {
            font-family: 'Great Vibes', cursive;
            font-size: 36px;
            color: #fff;
            margin-bottom: 20px;
            text-align: center;
        }

        .box-2 p {
            text-align: justify;
            letter-spacing: 2px;
            line-height: 1.9;
            font-weight: 500;
            color: #fff;
            z-index: 1;
        }

        .right {
            text-align: right;
            margin-top: 20px;
            font-style: italic;
        }

        .team{
            min-height: 90vh;
            margin-top: 5%;
        }

        .team h1{
            font-size: 40px;
            text-align: center;
        }

        .container-con {
            display: flex;
            flex-wrap: wrap; 
            justify-content: center; 
            align-items: flex-start; 
            margin: 20px auto;
            max-width: 1100px;
            gap: 20px; 
            padding: 10px;
        }

        .container-con > div {
            flex: 0 1 calc(28% - 15px); /* Membagi 3 elemen di satu baris dengan jarak */
            box-sizing: border-box; 
            background-color: rgba(240, 240, 240, 0.386);
            text-align: center; 
            padding: 10px;
            margin: 0;
            border-radius: 15%;
        }

        .container-con > div:nth-child(4),
        .container-con > div:nth-child(5) {
            flex: 0 1 calc(28% - 15px);
        }

        .container-con img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 10px auto;
            display: block;
            transition: 0.3s;
        }

        .container-con img:hover{
            transform: scale(1.3);
            transition: 0.3s;
        }

        .container-con h2{
            font-size: 1rem;
            color: #f0f0f0;
            font-weight: 600;
        }
        .container-con a{
            text-decoration: none;
            color: #fff;
        }

        .container-con a:hover{
            background-color: #4B4376;
            border-radius: 15px;
            padding: 10px;
            transition: 0.3s;
            color: #F5D4BB;
        }

        .container-con p{
            font-size: 0.8rem;
        }

    </style>
</head>
<body>
    <?php include "layout/header.html" ?>
    <section id="about" class="hero">
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
        </div>
    </section>

    <section id="mean" class="mean">
        <main class="meaning">
            <div class="img-logo" data-aos="zoom-in" data-aos-duration="1000">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="box-2" data-aos="fade-up" data-aos-duration="1000">
                <h2>
                    "The Meaning"
                </h2>
                <p>
                    Om Swastyastu, Kami dari Yandnya Kremasi.com
                    memiliki sebuah logo yang kami ciptakan dari segala
                    perjuangan kami selama ini membantu para semeton 
                    dalam segala kegiatan pitra yadnya, dimana logo kami
                    memiliki unsur Bade “tempat mengusung jenasah”
                    dimana ini sangat erat kaitannya dengan upacara pitra 
                    yadnya di Bali.
                </p>
                <p class="right">
                    Hormat Saya <br>
                    <br>
                    I Made Wisnu Pradnya Yoga
                </p>
            </div>
        </main>
    </section>

    <section id="team" class="team">
            <h1>
                EMPLOYE
            </h1>
        <div class="container-con">
            <div class="tak-1" data-aos="zoom-in" data-aos-duration="1000">
                <h2>
                    OWNER
                </h2>
                <img src="img/wisnu (2).jpeg" alt="wisnu">
                <h2>
                    I Made Wisnu Pradnya Yoga
                </h2>
                <a href="https://www.instagram.com/mdwisnuu_/"><i class="fa-brands fa-instagram"></i> : mdwisnuu_</a>
                <p>hidup ini tidak adil, tetapi itulah takdir</p>
            </div>
            <div class="tak-2" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <h2>
                    ANGGOTA
                </h2>
                <img src="img/3.png" alt="wisnu">
                <h2>
                    I Kadek Riyasa
                </h2>
                <a href="https://www.instagram.com/riyasa_fl/"><i class="fa-brands fa-instagram"></i> : riyasa_fl</a>
                <p>berani bermimpi berani beraksi</p>
            </div>
            <div class="tak-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <h2>
                    ANGGOTA
                </h2>
                <img src="img/1.png" alt="wisnu">
                <h2>
                    I Nyoman Wira Kusuma
                </h2>
                <a href="https://www.instagram.com/komangj_01/"><i class="fa-brands fa-instagram"></i> : komangj_01</a>
                <p>jangan semangat tetap menyerah</p>
            </div>
            <div class="tak-4" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                <h2>
                    ANGGOTA
                </h2>
                <img src="img/4.png" alt="wisnu">
                <h2>
                    I Kadek Mario Prayoga <br> -
                </h2>
                <a href="https://www.instagram.com/04_kmario/"><i class="fa-brands fa-instagram"></i> : 04_kmario</a>
                <p>bumi adalah tanah, maka juallah</p>
            </div>
            <div class="tak-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                <h2>
                    ANGGOTA
                </h2>
                <img src="img/2.png" alt="wisnu">
                <h2>
                    I Putu Ananta Dwija Kumara Prasetya Anjasmara
                </h2>
                <a href="https://www.instagram.com/anantanjasmaraa/"><i class="fa-brands fa-instagram"></i> : anantanjasmaraa</a>
                <p>hidup itu mengalir, jadi ikutin alurnya</p>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>