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
/* location */
#location{
    background-color: #80BCBD;
    height: 100vh;
}
.text-loc h1{
    text-align: center;
    font-size: 30px;
}
.content-location{
    margin: 4rem;
    display: flex;
    justify-content: space-around;
}
.login-form {
    width: 400px;
    margin: 10rem auto;
}

.login-form h2 {
    text-align: center;
    color: #4C4C4C;
    padding-top: 20px;
    margin-right: -60px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
    width: 120%;
    height: 50px;
    padding: 10px;
    margin: 10px -5px;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid #8C8C8C;
}

.login-form input[type="submit"] {
    width: 200px;
    padding: 10px;
    margin: 10px 130px;
    border-radius: 15px;
    background-color: #4C4C4C;
    color: white;
    border: none;
    cursor: pointer;
}


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
    <section id="location">
        <div class="text-loc">
            <h1>My-Location</h1>
        </div>
        <div class="content-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63395.51379742526!2d106.80425419764849!3d-6.743045791168024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cb8463fa99ff%3A0x739824866581b963!2sKec.%20Cigombong%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1706016329539!5m2!1sid!2sid"
                width="800" height="500" style="border-radius:15px;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="login-form">
                <h2>Contact Me</h2>
                <form>
                    <input type="text" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="psw" required>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </section>
</body>
</html>