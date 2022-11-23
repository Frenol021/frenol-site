@extends('master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> shoppers</title>
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBXMwjPDPH3NY7aPjXWODllH86j4D84lU&callback=initMap"
        async></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBXMwjPDPH3NY7aPjXWODllH86j4D84lU&callback=initMap"
        async></script>

    @livewireStyles

</head>

<body>
    <livewire:inc.header />
     @livewire('layouts.home')
    @livewire('shop.product')

    @livewireScripts
    <style>
        .container {
            margin-top: 20px;
            align-items: flex-start;
        }
        .container .navbar-brand{

        }
        ul {
            display: flex;
            list-style-type: none;

        }

        .form-inline {

            display: flex;
        }

        .form-inline .btn {

            margin-left: 10px;
        }
        .products-list{
            background-color: red;
            display: none;
        }
        .navs:hover .products-list{
            display: absolute;
        }
        .landing{
            text-align: center;
            justify-content: center;
            background-fit: cover;
         

        }
        .landing .mySlides{
        background-position: center;
        margin-left:  10rem;
        margin-right:  10rem;
        border-radius: 50px;

        }
        .content{

            text-align: center;
            justify-content: center;
            display: inline-block;
            align-items: center;
            border-radius: 30px;


        }
    </style>
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 9000);
}

</script>
</body>

</html>
