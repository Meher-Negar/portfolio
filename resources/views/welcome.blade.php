<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link To CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 
</head>
<body>
    <!-- Navbar -->

<header>

    <nav class="navbar-nav navbar-expand-lg navbar-light bg-light mb-0">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">Meher</a>
    <button class="navbar-toggler navbar-text nav justify-content-end " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end " id="navbarNav">
      <ul class="navbar-nav navbar-text">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Internship</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
       
      </ul>
    </div>
  </div>
</nav>
</header>
    <!-- <header>
        <a href="#" class="logo">Meher</a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#internship">Internship</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header> -->
    <!-- Home -->
 
    <section class="home" id="home">
        <div class="social">
            <a href="https://github.com/Meher-Negar"><i class='bx bxl-github'></i></a>
            <a href="https://m.facebook.com/auntora123"><i class='bx bxl-facebook' ></i></a>
            <a href="https://mail.google.com/mail/u/0/?&cs=cfa&nvp_bu_atfa=%C2%AD1&fv=amr&draft=185f1%C2%ADe72b292275f&iid=1&rf%C2%ADpc=?%26&pv=tl&cpt=%C2%ADc&haot=da&saot=1&eot%C2%AD=1&c=1b2afd370e9dc78%C2%AD5&v=b#inbox"><i class='bx bxl-gmail' ></i></a>
        </div>
        <div class="home-img">
            <img src="{{asset('frontend')}}/img10.jpg" alt="">
        </div>
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1>Meher Negar</h1>
            <h2>backend Developer</h2>
            <p>Hello there! I'm Meher, a dedicated backend web developer on a mission to transform digital visions into seamless, high-performance realities. With a strong foundation in backend technologies and a knack for optimizing data flow, I'm committed to crafting the invisible threads that weave exceptional user experiences together.</p>
            <a href="#contact" class="btn">Contact Me</a>
        </div>
 
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About Me</h2>
            <span>Education</span>
        </div>
        <!-- About Content -->
        <div class="about-container">
            <div class="about-img">
                <img src="{{asset('frontend')}}/img8.jpg" alt="">
            </div>
            <div class="about-text">
                <h4>BSc in CSE</h4>
                <p>Dhaka International University</p>
                <h4>Completion:<p>2023</span></p>
                <h5>Relevant Coursework:<p> Computer Fundamentals, Structured Programming, Artificial Intelligence & Neural Networks, E-Commerce & Web Engineering, Operating Systems, Software Engineering,  Microcontroller & Assembly Language, Algorithm Design & Analys, Database Management Systems, Object-Oriented Programming</p></h5>
                <div class="information">
                    <!-- Box 1 -->
                    <div class="info-box">
                        <i class='bx bxs-user' ></i>
                        <span>Meher Negar</span>
                    </div>
                    <!-- Box 2 -->
                    <div class="info-box">
                        <i class='bx bxs-phone' ></i>
                        <span>+88018***</span>
                    </div>
                    <!-- Box 3 -->
                    <div class="info-box">
                        <i class='bx bxs-envelope' ></i>
                        <span>mehernegar1133@gmail.com</span>
                    </div>
                </div>
                <a href="{{asset('frontend')}}/cv.pdf" class="btn">View  Cv</a>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Skills</h2>
            <span>My Skills</span>
        </div>
        <!-- Skills Content -->
        <div class="skills-container">
            <div class="bars">
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>Laravel</h3>
                    <span>94%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>PHP</h3>
                    <span>89%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar php-bar"></div>
                </div>
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>HTML</h3>
                    <span>94%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>
                <!-- Box 2 -->
                <div class="bars-box">
                    <h3>CSS</h3>
                    <span>84%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar css-bar"></div>
                </div>
                <!-- Box 3 -->
                <div class="bars-box">
                    <h3>JavaScript</h3>
                    <span>54%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar js-bar"></div>
                </div>
                <!-- Box 4 -->
                <div class="bars-box">
                    <h3>Bootstrap</h3>
                    <span>99%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar bs-bar"></div>
                </div>
                <!-- box 5 -->
                
            </div>
            <div class="skills-img">
                <img src="{{asset('frontend')}}/123.png" alt="">
            </div>
        </div>
 
    </section>

    <section id="internship">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title  my-3">
                                <h4 class="text-center" >Professional Training</h4>
                            </div>
                        </div>
                     <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered border">
                        <thead>
    <tr>
     
      <th scope="col">Certification</th>
      <th scope="col">View Certificate</th>
      <th scope="col">Covered Topic</th>
      <th scope="col">Institute</th>
      <th scope="col">Duration</th>
       
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">Professional Web Development
Specialist</td>

<td><a href="{{asset('frontend')}}/cirtificate.jpg"><button class="btn btn-primary">View Certificate</button></a></td>
      <td>Html,Css,JavaScript,Bootstrap,php,
Laravel,JQuery,OOP,MySQL</td>
      <td>People n tech</td>
      <td>6 months</td>
    </tr>
   
   
  </tbody>
</table>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Services</h2>
            <span>Our Services</span>
        </div>
        <div class="services-content">
            <!-- Box 1 -->
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Web Development</h3>
               
            </div>
            <!-- Box 2 -->
            <div class="services-box">
                <i class='bx bx-server' ></i>
                <h3>Frontend Development</h3>
              
            </div>
            <!-- Box 3 -->
           

            <div class="services-box">
                <i class='bx bxl-wordpress' ></i>
                <h3>Backend Developer</h3>
               
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Portfolio</h2>
            <span>Our Recent Work</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                <div class="portfolio-content">
            <div class="portfolio-img">
              <a href="#"><img src="{{asset('frontend')}}/work6.jpg" alt="" height="280px" ></a>  
            </div>
            <div class="portfolio-img">
                <img src="{{asset('frontend')}}/work2.jpg" alt="" height="280px">
            </div>
            <div class="portfolio-img">
                <img src="{{asset('frontend')}}/work3.jpg" alt="" height="280px">
            </div>
            <div class="portfolio-img">
                <img src="{{asset('frontend')}}/work4.jpg" alt="" height="280px">
            </div>
            <div class="portfolio-img">
                <img src="{{asset('frontend')}}/work5.jpg" alt="" height="280px">
            </div>
            <div class="portfolio-img">
                <img src="{{asset('frontend')}}/wpt.jpg" alt="" height="280px">
            </div>
            
        </div>
                </div>
            </div>
        </div>
     
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Us</span>
        </div>
        <div class="contact-form">
            <form action="/create" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" id="" placeholder="Your Email">
                <textarea name="details" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
                <input type="submit" name="submit" value="Send" class="contact-button">
            </form>
        </div>
    </section>
    <!-- Footer -->
    <div class="footer">
        <h2></h2>
        <div class="footer-social">
            <a href="https://m.facebook.com/auntora123" target="_blank"><i class='bx bxl-facebook' ></i></a>
             <a href="https://github.com/Meher-Negar" target="_blank"><i class='bx bxl-github' ></i></a>
            <a href="#"><i class='bx bxl-linkedin' ></i></a>
        </div>
 
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>Create By <a href="">Meher</a> | All Right Reserved.</p>
    </div>
 
 
 
    <!-- Link To JS -->
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>