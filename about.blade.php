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

/* about */

.content-about{
    display: flex;
    justify-content: space-around;
    background-color: #FBF9F1;
    padding: 10rem 0;
}
.content-about img{
    border-radius: 30px 0;
}
.text-bout h1{
    margin-top: -40px;
    line-height: 0.9;
    font-family: 'Satisfy';
    font-size: 35px;
    margin-left: 30rem;
    color: #80BCBD;
    span{
        font-size: 50px;
        font-family: 'Mynerve', cursive;
    }
}
.text-bout p{
    font-size: 20px;
    text-align: justify;
    margin-left: 200px;
    margin-top: 2rem;
    line-height: 1.9;
    width: 700px;
    color: black;
    font-family: 'Poppins';
}

.text-bout button {
    background-color: #43766C;
    border-radius: 10px;
    color: white;
    padding: 12px 20px;
    margin: 2rem 13rem;
    border: none;
    cursor: pointer;
    width: 200px;
}

button:hover {
    opacity: 0.8;
}

/* end about */

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

    <section class="about" id="about">
        <div class="container-about">
            <div class="content-about">
                <div class="text-bout">
                    <h1>Hello Guys! <br> <span>I'M Caca</span></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor laudantium fugiat, omnis cum ea
                        recusandae fuga, fugit magni, quisquam incidunt deserunt praesentium libero eum sit dignissimos
                        dolore neque minus quidem sunt hic quia modi atque placeat totam? Necessitatibus reprehenderit
                        dignissimos debitis hic beatae inventore quia alias consequatur maxime, rerum aspernatur.</p>
                    <button type="submit">Read More</button>
                </div>
                <img src="profil.jpg" alt="about" width="400" height="400">
            </div>
        </div>
    </section>

    <section class="massage">
        <h3>massage</h3>
        <div class="container-massage">
            <div class="text">
                <h2>give me a message if you need</h2>
            </div>
            <div class="input">
                <input type="text" placeholder="massage" name="uname" required>

                <button type="submit">Send</button>
            </div>
        </div>
    </section>

</body>
</html>