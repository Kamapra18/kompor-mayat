<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <style>
        .h h1{
            margin-top: 30px;
            text-align: center;
            color: white;
        }

        .box{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 40px auto 30px;
            max-width: 1200px;
            padding: 20px;
        }

        h2, p{
            color: white;
        }

        .box-1{
            flex: 1;
            flex-direction: column;
            background-color: rgba(240, 240, 240, 0.386);
            margin-right: 40px;
            text-align: center;
            border-radius: 5px;
            padding-bottom: 20px;
            transition: 0.3s;
        }

        .box-1:hover{
            transform: scale(1.2);
            transition: 0.3s;
        }

        .box-2{
            flex: 1;
            flex-direction: column;
            background-color: rgba(240, 240, 240, 0.386);
            margin-right: 40px;
            text-align: center;
            border-radius: 5px;
            padding-bottom: 20px;
            transition: 0.3s;
        }

        .box-2:hover{
            transform: scale(1.2);
            transition: 0.3s;
        }

        .box-3{
            flex: 1;
            flex-direction: column;
            background-color: rgba(240, 240, 240, 0.386);
            margin-right: 40px;
            text-align: center;
            border-radius: 5px;
            padding-bottom: 20px;
            transition: 0.3s;
        }

        .box-3:hover{
            transform: scale(1.2);
            transition: 0.3s;
        }

        .box a{
            border-radius: 20px;
            padding: 10px 15px;
            background-color: #109010;
            text-decoration: none;
            color: #fff;
        }

        /* sloka */
        .box-box{
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(217, 217, 217, 0.25);
            border-radius: 10px;
            border-radius: 10px;
            margin: auto 35%;
            padding: 20px 20px;
        }


        .box-box p{
            line-height: 1.2em;
            letter-spacing: 1px;
            font-size: 1.2rem;
            color: white;
        }

        .box-box p{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include "layout/header.html" ?>
    <div class="h">
        <h1>
            Kompor Kremasi
        </h1>
    </div>
    <div class="box" data-aos="flip-right">
        <div class="box-1">
            <h2>
                Paket Standar
            </h2>
            <p>
                Harga : RP.350.000 <br>
                Jumlah : 1 Orang <br>
                Bahan bakar : Gas LPG <br>
                .
            </p>
            <a href="sewa.php">Sewa Sekarang</a>
        </div>
        <div class="box-2">
            <h2>
                Paket Medium
            </h2>
            <p>
                Harga : RP.6S50.000 <br>
                Jumlah : 2 Orang <br>
                Bahan bakar : Kompor Oven <br>
                .
            </p>
            <a href="sewa.php">Sewa Sekarang</a>
        </div>
        <div class="box-3">
            <h2>
                Paket Premium
            </h2>
            <p>
                Harga : RP.2.500.000 <br>
                Jumlah : 2 Orang <br>
                Bahan bakar : Kompor Oven <br>
                Tema : sesuai request customer
            </p>
            <a href="sewa.php">Sewa Sekarang</a>
        </div>
    </div>
    <div class="box-box">
        <p>
            "Na jāyate mriyate vā kadācin Nāyaḿ bhūtvā bhavitā vā na bhūyaḥ Ajo nityaḥ śāśvato ’yaḿ purāṇo Na hanyate hanyamāne śarīre."<br>
            <span>Bhagavad Gita (sloka 2.20)</span>
        </p>
    </div>
</body>
</html>