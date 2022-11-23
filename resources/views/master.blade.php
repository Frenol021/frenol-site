
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title> style</title>
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBXMwjPDPH3NY7aPjXWODllH86j4D84lU&callback=initMap" async></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBXMwjPDPH3NY7aPjXWODllH86j4D84lU&callback=initMap" async></script>

    @livewireStyles

</head>

<body>



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

        .carousel-item {
            max-height: 20%;
        }

        .carousel-caption {
            color: black;

        }

        .section-title {

            background-color: #ECF0F1;


        }


        .section-title p {

            margin-right: 100px;
            margin-left: 100px;
        }

        .section-title h4 {

            margin-right: 100px;
            margin-left: 100px;
        }

        .section-title .contan {
            color: #2E4053;
            display: flex;
            margin-left: 100px;
        }

        .servive {
            background-color: #F9F9F9;
        }
        .servive .servive-container{
        margin-left: 10px;
        margin-bottom: 100px;
        }

        .servive .servive-container h4{
        color: red;
        text-align: center;
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

        .servive {
            background-color: #F7ECDE;
            margin-top: 100px;        }
            .text-center {
                text-align: center;
            }

            #map {

                width: 100%;
                height: 400px;
            }
        .contact{
        margin-top: 100px;
        }
        .contact h3 {
            font-size: 250%;
            align-items: center;
            text-align: center;
            color: #141E61;
        }

        .contact h5 {

            align-items: center;
            text-align: center;
        }

        .contact_us{
            margin-left: 10px;
            display: grid;
            grid-template-columns: repeat(auto-fit ,minmax(10rem, 1fr));
            gap: 2rem;

        }

        .send{
            margin-top: 10px;
            text-align: center;
        }
        .contact_us .container{
            color: green;


        }
        .container .mapping{
            float: right;
        }
        .form-row .cont {
            background-color: #F7ECDE;
            margin-bottom: 20px
        }

        .service-container {
            display: inline-block !important;
            margin-left: 10px;
            min-height: 100px;

        }
        .header {

           display: flex;
           justify-content: flex-end;
           text-align: center;
          margin-right: 30px;
        }
        .header li {

           margin-left: 80px;
            justify-content:space-between;

        }
        .nav-tabs .nav-link1{
            text-decoration: none;
            position: absolute;
            z-index: 1;
            display: none;
            color: black;
        }
        .nav-tabs:hover .nav-link1 {
        display: flex;
        list-style-type: none;
        position: absolute;
        }
        .footer {

            background-color: #F7F7F7;
            margin-top:20px;
            background-image: url("storage/images/back.jpg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

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


        .footer-links{
                display: grid;
                grid-template-columns: repeat(auto-fit ,minmax(10rem, 1fr));
                gap: 3rem;
                margin-left: 20px;
        }
        .links h3{
        color: #161D6F;
        }

        .links h4{
        color: #161616;
        }
    </style>

    @livewireScripts


</body>

</html>
