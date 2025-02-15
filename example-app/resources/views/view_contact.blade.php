@extends('layout.contact')

@section('title', 'contact')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><%= title %></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .containerCon {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .contact-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
        }
        .contact-links a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid transparent;
            transition: all 0.3s ease;
        }
        .contact-links a:hover {
            color: #007BFF;
            border-bottom: 1px solid #007BFF;
        }
        .contact-links img {
            transition: transform 0.3s ease;
        }
        .contact-links a:hover img {
            transform: scale(1.1);
        }
        .separator {
            width: 100%;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="containerCon">
        <h1>Contact Us - Bengkel AL auto Speed</h1>
        <div class="contact-links">
            <a href="https://wa.me/6289606236715" target="_blank">
                <img src="images/WhatsApp.svg" alt="WhatsApp Logo" height="80px" width="80px">
                WhatsApp: +62 89606236715
            </a>
            <div class="separator"></div>
            <a href="https://www.instagram.com/riccc_ec/" target="_blank">
                <img src="images/Instagram_icon.png" alt="Instagram Logo" height="80px" width="80px">
                Instagram: @BengeklAlautoSpeedlibrary
            </a>
            <div class="separator"></div>
            <a href="mailto:ericcandra_2226240108@mhs.mdp.ac.id">
                <img src="images/Gmail_Icon.png" alt="Gmail Logo" height="80px" width="80px">
                Gmail: support@bengkelALautospeed.com
            </a>
            <div class="separator"></div>
            <a href="https://www.facebook.com/ErickChandra/?locale=id_ID" target="_blank" >
                <img src="images/Facebook_f_logo_(2019).svg" alt="fb Logo" height="80px" width="80px">
                Facebook: bengkelALautospeed
            </a>
            <div class="separator"></div>
            <a href="https://twitter.com/kingjames?lang=en" target="_blank">
                <img src="images/xlogo.png" alt="x Logo" height="80px" width="80px">
                Twitter/X: bengkelALautospeed
            </a>
        </div>
    </div>
</body>
</html>


@endsection