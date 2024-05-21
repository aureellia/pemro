<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cindy Indiarto's Website</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="navbar">
        <nav class="nav-list">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section id="home">
        <h1>Hello, my name's <span style="color: #DEDEA7">Cindy!</span></h1>
    </section>

    <section id="tentang-saya">
        <h2>About Me</h2>
        <div class="about-section">
            <img src="foto 1.jpg" alt="Cindy Aurellia Indiarto">
            <p>My name is Cindy Aurellia Indiarto. I am passionate about exploring the world of Machine Learning and Artificial Intelligence, constantly seeking to expand my knowledge and skills in this exciting field. With a background in computer science, I have delved into various projects and research endeavors, ranging from natural language processing to computer vision. Outside of my technical pursuits, I find solace in the realm of music, where I often immerse myself in different genres and artists. I am also an advocate for teamwork and collaboration, believing that collective effort leads to greater achievements. Let's connect and embark on meaningful journeys together!</p>
        </div>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
            <div class="img-cont">
                <div class="img-child">
                    <img src="foto 2.jpg" alt="Photo 2" width="300">
                </div>

                <div class="img-child">
                    <img src="foto 3.jpg" alt="Photo 3" width="300">
                </div>

                <div class="img-child">
                    <img src="foto 5.jpg" alt="Photo 5" width="300">
                </div>
            </div>
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <div class="art-cont">
            <article class="art-child">
                <h3><a href="<?php echo $link1; ?>" target="_blank"><?php echo $judul1; ?></a></h3>
                <p><?php echo $desk1; ?></p>
            </article>

            <article class="art-child">
                <h3><a href="<?php echo $link2; ?>" target="_blank"><?php echo $judul2; ?></a></h3>
                <p><?php echo $desk2; ?></p>
            </article>

            <article class="art-child">
                <h3><a href="<?php echo $link3; ?>" target="_blank"><?php echo $judul3; ?></a></h3>
                <p><?php echo $desk3; ?></p>
            </article>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Information</h2>
        <p>If you have any inquiries or would like to get in touch, feel free to contact me using the information below:</p>
        <ul>
        <p>LinkedIn: Cindy Aurellia Indiarto</p>
        <p>Email: 21aurelliacindy@email.com</p>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2024 Cindy Indiarto's Website. All rights reserved.</p>
</footer>
<script src="script.js"></script>
</body>
</html>
