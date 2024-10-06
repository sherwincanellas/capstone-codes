<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BCP-Admission</title>
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="BCP-Admission.php">
                <img src="img/logoooo.png">
            </a>
        </div>

        <ul class="nav-links">
        <li id="#"class="link"><a href="BCP-Admission.php">Home</a></li>
            <li id="link1" class="link"><a href="#">Applications</a></li>
            <li id="link3" class="link"><a href="#">About Us</a></li>
        </ul>
    </nav>
   
    <section class="container">
        <h2 class="header">Application Process</h2>
        <div class="features">
            <div class="card">
                <h4>Bulacan BTVTED</h4>
                <p>
                The Bachelor of Technical-Vocational Teacher Education (BTVTED) program focuses on preparing students to teach technical and vocational subjects, blending practical skills training with educational theory to create effective vocational instructors.
                </p>
                <a href="healthcarecard1.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BPE</h4>
                <p>
                The Bachelor of Physical Education (BPE) program focuses on training students to become effective physical education teachers and sports coaches, promoting health, fitness, and sports education.
                </p> <br>
                <a href="healthcarecard2.php">View More <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSAIS</h4>
                <p>
                The Bachelor of Science in Accounting Information System (BSAIS) focuses on the integration of accounting and information technology, equipping students with the skills to manage financial data and systems for better business decision-making.
                </p>
                <a href="healthcarecard3.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSCPE</h4>
                <p>
                The Bachelor of Science in Computer Engineering (BSCpE) combines computer science and electrical engineering to design and develop computer systems, hardware, and software solutions.
                </p>
                <a href="healthcarecard4.php">View More <i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSCRIM</h4>
                <p>
                The Bachelor of Science in Criminology prepares students for careers in law enforcement, criminal investigation, and crime prevention through a study of crime, justice, and law enforcement practices..
                </p><br>
                <a href="healthcarecard5.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSENTREP</h4>
                <p>
                The Bachelor of Science in Entrepreneurship (BSENTREP) at Bulacan equips students with the knowledge and skills to start, manage, and grow their own businesses, focusing on innovation, financial management, and strategic planning.
            </p><br>
            <br>
                <a href="healthcarecard6.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSIS</h4>
                <p>
                The Bachelor of Science in Information Systems (BSIS) at Bulacan focuses on developing skills in designing, implementing, and managing information systems to support business operations and decision-making through technology.
                </p>
                <a href="healthcarecard7.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSP</h4>
                <p>
                The Bachelor of Science in Psychology (BSP) is designed to provide students with a strong foundation in psychological theories and practices, preparing them for careers in mental health, education, and research, or for further studies in psychology.
                </p>
                <a href="healthcarecard8.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>

            <div class="card">
                <h4>Bulacan BSTM</h4>
                <p>
                The Bachelor of Science in Tourism Management (BSTM) at Bulacan equips students with the knowledge and skills needed to excel in the tourism and hospitality industry, focusing on travel management, event planning, and customer service.
                </p>
                <a href="healthcarecard8.php">View More<i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="img/health_img-removebg-preview (1).png">
            </div>
            <p>
            QUEZON CITY HEALTH DEPARTMENT
            </p>
            <div class="socials">
                <a href="#"><i class="ri-facebook-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>About Us</h4>
            <a href="#">Blogs</a>
            <a href="#">Channels</a>
            <a href="#">Sponsors</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="#">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="#">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
    </footer>

    <div class="copyright">
       <!-- lagyan -->
    </div>


    <script>
        function scrollToElement(elementSelector, instance = 0) {
    // Select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    // Check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        // Scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

link1.addEventListener('click', () => {
    scrollToElement('.header');
});

link2.addEventListener('click', () => {
    // Scroll to the second element with "header" class
    scrollToElement('.header', 1);
});

link3.addEventListener('click', () => {
    scrollToElement('.column');
});
    </script>
</body>

</html>
