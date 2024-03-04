<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>YT集團官網</title>
       <style>
           
           body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1em 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.logo {
    font-size: 1.5em;
    font-weight: bold;
}

nav ul {
    list-style: none;
    display: flex;
}

nav a {
    text-decoration: none;
    color: #fff;
    margin: 0 15px;
    transition: color 0.3s;
}

nav a:hover {
    color: #ffcc00;
}

.hero {
    background-image: url('hero-background.jpg');
    background-size: cover;
    background-position: center;
    color: #fff;
    text-align: center;
    padding: 150px 0;
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 2.5em;
}

.hero p {
    font-size: 1.2em;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ffcc00;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #e6b800;
}

.about-us,
.services,
.contact {
    max-width: 1200px;
    margin: 50px auto;
}

.service-item {
    text-align: center;
}

.service-item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

.contact form {
    display: flex;
    flex-wrap: wrap;
}

.contact label {
    flex: 1 0 100%;
    margin-bottom: 10px;
}

.contact input,
.contact textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}

.contact button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact button:hover {
    background-color: #555;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}
       
       </style>
 
</head>
<body>

    <header>
        <nav>
            <div class="logo">官網</div>
            <ul>
                <li><a href="#home">首頁</a></li>
                <li><a href="#about">關於我們</a></li>
                <li><a href="#services">服務</a></li>
                <li><a href="#contact">聯繫我們</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>歡迎來到官網</h1>
            <p>探索我們的服務，體驗無與倫比的精品。</p>
            <a href="#services" class="cta-button">了解更多</a>
        </div>
    </section>
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

<form>
    <div class="d6ae0d37-804f-465a-bb3b-a66c5f901722" data-sitekey="ES_f25ff07e986b4af3a26a9e0c79e07d33"></div>
</form>
    <section id="about" class="about-us">
        <h2>關於我們</h2>
        <p>我們致力於提供最優質的產品和服務，滿足客戶的需求。Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget justo in libero convallis dapibus.</p>
    </section>


    <section id="services" class="services">
        <h2>服務</h2>
        <div class="service-item">
            <img src="01.jpg" alt="服務1">
            <h3>服務1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget justo in libero convallis dapibus.</p>
        </div>
        <div class="service-item">
            <img src="02.jpg" alt="服務2">
            <h3>服務2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget justo in libero convallis dapibus.</p>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>聯繫我們</h2>
        <p>有任何問題或合作提案？請隨時聯繫我們。</p>
        <form>
            <label for="name">姓名:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">訊息:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">提交</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 官網. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
    
</body>
</html>
