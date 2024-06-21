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
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Mynerve&display=swap" rel="stylesheet">
    <title>my-portofolio</title>
</head>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins';
}

/* header */
header{
    background-color: #F5EEE6;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 3;
}
.navbar{
    display: flex;
    justify-content: space-around;
}
.navbar i{
    padding: 1.7rem 1rem;
    font-size: 20px;
}
.navbar h1{
    color: #F6D776;
    padding: 1rem 0;
    font-size: 2rem;
    span{
        color: #80BCBD;
        padding: 1.5rem 0;
    }
}
body{
    height: 1000px;
}
nav ul{
    display: flex;
}
nav li{
    list-style: none;
    padding: 1.5rem 2.5rem;
}
li a{
    color: #6895D2;
    text-decoration: none;
    font-size: 20px;
}
/* end header */

/* study */
.school{
    background-color: #F5EEE6;
    height: 100vh;
}
.card-1 {
    width: 300px;
    border-radius: 10px;
    background-color:  #ffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10rem 3rem;
}
.card-2 {
    width: 300px;
    border-radius: 10px;
    background-color:  #ffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10rem 3rem;
}
.card-3 {
    width: 300px;
    border-radius: 10px;
    background-color: #ffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10rem 3rem;
}
.school-card{
    display: flex;
    justify-content: center;
}
.header-card{
    text-align: center;
    padding-top: 2rem;
    font-size: 20px;
}
.card-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.card-content {
    padding: 20px;
}

.card-title {
    margin: 0;
    font-size: 24px;
    color: #333;
    span{
        font-size: 15px;
    }
}


/* end study */


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
    
    <section class="school" id="school">
        <div class="header-card">
        <h1>School</h1>
        </div>
        <div class="school-card">
            <div class="card-1">
                <img src="profil.jpg" alt="Card Image" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">MI Hidayatussibyan 02 <br><span>2015-2020</span></h2>
                </div>
            </div>
            <div class="card-2">
                <img src="profil.jpg" alt="Card Image" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">SMPN1 CIGOMBONG <br> <span>2020-2023</span>
                    </h2>
                </div>
            </div>
            <div class="card-3">
                <img src="profil.jpg" alt="Card Image" class="card-image">
                <div class="card-content">
                    <h2 class="card-title">SMK WIKRAMA BOGOR <br><span>2023-2026</span></h2>
                </div>
            </div>
        </div>
    </section>
</body>
</html>