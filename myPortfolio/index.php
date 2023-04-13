
<?php 

$conn = mysqli_connect('localhost','root','','contact_db') or die('Connection Failed');

if (isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
    $number = mysqli_real_escape_string($conn,$_POST['number']); 
    $message = mysqli_real_escape_string($conn,$_POST['message']); 

    $select_message = mysqli_query($conn,"SELECT * FROM contact_form WHERE name = '$name'
    AND email = '$email' AND number = '$number' AND message = '$message'") or die('Query Failed');

    if(mysqli_num_rows($select_message) > 0){
        $message = 'Message sent already';
    } else{
        mysqli_query($conn, "INSERT INTO contact_form (name, email, number, message) VALUES
        ('$name','$email','$number','$message')") or die('Query Failed');
        $message = 'Message successfully sent';
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


    <!-- custom css file link -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


<?php if(isset($$message)){
        echo '
        <div class="message" data-oas="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick = "this.parentElement.remove();"></i>
        </div>
        ';
}
?>
    <!-- header section starts here -->
    <header class="header">

        <div id="menu-btn" class="fas fa bars"></div>
        <a href="#home" class="logo">portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contacts</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </header>
    <!-- header section ends here -->

    <!-- home section starts -->

    <section class="home" id="home">
        <div class="image" data-oas="fade-right">
            <img src="images/clinton.jpg" alt="My Image">
        </div>
        <div class="content" data-oas="fade-up">
            <h3>Hi, am Nahurira Clinton</h3>
            <span>Web Designer and Web Developer</span>
            <p>I design good and responsive websites with expertise in both backend and frontend</p>
            <a href="#about" class="btn">About Me</a>
        </div>
    </section>
      <!-- home section ends -->

      <!-- about section starts here -->

      <section class="about" id="about">
        <h1 class="heading" data-oas="fade-up"><span>biography</span></h1>
        <div class="biography">
            <p>am bra bra .........</p>
        <div class="bio">
            <h3 data-oas="zoom-in"><span>Name:</span>Nahurira Clinton</h3>
            <h3 data-oas="zoom-in"><span>Email:</span>devclinton@gmail.com</h3>
            <h3 data-oas="zoom-in"><span>Address:</span>Kampala, Uganda</h3>
            <h3 data-oas="zoom-in"><span>Phone:</span>+256773962261</h3>
            <h3 data-oas="zoom-in"><span>Age:</span>23 Years</h3>
            <h3 data-oas="zoom-in"><span>Experience:</span>2+ years</h3>
        </div>
        <a href="#" class="btn" data-oas="fade-right">Download CV</a>
        </div>
        <div class="skills" data-oas="fade-up">
        <h1 class="heading"><span>skills </span></h1>
        <div class="progress">
            <div class="bar" data-oas="zoom-left"><h3><span>HTML</span><span>80%</span></h3></div>
            <div class="bar" data-oas="zoom-right"><h3><span>CSS</span><span>60%</span></h3></div>
            <div class="bar" data-oas="zoom-left"><h3><span>JAVASCRIPT(NODE, REACT AND ANGULAR)</span><span>66%</span></h3></div>
            <div class="bar" data-oas="zoom-right"><h3><span>PHP(LARAVEL)</span><span>70%</span></h3></div>
            <div class="bar" data-oas="zoom-left"><h3><span>PYTHON(DJANGO)</span><span>70%</span></h3></div>
        </div>
        
        <div class="edu-exp">

        <h1 class="heading"  data-oas="fade-up"><span>Education & Experience</span></h1>

        <div class="row">
            <div class="box-container">
                <h3 class="title" style="padding: 1.5rem;font-size: 2.5rem;background-color: var(--yellow);"
                data-oas="fade-right">Education</h3>

                <div class="box" data-oas="fade-right">
                    <span>(2020 to current)</span>
                    <h3>Web Design and Development</h3>
                    <p>Basically learning while applying Html, css, javascript, SQL, MongoDB, PHP and Python to design 
                        and develop good looking and interactive websites.
                    </p>
                </div>
        
                <div class="box" data-oas="fade-right">
                    <span>(2021 to current)</span>
                    <h3>Mobile Application Development</h3>
                    <p>Learning while applying Dart in flutter to develop highly secure 
                        attractive mobile applications
                    </p>
                </div>

                <div class="box" data-oas="fade-right">
                    <span>(2021 to current)</span>
                    <h3>Graphics Designing</h3>
                    <p>Learning while applying Dart in flutter to develop highly secure 
                        attractive mobile applications
                    </p>
                </div>
            </div>
            <div class="box-container" data-oas="fade-left">
                <h3 class="title" style="padding: 1.5rem;font-size: 2.5rem;background-color: var(--yellow);"
                data-oas="fade-up">Experience</h3>

                <div class="box" data-oas="fade-left">
                    <span>(2020 to current)</span>
                    <h3>Full Stack Developer</h3>
                    <p>Basically learning while applying Html, css, javascript, SQL, MongoDB, PHP and Python to design 
                        and develop good looking and interactive websites.
                    </p>
                </div>
        
                <div class="box" data-oas="fade-left">
                    <span>(2021 to current)</span>
                    <h3>Mobile Application Developer</h3>
                    <p>Learning while applying Dart in flutter to develop highly secure 
                        attractive mobile applications
                    </p>
                </div>

                <div class="box" data-oas="fade-left">
                    <span>(2021 to current)</span>
                    <h3>Graphics Designer</h3>
                    <p>Learning while applying Dart in flutter to develop highly secure 
                        attractive mobile applications
                    </p>
                </div>
            </div>
        </div>
        </div>
      </section>
      <!-- about section ends here -->

      <!-- services section starts here -->
      <section class="services" id="services">

        <h1 class="heading" data-oas="zoom-in"><span>Services</span></h1>

        <div class="box-container">
            <div class="box" data-oas="zoom-in">
                <i class="fas fa-code"></i>
                <h3>Web Designing</h3>
                <p>I design good interactive websites</p>
            </div>
            
            <div class="box" data-oas="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphics Designing</h3>
                <p>I design good interactive websites</p>
            </div> 

            <div class="box" data-oas="zoom-in">
                <i class="fab fa-bootstrap"></i>
                <h3>Bootstrap</h3>
                <p>I design good interactive websites</p>
            </div>

            <div class="box" data-oas="zoom-in">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>I design good interactive websites</p>
            </div>

            <div class="box" data-oas="zoom-in">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>I design good interactive websites</p>
            </div>

            <div class="box" data-oas="zoom-in">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>I design good interactive websites</p>
            </div>
        </div>
      </section>
      <!-- services section ends here -->

      <!-- portfolio section starts here -->
      <section class="portfolio" id="portfolio">

        <h1 class="heading" data-oas="zoom-in"><span>Portfolio</span></h1>

        <div class="box-container">
            <div class="box" data-oas="zoom-in">
                <img src="images/img-1.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>

            <div class="box" data-oas="zoom-in">
                <img src="images/img-2.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>

            <div class="box" data-oas="zoom-in">
                <img src="images/img-3.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>

            <div class="box" data-oas="zoom-in">
                <img src="images/img-4.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>

            <div class="box" data-oas="zoom-in">
                <img src="images/img-5.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>

            <div class="box" data-oas="zoom-in">
                <img src="images/img-6.jpg" alt="">
                <h3>Web Development</h3>
                <span>(2020 t0 current)</span>
            </div>
        </div>
      </section>
      <!-- portfolio section ends here -->

      <!-- contact section starts here -->
      <section class="contact" id="contact">

        <h1 class="heading" data-oas="fade-up"><span>Contact Me</span></h1>

        <form action="" method="post">

            <div class="flex">

                <input data-oas="fade-right" type="text" name="name" placeholder="Enter your name" 
                class="box" required>

                <input data-oas="fade-right" type="email" name="email" placeholder="Enter your email" 
                class="box" required>

            </div>

            <input data-oas="fade-left" type="text" name="number" placeholder="Enter your number" 
            class="box" required>

            <textarea data-oas="fade-left" name="message" class="box" required placeholder="enter your message"
             cols="30" rows="10"></textarea>

             <input type="submit" data-oas="zoom-in" value="send message" name="send" class="btn">

        </form>

        <div class="box-container">
            <div class="box" data-oas="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+256-773-962-261</p>
            </div>
            
            <div class="box" data-oas="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>devclinton@gmail.com</p>
             </div>
    
            <div class="box" data-oas="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Makerere Kampala, Uganda</p>
            </div>
        </div>

      </section>
      <!-- contact section ends here -->

      <div class="credit">&copy; copyright @ <?php echo date('Y') ?> by <span>
        Mr. Nahurira Clintonie
      </span></div>
    

    <!-- custom javascript file -->
    <script src="js/script.js"></script>

    <!-- aos js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            delay:300
        });
    </script>
</body>
</html>