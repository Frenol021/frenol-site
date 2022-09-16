<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>...</title>
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    @livewireStyles
</head>

<body>

    <section class="footer" style="clear:both">


        <div class="credit"><b>frenol <span>Site</b></span></div>
        <div class="footer-links">
        quik links
        <h4>About us</h4>
        <h4>shop us</h4>
        <h4>Copyright</h3>
        </div>

    </section>

    <style>
        .about-section .images {
            text-align: center;

            display: flex;
            float: right;
            justify-content: center;
            align-items: center;
            background-size: cover !important;
            background-position: center !important;

        }

        .about-header {
            background-image: url("storage/images/pic6.jpg");
            padding-bottom: 20px;
            color: white;
            text-align: center;
            margin-bottom: 20px;

        }

        .about-header h2 {
            background-colour: red;
        }

        .box-container {
            margin: 20px;
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .box-container .images {
          
            margin-right: 0px;
            margin-top: 0px;
            overflow-x: hidden;
        }

        .footer {

            background-color: #A9CCE3;

        }

        .carousel-item {
            max-height: 20%;
        }

        .carousel-caption {
            color: black;

        }

         .section-title {

   background-color: #ECF0F1 ;

  
  
         }


         .section-title p{
          
        margin-right: 100px;
        margin-left: 100px;
         }
        
        .section-title h4{
     
        margin-right: 100px;
        margin-left: 100px;
         }
 .section-title .contan{
color: #2E4053;
display: flex;
margin-left: 100px;
 }

 .servive{
background-color: #F9F9F9;
 }
        .section-title .images {
            text-align: center;

            display: flex;
            float: left;
            justify-content: center;
            align-items: center;
            background-size: cover !important;
            background-position: center !important;
        }

        .footer .credit {
            text-align: center;
            padding-top: 5px;
            margin-top: 5px;
            border-top: 1px solid black;
            color: black;
            font-size: 200%;

        }

        .home {
            padding: 0;
        }

        .home .swiper-slide {
            text-align: center;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover !important;
            background-position: center !important;
            min-height: 500px;

        }

        .home .swiper-slide .content {
            width: 500px;
            display: inline-block;

        }

        .home .swiper-slide .content span {
            color: rgb(194, 20, 20);
            font-size: 100%;
            padding-bottom: 50px;
            animation: fadeIn .4s linear backwards .2s;
        }

        .home .swiper-slide-active .content {
            display: inline-block;
        }

        .home .swiper-slide .content h3 {
            color: orange;
            font-size: 300%;
            text-transform: uppercase;
            line-height: 1;
            text-shadow: 5px;
            animation: fadeIn .4s linear backwards .4s;
        }

        .home .swiper-slide .content .btn {
            animation: fadeIn .4s linear backwards .6s;
        }

        .home .swiper-button-next,
        .home .swiper-button-prev {
            top: inherit;
            left: inherit;
            bottom: 0;
            right: 0;
            background: white;
            color: black;
            height: 30px;
            width: 50px;
        }

        .home .swiper-button-next:hover,
        .home .swiper-button-prev:hover {
            background: red;
        }

        .home .swiper-button-next::after,
        .home .swiper-button-prev::after {
            font-size: 100%
        }

        .home .swiper-button-prev {
            right: inherit;

        }
    </style>

    @livewireScripts
</body>

</html>
