<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="{{ asset('public/css/main.css') }}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Mynerve&display=swap" rel="stylesheet">
    <title>my-portofolio</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins';
    }

    /* header */
    header {
        background-color: #F5EEE6;
        color: white;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 3;
    }
    .navbar {
        display: flex;
        justify-content: space-around;
    }
    .navbar i {
        padding: 1.7rem 1rem;
        font-size: 20px;
    }
    .navbar h1 {
        color: #F6D776;
        padding: 1rem 0;
        font-size: 2rem;
    }
    .navbar h1 span {
        color: #80BCBD;
        padding: 1.5rem 0;
    }
    body {
        height: 10dvh;
    }
    nav ul {
        display: flex;
    }
    nav li {
        list-style: none;
        padding: 1.5rem 2.5rem;
    }
    li a {
        color: #6895D2;
        text-decoration: none;
        font-size: 20px;
    }
    /* end header */

    /* home */

    .home {
        background-color: #FBF9F1;
        height: 100vh;
        margin: 0;
    }
    .content-home h2 {
        text-align: center;
        color: #43766C;
        font-family: 'Satisfy';
        font-size: 2.5rem;
        width: 600px;
        margin-left: -150px;
    }
    .content-home h2 span {
        font-size: 2.5rem;
        color: #B19470;
        margin-left: -10px;
        /* margin-top: 10rem; */
    }
    .content-home {
        margin: 0 auto;
        padding: 13rem 600px;
    }
    .content-home img {
        border-radius: 100%;
    }
    .h{
        margin: 100px 0;
    }

    /* end home */
</style>
<body>
    <header class="header">
        <section class="top-header">
            <div class="top-navbar">
                <nav class="navbar">
                    <h1>Port<span>ofolio</span></h1>
                    <ul>
                        <li><a href="{{ url('/portofolio') }}">Home</a></li>
                        {{-- <li><a href="#massage">Massage</a></li> --}}
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/school') }}">Study</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                    <a href="profil"><i class="fa-brands fa-instagram" style="color: #80BCBD;"></i><i class="fa-solid fa-phone" style="color: #80BCBD;"></i></a>
                </nav>
            </div>
        </section>
    </header>

    <!-- home -->

    <section class="home" id="home">
        <div class="top-home">
            <div class="content-home">
                <div class="image">
                    {{-- <img src="{{ asset('images/profile.jpg') }}" alt="profile" width="300" height="300"> --}}
                </div>
                <h2 class="h">Hello World?<br> <span>I'm Salsabila Anandita Putri</span></h2>
            </div>
        </div>
    </section>
</body>
</html>
