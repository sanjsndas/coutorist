<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&display=swap" rel="stylesheet">
        <title>Coutoristpar : Request accepted!</title>
        <meta property="og:title" content="Coutoristpar : Request accepted!" />
        <meta property="og:image" content="icon.png"/>
        
        <meta property="og:description" content="Coutoristpar : Request accepted!">
        <meta name="description" content="Coutoristpar : Request accepted!">
        <meta name="twitter:title" content="Coutoristpar : Request accepted!">
        <meta name="twitter:image" content="icon.png"/>
        

        <script src="widgets/js/jquery-3.7.1.min.js"></script>
        <script src="widgets/js/bootstrap.js"></script>
        <script src="widgets/js/slick.js"></script>
        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
        <link rel="stylesheet" href="widgets/style/icons.css">
        <link rel="stylesheet" href="widgets/style/bootstrap.min.css" >
        <link rel="stylesheet" href="widgets/style/slick.css">
        <link rel="stylesheet" href="widgets/style/slick-theme.css">
        

        <style>

            body{
                direction: ltr;
                font-family: 'Asap Condensed', sans-serif !important;
                font-size: 16px;
                margin: 0;
                padding: 0;
            }
            a {
                text-decoration: none;
            }
            i {
              color: gold;
            }

            .floating-windows-promo__popuprs { z-index: 99  !important; }

            .main-block-head {
              width: 100%;
              overflow-x: hidden;
              height: auto;
              padding: 0;
            }

            .cont {
              display: flex;
              justify-content: space-around;
              flex-wrap: wrap;
              height: auto;
              margin: 0 auto;
            }

            .mail, .adres, .tel {
              padding: 1%;
              width: auto;
              height: 100%;
              font-size: 16px;
            }

            .cont 


            .logo-and-menu {
              position: relative;
              display: flex;
              flex-direction: row;
              justify-content: space-between;
              flex-wrap: wrap;
              height: auto;
              margin: 0 auto;
              padding: 10px 0;
            }

            .logo-and-name {
              height: 100%;
              width: auto;
              padding: 0;
            }

            .logo {
              display: flex;
              justify-content: end;
              padding: 0;
              width: 50%;
              height: 100%;
            }

            .img-logo {
             width: 100%;
             object-fit: contain;
              height: 50px;
            }

            .name {
              width: auto;
              height: 100%;
              margin: auto 0;
              font-size: 20px;
            }

            .menu {
              position: relative;
              height: 100%;
              width: auto;
              margin: auto 5%;
            }

            .main-menu-list {
              text-align: center;
              display: flex;
            }

            .nav-li {
              display: block;
              margin: auto 0;
              padding: 18px;
              list-style: none;
            }

            a {
              color: #000;
              text-decoration: none;
            }

            
            .burger-menu {
              display: none;
              width: 35px;
              height: 22px;
            }

            .line {
              display: block;
              width: 100%;
              height: 6px;
              margin-bottom: 3px;
              background-color: #000;
              border-bottom: 1px solid #333;

            }

            #menu2 {
              display: none;
              position: absolute;
              top: 0;
              left: 0;
              z-index: 100;
              background-color: #f8f8f8;
            }


            .nav-li1 {
              padding: 18px;
              list-style: none;
              border-bottom: 1px solid #333;
            }


            .slider1 {
              position: relative;
              width: 100%;
              height: 100%;
              margin: 0;
            }

            .slide {
              padding-left: 0;
              padding-right: 0;
            }

            .carousel-item {
              background-color: black;
            }

            .darkened-image {
              object-fit: cover;
              height: 80vh;
              opacity: 0.4;
            }

            .cont-in-slider {
              display: flex;
              position: absolute;
              left: 20%;
              height: 100%;
              width: 60%;
              z-index: 10;
            }

            .block1 {
             max-height: 90%;
              width: 100%;
              margin: auto;
              padding: 50px 0;
            }

            h1 {
              color: white;
              text-align: center;
              font-size: 24px;
            }

            h3 {
              color: white;
              text-align: center;
              font-size: 20px;
            }

            .btn1 {
              width: auto;
              margin: 2% auto;
              padding: 2% 3em;
              font-size: 12px;
              text-transform: uppercase;
              letter-spacing: 2.5px;
              font-weight:  700;
              color: #000;
              background-color:#4a47a3;
              border: none;
              border-radius: 45px;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease 0s;
              cursor: pointer;
              outline: none;
            }
            
            .btn1 p {
              margin-bottom: 0rem;
            }

            .btn1:hover {
              background-color: #17B794;
              box-shadow: 0px 15px 20px;
              color: #fff;
              transform: translateY(-7px);
            }

            .btn1:active {
              transform: translateY(-1px);
            }

            .main-cont {
              width: 100%;
              overflow-x: hidden;
              height: auto;
              padding: 0;
              margin-top: 2%;
            }

            .services, .statistics-section {
              display: flex;
              justify-content: space-around;
              flex-wrap: wrap;
              width: 100%;
              height: auto;
              margin: 50px auto;
            }

            .blok2 {
              position: relative;
              width: 300px;
              height: auto;
              border-radius: 10px;
              margin-top: 38px;
              background-color: #f5f5f5;
              box-shadow: 0 0 1px #cccccc;
              padding: 26px
            }

            .icon {
              position: relative;
              z-index: 5;
            }

            .icon svg {
              width: 35%;
              height: 20%;
              display: block;
              margin: 15px auto;

            }


            .services-title, .services-subtitle {
              position: relative;
              z-index: 5;
              text-align: center;
              padding-bottom: 15px;
              transition: 0.5s;
            }

            h2 {
              font-weight: 800;
            }

            .bg-color {
              position: absolute;
              bottom: 0;
              left: 0;
              width: 100%;
              height: 0%;
              z-index: 2;
              border-radius: 10px;
              background-color: #4a47a3;
              transition: 0.5s;
            }

            .blok2:hover .bg-color {
              height: 100%;
              transition: 0.5s;
            }

            .blok2:hover .services-title {
              color: white;
              transition: 0.5s;
            }

            .blok2:hover .services-subtitle {
              color: white;
              transition: 0.5s;
            }


            



            .main-section {
              display: flex;
              flex-direction: row;
              flex-wrap: wrap;
              width: 80%;
              height: auto;
              margin: 100px auto;
              border-radius: 10px;
            }

            .img-sect {
              display: grid;
              place-items: center;
              width: auto;
              margin: 0 auto;
              
            }

            .img-sect img {
              width: 100%;
              max-width: 600px;
              display: block;
              margin: 0 auto;
            }


            .info-sect {
              width: 600px;
              margin: 26px auto;
            }

            .titl-sect {
              width: 100%;
              height: auto;
              padding-bottom: 23px;
            }
            
            .titl-sect h3 {
              color: #000;
              font-size: 44px;
              
            }

            .text-sect {
              width: 100%;
              height: auto;
              padding-bottom: 23px;
              color: #666;
            }

            .price {
              width: 100%;
              height: auto;
              text-align: center;
              font-size: 26px;
            }


            
            
            .statistics-section {
              justify-content: space-between;
              margin-bottom: 50px;
            }

            .stats-title {
              width: 100%;
              margin: 0 auto;
              height: auto;
              
            }

            .stats-title h3 {
              color: #000;
              text-align: center;
              font-size: 44px;
              
            }

            .stats-subtitle {
              width: 100%;
              margin: 18px auto;
              height: auto;
              text-align: center;
            }

            .blok3 {
              width: 250px;
              height: auto;
              margin-top:23px;
              padding: 38px 0;
              border-radius: 10px;
              background-color: #f5f5f5;
              box-shadow: 0 0 1px #cccccc;
            }

            .stats-numb {
              text-align: center;
              color: #000;
              font-weight: 800;
              color: #4a47a3;
              font-size: 44px;
            }

            .stats-info {
              text-align: center;
              color: #666;
              padding: 6px;
              font-size: #257A3E;
            }


            .slider2 {
              height: auto;
              width: 100%;
              margin: 100px auto;
              background-color: #4a47a3;
            }

            .content {
              margin: auto;
              padding: 50px 26px 0 !important;
              width: 100%;
              max-width: 1300px !important;
              box-sizing: border-box;
            }

            .slick-dots {
              display: none !important;
            }

            .slider-block1 {
              display: flex !important;
              width: auto !important;
              padding: 0 128px !important;
            }

            .slider-block1 img {
              height: 60px;
              display: block;
              margin: auto 0 !important;
            }


            .teams-section {
              justify-content: space-between;
              margin: 100px auto;
            }

            .stats-title {
              text-align: center;
              font-weight: 800;
            }

            .blok4 {
              width: 250px;
              height: auto;
              margin-top: 23px;
              padding: 0;
              border-radius: 10px;
              background-color: #f5f5f5;
              box-shadow: 0 0 1px #cccccc;
              overflow: hidden;
              display: flex;
              align-items: center;
              flex-direction: column;
              gap: 18px;
            }


            .blok4 img {
              height: 270px;
              object-fit: cover;
              width: 100%;
              transition: transform 0.5s;
            }

            .blok4:hover img {
              transform: scale(1.1);
            }

            .blok4 h4 {
              font-weight: 800;
            }

           
            .slider3 {
              width: 100%;
              margin: 100px auto;
              border-radius: 10px;
              background-color: #ffffff;
            }

            .slider3 h2 {
              padding-top: 26px;
              text-align: center;
            }

            .content1 {
              margin: auto;
              padding: 26px;
              width: 100%;
              max-width: 1500px;
              box-sizing: border-box;
            }

            .rating {
              text-align: center;
              padding: 18px 0 15px;
            }
            
            .comm {
              text-align: center;
              color: #000;
              font-style: italic;
              padding: 0 23px;
            }

            .slider-block2 img {
              width: 30%;
              border-radius: 50px;
              display: block;
              margin: 23px auto;
            }

            .name-review {
              text-align: center;
              font-weight: 800;
              font-size: 20px;
            }

            .name-review-2 {
              text-align: center;
              padding: 0 23px;
            }

          .paddingRand {
            word-break: break-all;
            padding: 120px 0px;
          }
            .map {
              margin-top: 38px;
            }

            .form {
              width: 100%;
              margin: 38px 0 150px 0;
            }

            .block-form {
              width: 70%;
              margin: 0 auto;
              padding: 6px 18px;
            }

            .titl-form {
              text-align: center;
              padding: 18px;
            }

            .input-user--component--block {
              border-radius: 20px; 
              border: 0.5px solid #bbb;
              margin-bottom: 18px !important; 
              padding: 6px 18px; 
            }

            .textarea-user--component--block {
              min-height: 150px;
              border-radius: 20px; 
              border: 0.5px solid #bbb;
              padding: 6px 18px;
            }

            .form-check {
              display: flex;
              justify-content: center;
              padding: 16px;
            }
            
            .form-check label {
              display: block;
              text-align: center;
              padding: 0 15px;
            }

            #check-inp {
              width: auto;
              margin: 0;
            }

            .block-form input, textarea {
              margin: 0 auto;
              width: 100%;
            }

            .inp-btn {
              display: block;
              width: auto;
              margin: 0 auto;
              padding: 1.3em 3em;
              font-size: 12px;
              text-transform: uppercase;
              letter-spacing: 2.5px;
              font-weight:  700;
              color: #ffffff;
              background-color:#000;
              border: none;
              border-radius: 45px;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease 0s;
              cursor: pointer;
              outline: none;
            }

            .inp-btn:hover {
              background-color: #17B794;
              color: #fff;
              transform: translateY(-7px);
            }

            .inp-btn:active {
              transform: translateY(-1px);
            }




            
            .foot {
              width: 100%;
              overflow-x: hidden;
              height: auto;
              margin: 0 auto;
              padding: 0 50px 23px;
              color: white;
              background-color: #080101;
            }

            .foot-1 {
              overflow-x: hidden;
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
              height: auto;
              margin: 0 auto;
              padding: 0 50px 23px;
              background-color: #080101;
            }
              

            .foot-logo-and-name {
              display: flex;
              justify-content: start;
              padding: 26px 0;
            }

            .foot-logo-and-name .logo {
              width: 20%;
            }

            .foot-logo-and-name .logo img {
              width: 100%;
            }

            .foot-logo {
              display: flex;
              flex-wrap: wrap;
              width: 400px;
              height: auto;
            }
            
            .foot-logo-and-name .name{
              display: block;
              margin: auto 115px;
              height: auto;
            }

            .foot-logo-and-name .name p{
              margin-bottom: 0;
            }

            .foot-menu {
              width:150px;
              height: auto;
              padding-top: 26px;
            }


            .foot-menu .main-menu-list {
              display: block;
              text-align: left;
            }

            .foot-menu .main-menu-list .nav-li {
              padding: 18px 0;
            }

            .foot-menu .main-menu-list a {
              color: white;
            }

            .newsletter {
              width: 400px;
              height: 100%;
              padding-bottom: 26px;
              padding-top: 26px;
            }

            .newsletter h4 {
              padding: 0 0 23px;
            }

            .newsletter .input-user--component--block {
              width: 100%;
            }

            .btn-foot {
              margin-top: 6px;
              padding: 1.3em 3em;
              font-size: 12px;
              text-transform: uppercase;
              letter-spacing: 2.5px;
              font-weight:  700;
              color: #000;
              background-color: #fff;
              border: none;
              border-radius: 45px;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease 0s;
              cursor: pointer;
              outline: none;
            }

            .btn-foot:hover {
              background-color:  #4a47a3;
              color: #fff;
              transform: translateY(-7px);
            }

            .btn-foot:active {
              transform: translateY(-1px);
            }

            .privacy-foot {
              border-top: 1px solid;
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
              padding: 26px 0 18px;
            }

            .privacy-foot a {
              color: #ccc;
            }


            .galleri {
              height: 70%;
            }
            .galleri img {
              height: 500px;
              object-fit: cover;
            }
            .map-and-form {
              display: flex;
              flex-direction: column;
            }
            @media (min-width: 1200px) and (max-width: 1300px) {
              body{
                overflow-x: hidden;
              }
              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }

              .logo {
                width: 30%;
              }

             

              .menu {
                margin: auto 2%;
              }

              .block1 {
                padding: 30px 0;
              }
              .darkened-image {
                height: 100vh;
              }

              .blok2 {
                width: 599px;
              }

              .blok3 {
                width: 220px;
              }

              .content {
                padding: 26px 26px 6px !important;
              }

              .slider-block1 {
                padding: 0 111px !important;
              }

              .blok4 {
                width: 250px;
              }

              .content1 {
                max-width: 900px;
              }


            }

            @media (min-width: 992px) and (max-width: 1199px) {
              .foot-1 {
                flex-direction: column !important;
              }

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }
              
              .logo {
                width: 40%;
              }

              .logo {
                width: 30%;
              }

              
              .menu {
                margin: auto 1%;
              }

              .nav-li {
                padding: 10px;
              }

              .block1 {
                padding: 20px 0;
              }

              h1 {
                font-size: 24px;
              }

              h3 {
                font-size: 20px;
              }

              .blok2 {
                width: 599px;
              }

              .blok3 {
                width: 180px;
              }

              .content {
                padding: 26px 26px 6px !important;
              }

              .slider-block1 {
                padding: 0 77px !important;
              }

              .blok4 {
                width: 210px;
              }

              .content1 {
                max-width: 850px;
              }

              .foot-logo {
                width: 300px;
              }
          

            }

            @media (min-width: 768px) and (max-width: 991px) {

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }


              .logo {
                width: 30%;
              }


              .menu {
                margin: auto 0;
              }

              .main-menu-list {
                display: none;
              }

              .burger-menu {
                display: block;
              }

              .block1 {
                padding: 60px 0;
              }

              h1 {
                font-size: 20px;
              }

              h3 {
                font-size: 16px;
              }

              .btn1 {
                height: 50px;
                padding: 3% 3em;
                font-size: 14px;
              }

              .statistics-section {
                justify-content: space-around;
              }

              .blok2 {
                width: 354px;
              }

              .blok3 {
                width: 354px;
              }

              .content {
                padding: 30px 30px 6px !important;
              }

              .slider-block1 {
                padding: 0 39px !important;
              }

              .teams-section {
                justify-content: space-around;
              }

              .blok4 {
                width: 272px;
              }
              
              .block-form {
                width: 80%;
              }

              .foot {
                padding: 0 26px 20px;
              }

              .foot-logo-and-name {
                padding: 0;
              }

              .foot-logo {
                width: 300px;
              }

              .newsletter {
                text-align: center;
                width: 100%;
              }


            }

            @media (min-width: 600px) and (max-width: 767px) {

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }

              .logo-and-name {
                width: 65%;
              }

              .logo {
                width: 20%;
              }

         

              .menu {
                margin: auto 0;
              }

              .main-menu-list {
                display: none;
              }

              .burger-menu {
                display: block;
              }

              .cont-in-slider {
                left: 15%;
                width: 70%;
              }

              .block1 {
                padding: 60px 0;
              }

              h1 {
                font-size: 16px;
              }

              h3 {
                font-size: 13px;
              }

              .btn1 {
                height: 50px;
                padding: 4% 1.5em;
                font-size: 14px;
              }

              .blok2 {
                width: 354px;
              }

              .statistics-section {
                justify-content: space-around;
              }

              .blok3 {
                width: 239px;
              }

              .slider2 {
                width: 100%;            
              }

              .content {
                padding: 30px 30px 6px !important;
              }

              .slider-block1 {
                padding: 0 11px !important;
              }

              .teams-section {
                justify-content: space-around;
              }
              
              .blok4 {
                width: 307px;
              }

              .foot-1 {
                justify-content: space-around;
              }

              .block-form {
                width: 90%;
              }
            
              .foot-logo {
                width: 300px;
              }

              .foot-menu .nav-li {
                padding: 10px;
              }

              .newsletter {
                padding-top: 26px;
                width: 100%;
                text-align: center;
              }
              
              .privacy-foot a {
                width: 100%;
                text-align: center;
                padding-bottom: 10px;
                color: #ccc;
              }

            }

            @media (min-width: 480px) and (max-width: 599px) {

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }

              .logo-and-name {
                width: 80%;
              }

              .logo {
                width: 30%;
              }


              .menu {
                margin: auto 0;
              }

              .main-menu-list {
                display: none;
              }

              .burger-menu {
                display: block;
              }

              .cont-in-slider {
                left: 10%;
                width: 80%;
              }

              .block1 {
                padding: 22px 0;
              }


              h1 {
                font-size: 13px;
              }

              h3 {
                font-size: 14px;
              }

              .btn1 {
                text-align: center;
                padding: 3% 1em;
                font-size: 14px;
              }

              .blok2 {
                width: 354px;
              }

              .statistics-section {
                justify-content: space-around;
              }

              .blok3 {
                width: 239px;
              }

              .slider2 {
                width: 100%;
              }

              .content {
                padding: 30px 30px 6px !important;
              }

              .slider-block1 {
                display: flex !important;
                justify-content: center ;
                height: 50px !important;
                width: 6% !important;
                padding: 0 11px !important;
              }
            

              .slider-block1 img {
                width: 40%;
                margin: auto 0 !important;
              }

              .teams-section {
                justify-content: space-around;
              }
              
              .blok4 {
                width: 307px;
              }

              .block-form {
                width: 90%;
              }

              .foot-1 {
                justify-content: space-around;
              }

              .foot {
                padding: 0 25px 20px;
              }

              .foot-logo {
                width: 220px;
              }

              .foot-menu .nav-li {
                padding: 10px;
              }

              .newsletter {
                width: 100%;
                text-align: center;
              }

              .privacy-foot a {
                width: 100%;
                text-align: center;
                padding-bottom: 10px;
                color: #ccc;
              }

            }

            @media (min-width: 320px) and (max-width: 479px) {

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }

              .logo-and-name {
                width: 80%;
              }

              .logo {
                width: 20%;
              }

        

              .menu {
                margin: auto 0;
              }

              .main-menu-list {
                display: none;
              }

              .burger-menu {
                display: block;
              }

              .cont-in-slider {
                left: 10%;
                width: 80%;
              }

              .block1 {
                padding: 22px 0;
              }


              h1 {
                font-size: 13px;
              }

              h3 {
                font-size: 14px;
              }

              .btn1 {
                text-align: center;
                padding: 3% 1em;
                font-size: 14px;
              }

              .blok2 {
                margin: 40px 10px;
                width: 239px;
              }

              .main-section {
                width: 95%;
                margin: 50px auto;
              }

              .statistics-section {
                justify-content: space-around;
              }

              .content {
                padding: 30px 6px 6px !important;
              }

              .slider-block1 {
                height: 50px !important;
                width: auto !important;
                padding: 0 2px !important;
              }
              
              .slider-block1 img{
                width: 80% !important;
              }

              .teams-section {
                justify-content: space-around;
              }

              .blok3 {
                width: 239px;
              }
              
              .blok4 {
                width: 239px;
              }
          
              .name-review {
                width: 80%;
                margin: 0 auto 20px;
              }

              .block-form {
                width: 100%;
              }

              .foot-1 {
                justify-content: space-around;
                padding: 0 15px 20px;
                text-align: center;
              }

              .foot-logo-and-name {
                justify-content: center;
              }

              .foot-menu {
                padding-top: 10px;
              }
              
              .foot-menu .nav-li {
                padding: 10px;
              }

              .newsletter h4 {
                padding: 30px 0 0 0;
              }

              .privacy-foot a {
                width: 100%;
                text-align: center;
                padding-bottom: 10px;
                color: #ccc;
              }
            
            }

            @media (max-width: 320px) {
              .stats-title h3 {
                font-size: 18px;
              }

              .mail, .adres, .tel {
                width: 100%;
                text-align: center;
              }

              .logo-and-name {
                width: 80%;
              }

              .logo {
                width: 20%;
              }

   

              .menu {
                margin: auto 0;
              }

              .main-menu-list {
                display: none;
              }

              .burger-menu {
                display: block;
              }

              .cont-in-slider {
                left: 10%;
                width: 80%;
              }

              .block1 {
                padding: 22px 0;
              }


              h1 {
                font-size: 13px;
              }

              h3 {
                font-size: 14px;
              }

              .btn1 {
                text-align: center;
                padding: 3% 1em;
                font-size: 14px;
              }

              .blok2 {
                width: 300px;
                margin: 40px 10px;
              }

              .main-section {
                width: 95%;
                margin: 50px auto;
              }

              .statistics-section {
                width: 90%;
                justify-content: space-around;
              }

              .slider-block1 {
                padding: 0 19px !important;
              }

              .content {
                padding: 30px 15px 6px !important;
              }

              .slider-block1 {
                height: 50px !important;
                width: auto !important;
                padding: 0 3px !important;
              }
              

            }

        
.company-id{display:inline-block;margin-top:.7em;font-size:.82em;opacity:.72;letter-spacing:.04em;line-height:1.5;text-decoration:none;cursor:default;pointer-events:none;flex-shrink:0;max-width:100%;}.company-id-wrap{flex-shrink:0;max-width:100%;}
</style>
       
        
    </head>
    <body>

      
        <a name="home"></a>
        <header class="container-fluid main-block-head">
          

          <div class="row container logo-and-menu">
            <div class="row logo-and-name">
              <div class="logo">
                <img src="icon.png" alt="" class="img-logo">
              </div>
              <div class="name">Coutoristpar</div>  
            </div>
            <div class="menu">
              <nav class="main-menu-list review-detailsby" >
                <li class="nav-li"><a href="./" class="aMenuBlok">Home</a></li>
                 <li class="nav-li"><a href="./#coment" class="aMenuBlok">Comments</a></li>
                  <li class="nav-li"><a href="./#worker" class="aMenuBlok">Our People</a></li>
                
              </nav>

              <div class="burger-menu">
                <div class="func" onmousedown="toggleMenuVisibility()">  
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row slider1">
            <div id="menu2">
              <nav>
                <li class="nav-li1"><a href="./" class="aMenuBlok">Home</a></li>
                 <li class="nav-li1"><a href="./#coment" class="aMenuBlok">Comments</a></li>
                 <li class="nav-li1"><a href="./#worker" class="aMenuBlok">Our People</a></li> 
                
              </nav>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cont-in-slider">
                    <div class="row block1">
                      <div class="main-title">
                        <h1>Build Your Own Clothing Store Franchise</h1>
                      </div>
                      <div class="subtitle">
                        <h3> You can use our services by writing to us or calling us. We will be happy to answer any questions and help you order services!</h3>
                      </div>
                      
                    </div>
                  </div>
                  <img src="uploads/09-2026/stylish-clothing-background.webp" class="d-block w-100 darkened-image" alt="">
                </div>
                <div class="carousel-item">
                  <div class="cont-in-slider">
                    <div class="row block1">
                      <div class="main-title">
                        <h1>Starting a Successful Clothing Store Franchise</h1>
                      </div>
                      <div class="subtitle">
                        <h3>Coutoristpar brings years of hands-on retail experience straight to your local high street. We shape distinct clothing collections and pair them with robust business systems that help independent shop owners thrive in a competitive market.</h3>
                      </div>
                      
                    </div>
                  </div>
                  <img src="uploads/09-2026/neutral-fashion-interior.webp" class="d-block w-100 darkened-image" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </button>
            </div>
          </div>
        </header>


      


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-wishlist__styleop{
		margin: 0px;
		padding: 0px;
		font-family: 'Fira Sans Extra Condensed', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 334px 0px;
	}
	.bodyClass1-wishlist__styleop{
		background: #e8eaeb;
		color: #000000;
	}
	.bodyClass2-wishlist__styleop{
		background: #fff5ea;
		color: #fff;
	}
	.bodyClass3-wishlist__styleop{
		background: #fff;
		color: #111;
	}
	.wrapage-block-wishlist__styleop{
		background-size: 100%;
		width: 100%;
	}
	.box_main-wishlist__styleop{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-wishlist__styleop h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-wishlist__styleop p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-wishlist__styleop{
		text-align: start;
	}
	.mainBlock-wishlist__styleop ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-wishlist__styleop ul>li span{
		font-weight: bold;
	}
	.mainBlock-wishlist__styleop{
		max-width: 949px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-wishlist__styleop .cBlock-wishlist__styleop{
		text-align: start;
	}

	.bodyClass3-wishlist__styleop .mainBlock-wishlist__styleop{
		background: none;
		border-top: 2px dotted #fff5ea;
		border-bottom: 2px dotted #fff5ea;
	}
	.bodyClass2-wishlist__styleop .mainBlock-wishlist__styleop{
		background: #321D2F;
		color: #fff !important;
		box-shadow: 0px 0px 0px #321D2F;
	}
	.bodyClass2-wishlist__styleop .mainBlock-wishlist__styleop p{
		color: #fff !important;
	}
	.bodyClass1-wishlist__styleop .mainBlock-wishlist__styleop{
		background: #FFF7ED;
		color: #000000;
		border-left: 3px solid #5C2A9D;
	}
	.bodyClass1-wishlist__styleop .mainBlock-wishlist__styleop p{
		color: #000000 !important;
	}
	.order-wishlist__styleop{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-wishlist__styleop p{
			padding: 0px 15px;
		  }
		  .box_main-wishlist__styleop h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-wishlist__styleop{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-wishlist__styleop{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-wishlist__styleop" id="mainWrapp-wishlist__styleop">


	<div class="wrapage-block-wishlist__styleop">
		<div class="box_main-wishlist__styleop">
			<div class="mainBlock-wishlist__styleop">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-wishlist__styleop">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>



    <footer class="container-fluid foot promo__popuprs">
      <div class="container foot-1">
          <div class="foot-logo">
            <div class="foot-logo-and-name">
              <div class="logo">
                <img src="icon.png" alt="" class="img-logo">
              </div>
              <div class="name"><p>Coutoristpar</p></div>
            </div>
            <p>You can use our services by writing to us or calling us. We will be happy to answer any questions and help you order services!</p>
          </div>

          <div class="foot-menu">
            <nav class="main-menu-list">
              <li class="nav-li"><a href="./" class="aMenuBlok">Home</a></li>
               <li class="nav-li"><a href="./#coment" class="aMenuBlok">Comments</a></li>
               <li class="nav-li"><a href="./#worker" class="aMenuBlok">Our People</a></li>
               
            </nav>
          </div>
          <div class="newsletter">
            <p>Receive our news and new offers, products and more and get a discount on your next order</p>
             <form method="post" action="{thx-page-newsletter}">
              <input type="email" class="input-user--component--block" placeholder="Mailing address">
              <button class="btn-foot">I want to subscribe</button>
            </form>
          </div>

      </div>
      <div class="container privacy-foot">
        <a href="Privacy.html">Privacy policy</a>
        <a href="terms-of-service.html">Terms & Conditions</a>
        <a href="legal-disclaimer.html">Disclaimer</a>
                
      </div>
    </footer>
   
   

</body>
</html>
