<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: aliceblue;
        }

        a:hover {
            color: yellow;
        }

        .footer {
            background-color: rgb(94, 93, 93);
            padding-top: 17px;
            padding-left: 7%;
            padding-right: 7%;
            color: aliceblue;
        }

        .col-10,
        .col-2 {
            background-color: black;
            color: aliceblue;

        }

        .col-8 {
            color: aliceblue;
            padding-bottom: 13px;
        }

        .follow img {
            width: 2em;
            padding-bottom: 4%;
        }

        .hr {
            border: 1px solid rgb(85, 84, 84);
            width: 90%;
            margin: 1em;
        }

        .quik-link li {
            list-style-type: none;
            padding-bottom: 7%;

        }

        h4 {
            padding-bottom: 5%;
        }

        .quik-link li a {
            text-decoration: none;
            color: aliceblue;
        }

        .quik-link li a:hover {
            color: yellow;
        }

        .contact img {
            width: 10%;
            margin-bottom: 2%;

        }

        .logo p {
            margin-left: 20%;
            margin-right: 20%;
        }
    </style>
</head>

<body>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <img src="img/logo.png" alt="">
                        <a href="">
                            <p>PET CARE</p>
                        </a>

                    </div>
                </div>
                <div class="col">
                    <div class="contact">
                        <h4>Contact Info</h4>
                        <p>123/45 ถนนตะวันใหม่ ตำบลในเมือง <br>
                            อำเภอเมือง จังหวัดขอนแก่น 40000</p>
                        <img src="img/tel.png" alt=""> 091-234-5678 <br>
                        <img src="img/email.png" alt=""> petcare@gmail.com<br>
                        <img src="img/clock.png" alt=""> Open 08.30-20.00
                    </div>
                </div>
                <div class="col">
                    <div class="quik-link">
                        <h4>Quik link</h4>
                        <li><a href="#">ข่าวสาร</a></li>
                        <li><a href="#">บริการต่างๆ</a></li>
                        <li><a href="#">สินค้าทั้งหมด</a></li>
                    </div>
                </div>
                <div class="col">
                    <div class="follow">
                        <h4>Follow us</h4>
                        <a href=""> <img src="img/facebook.png" alt=""> Pet Care</a> <br>
                        <a href=""><img src="img/instagram.png" alt=""> Pet Care</a> <br>
                        <a href=""><img src="img/line.png" alt=""> @petcare</a>

                    </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="row">
                <div class="col-8">&copy; Copyright 2022 www.petcare.com</div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>
</body>

</html>