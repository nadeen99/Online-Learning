<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Course Academy</title>

    
         <!-- Render all elements Nomally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font icon Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700&family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    </head>
    <body class="antialiased">
        
        <!-- Start Header -->
    <header>
      <div class="container">
        <a href="#" class="logo">The Courses Academy</a>
        <nav>
          <ul class="main-nav">
            <li><a href="#articles">Courses</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#features">Features</a></li>
            <li>
              <a href="#">Other Links</a>
              <!-- start mega menu -->
              <div class="mega-menu">
                <div class="image">
                  <img src="images/mega.png" alt="" />
                </div>
                <ul class="links">
                  <li>
                    <a href="#testimonials"
                      ><i class="far fa-comments fa-fw"></i> Testimonials</a
                    >
                  </li>
                  <li>
                    <a href="#team"
                      ><i class="far fa-user fa-fw"></i> Instructors</a
                    >
                  </li>
                  <li>
                    <a href="#services"
                      ><i class="far fa-building fa-fw"></i> Services</a
                    >
                  </li>
                  <li>
                    <a href="#our-skills"
                      ><i class="far fa-check-circle fa-fw"></i> Our Skills</a
                    >
                  </li>
                  <li>
                    <a href="#work"
                      ><i class="far fa-clipboard fa-fw"></i> How It Works</a
                    >
                  </li>
                </ul>
                <ul class="links">
                  <li>
                    <a href="#events"
                      ><i class="far fa-calendar-alt fa-fw"></i> Events</a
                    >
                  </li>
                  <li>
                    <a href="#stats"
                      ><i class="far fa-chart-bar fa-fw"></i> Stats</a
                    >
                  </li>
                  <li>
                    <a href="#discount"
                      ><i class="fas fa-percent fa-fw"></i>Request A Discount</a
                    >
                  </li>
                </ul>
              </div>
              <!-- End mega menu -->
            </li>
            @if (Route::has('login'))
                    @auth
                       <div class="user_profile">
                          <a href="{{ url('/home') }}" class="user_name">{{ Auth::user()->firstName }}</a>
                          <span class="material-symbols-outlined">person</span>
                        </div>

                    @else
                      <li>  <a href="{{ route('login') }}">Log in</a> </li>

                        @if (Route::has('register'))
                         <li>   <a href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
            @endif
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
      <div class="container">
        <div class="text">
          <h1>Welcome</h1>
          <p>
            Level up your learning with Free digital transformation and
            technology courses. These Free courses won't be around forever,
            Enroll Today.
          </p>
          <a href="{{ route('register') }}">Get Started</a>
        </div>
        <div class="image">
          <img src="images/main.png" alt="" />
        </div>
      </div>
      <a href="#articles" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->

    <!-- Start ARTICLES -->
    <div class="articles" id="articles">
      <h2 class="main-title">Courses</h2>
      <div class="container">
        <div class="box">
          <img src="images/digital.jpeg" alt="" />
          <div class="text">
            <h3>Digital Marketing</h3>
            <p>
            You will master all marketing fundamentals, create content, manage ads, optimize search results, and measure and optimize with Google Analytics. marketing fundamentals, create content, manage ads
          </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/data.png" alt="" />
          <div class="text">
            <h3>Data Analysis</h3>
            <p>
              
            You will master to manipulate and prepare data for analysis, create visualizations for data exploration, and use your data skills to tell a story with data.to tell a story with data data exploration, and use your data.
               </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/web.png" alt="" />
          <div class="text">
            <h3>Web Development</h3>
            <p>
            Through 3 courses, you will master to build high-quality websites and dynamic applications to create stunning user experiences for the web. build high-quality websites and dynamic applications
             </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/cloud.jpg" alt="" />
          <div class="text">
            <h3>Cloud</h3>
            <p>
            You will master to deploy, test, and monitor cloud applications on Azure, thereby preparing learners for success on Microsoft’s AZ-400 DevOps Engineer Expert certification exam. 
            </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/testing.jpg" alt="" />
          <div class="text">
            <h3>Software Testing</h3>
            <p>
            You will become a professional SW tester starting from mastering API testing with hands-on database fundamentals to mobile application testing and more! 
            </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/mobile.jpeg" alt="" />
          <div class="text">
            <h3>Mobile Development</h3>
            <p>
            Become a professional Mobile developer to star creating a diverse portfolio of projects and applications  professional Mobile developer to star creating a diverse portfolio
            </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/embedded.jpg" alt="" />
          <div class="text">
            <h3>Embedded Systems</h3>
            <p>
            Enter the Embedded Systems field by getting hands-on practice in embedded systems.field by getting hands-on practice in embedded systems
            </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
        <div class="box">
          <img src="images/sql.jpg" alt="" />
          <div class="text">
            <h3>SQL</h3>
            <p>
            Master SQL, the core language for Big Data analysis, and enable insight-driven decision-making and strategy for your business.the core language for Big Data analysis
            </p>
          </div>
          <div class="info">
            <a href="#">Read More</a>
            <i class="fas fa-long-arrow-alt-right"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- End ARTICLES -->
    <div class="spikes"></div>
    <!-- Start gallery -->
    <div class="gallery" id="gallery">
      <div class="container">
        <div class="box">
          <div class="image">
            <img src="images/gallery-01.png" alt="" />
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/gallery-02.png" alt="" />
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/gallery-03.jpg" alt="" />
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/gallery-04.png" alt="" />
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/gallery-05.jpg" alt="" />
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/gallery-06.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- End gallery -->
    <!-- Start features -->
    <div class="features" id="features">
      <h2 class="main-title">Features</h2>
      <div class="container">
        <div class="box quality">
          <div class="img-holder">
            <img src="images/features-01.jpg" alt="" />
          </div>
          <h2>Quality</h2>
          <p>
            We provide Quality to insure that every students well understand.
          </p>
          <a href="">More</a>
        </div>
        <div class="box time">
          <div class="img-holder">
            <img src="images/features-02.jpg" alt="" />
          </div>
          <h2>Time</h2>
          <p>
          Improve user-accessibility and time flexibility to engage learners in the learning process.

          </p>
          <a href="">More</a>
        </div>
        <div class="box passion">
          <div class="img-holder">
            <img src="images/features-03.jpg" alt="" />
          </div>
          <h2>communication</h2>
          <p>
            We always communicate with students to insure that they well learned.
          </p>
          <a href="">More</a>
        </div>
      </div>
    </div>
    <!-- End features -->
    <div class="spikes"></div>
    <!-- Start testimonials -->
    <div class="testimonials" id="testimonials">
      <h2 class="main-title">Testimonials</h2>
      <div class="container">
        <div class="box">
          <img src="images/avatar-01.png" alt="" />
          <h3>Mohamed Sherif</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="unfilled far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="images/avatar-02.png" alt="" />
          <h3>Shady Mahmoud</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="unfilled far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="images/avatar-03.png" alt="" />
          <h3>Nabil Farouk</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="unfilled far fa-star"></i>
            <i class="unfilled far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="images/avatar-04.png" alt="" />
          <h3>Osama Mohamed</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="unfilled far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="images/avatar-05.png" alt="" />
          <h3>Yousef Ashraf</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="unfilled far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
        <div class="box">
          <img src="images/avatar-06.png" alt="" />
          <h3>Amr Mahmoud</h3>
          <span class="title">Full Stack Developer</span>
          <div class="rate">
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
            <i class="filled fas fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et
            reiciendis voluptatum, amet est natus quaerat ducimus
          </p>
        </div>
      </div>
    </div>
    <!-- End testimonials -->

    <!-- Start team -->
    <div class="team" id="team">
      <h2 class="main-title">Instructors</h2>
      <div class="container">
        <div class="box">
          <div class="data">
            <img src="images/avatar-04.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Yousef Mohamed</h3>
            <p>Software Testing Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-06.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Mohamed Nasr</h3>
            <p>Embedded Systems Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-01.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Ahmed Sherif</h3>
            <p>SQL Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-02.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Waleed Ahmed</h3>
            <p>Digital Marketing Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-03.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Mahmoud Nasr</h3>
            <p>Data Analysis Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-04.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Ramy Fathy</h3>
            <p>Mobile Development</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-05.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Bahaa Ramy</h3>
            <p>Cloud Instructor</p>
          </div>
        </div>
        <div class="box">
          <div class="data">
            <img src="images/avatar-06.png" alt="" />
            <div class="social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="info">
            <h3>Sameh Mohamed</h3>
            <p>Web Development</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End team -->
    <div class="spikes"></div>
    <!-- Start services -->
    <div class="services" id="services">
      <div class="dots dots-up"></div>
      <div class="dots dots-down"></div>
      <h2 class="main-title">Services</h2>
      <div class="container">
        <div class="box">
          <i class="fas fa-user-shield fa-4x"></i>
          <h3>Security</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-tools fa-4x"></i>
          <h3>Fixing Issues</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-map-marked-alt fa-4x"></i>
          <h3>Plans</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-laptop-code fa-4x"></i>
          <h3>learning</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-palette fa-4x"></i>
          <h3>Easy use</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn fa-4x"></i>
          <h3>Discounts</h3>
          <div class="info">
            <a href="#">Details</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End services -->
    <!-- Start skills -->
    <div class="our-skills" id="our-skills">
      <h2 class="main-title">Our Skills</h2>
      <div class="container">
        <img src="images/skills.png" alt="" />
        <div class="skills">
          <div class="skill">
            <h3>Cloud <span>90%</span></h3>
            <div class="progress">
              <span style="width: 90%"></span>
            </div>
          </div>
          <div class="skill">
            <h3>WEB Development <span>95%</span></h3>
            <div class="progress">
              <span style="width: 95%"></span>
            </div>
          </div>
          <div class="skill">
            <h3>Software Testing <span>85%</span></h3>
            <div class="progress">
              <span style="width: 85%"></span>
            </div>
          </div>
          <div class="skill">
            <h3>Embedded Systems <span>75%</span></h3>
            <div class="progress">
              <span style="width: 75%"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End skills -->
    <div class="spikes"></div>
    <!-- Start How it works -->
    <div class="work" id="work">
      <h2 class="main-title">How to apply ?</h2>
      <div class="container">
        <img src="images/work-steps.png" alt="" />
        <div class="info">
          <div class="box">
            <img src="images/work-steps-1.png" alt="" />
            <div class="text">
              <h3>Register</h3>
              
            </div>
          </div>
          <div class="box">
            <img src="images/work-steps-2.png" alt="" />
            <div class="text">
              <h3>Go to your classroom</h3>
             
            </div>
          </div>
          <div class="box">
            <img src="images/work-steps-3.png" alt="" />
            <div class="text">
              <h3>Just click on course you interested in</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End How it works -->
    <!-- Start Events -->
    <div class="events" id="events">
      <h2 class="main-title">Latest Events</h2>
      <div class="container">
        <img src="images/events.png" alt="" />
        <div class="info">
          <div class="time">
            <div class="unit">
              <span>08</span>
              <span>Days</span>
            </div>
            <div class="unit">
              <span>07</span>
              <span>Hours</span>
            </div>
            <div class="unit">
              <span>55</span>
              <span>Minutes</span>
            </div>
            <div class="unit">
              <span>45</span>
              <span>Seconds</span>
            </div>
          </div>
          <div class="text">
            <h2>Tech Masters Event 2022</h2>
            <p>
              Attend Our Event
            </p>
          </div>
        </div>
        <div class="subscribe">
          <form action="">
            <input type="email" placeholder="Enter Your Email" />
            <input type="submit" value="Subscribe" />
          </form>
        </div>
      </div>
    </div>
    <!-- End Events -->
    <div class="spikes"></div>
    
    
    <!-- Start stats -->
    <div class="stats" id="stats">
      <h2>Our Awesome Stats</h2>
      <div class="container">
        <div class="box">
          <i class="far fa-user fa-2x fa-fw"></i>
          <span>150</span>
          <h3>Clients</h3>
        </div>
        <div class="box">
          <i class="fas fa-code fa-2x fa-fw"></i>
          <span>135</span>
          <h3>Projects</h3>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia fa-2x fa-fw"></i>
          <span>50</span>
          <h3>Countries</h3>
        </div>
        <div class="box">
          <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
          <span>500</span>
          <h3>Money</h3>
        </div>
      </div>
    </div>
    <!-- End stats -->
    <!-- Start Discount -->
    <div class="discount" id="discount">
      <div class="image">
        <div class="content">
          <h2>We Have A Discount</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi
            asperiores consectetur, recusandae ratione provident necessitatibus,
            cumque delectus commodi fuga praesentium beatae. Totam vel similique
            laborum dicta aperiam odit doloribus corporis.
          </p>
          <img src="images/discount.png" alt="" />
        </div>
      </div>
      <div class="form">
        <div class="content">
          <h2>Request A Discount</h2>
          <form action="">
            <input type="text" placeholder="Your Name" class="input" />
            <input
              type="email"
              placeholder="Your Email"
              class="input"
              name=""
              id=""
            />
            <input
              type="tel"
              placeholder="Your Phone"
              class="input"
              name=""
              id=""
            />
            <textarea
              name=""
              placeholder="Tell us About Your Needs"
              class="input"
              id=""
            ></textarea>
            <input type="submit" value="Send" />
          </form>
        </div>
      </div>
    </div>
    <!-- End Discount -->
    <!-- Start Footer -->
    <div class="footer">
      <div class="container">
        <div class="box">
          <h3>Nadeen</h3>
          <ul class="social">
            <li>
              <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="youtube">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
          <p class="text">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus
            nulla rem, dignissimos iste aspernatur
          </p>
        </div>
        <div class="box">
          <ul class="links">
            <li>
              <a href="#">Important Link 1</a>
            </li>
            <li>
              <a href="#">Important Link 2</a>
            </li>
            <li>
              <a href="#">Important Link 3</a>
            </li>
            <li>
              <a href="#">Important Link 4</a>
            </li>
            <li>
              <a href="#">Important Link 5</a>
            </li>
          </ul>
        </div>
        <div class="box">
          <div class="line">
            <i class="fas fa-map-marker-alt fa-fw"></i>
            <div class="info">Egypt, Giza, The Pyramids</div>
          </div>
          <div class="line">
            <i class="far fa-clock fa-fw"></i>
            <div class="info">Business Hours: From 10:00 To 18:00</div>
          </div>
          <div class="line">
            <i class="fas fa-phone-volume fa-fw"></i>
            <div class="info">
              <span>+20123456789</span>
              <span>+20198765432</span>
            </div>
          </div>
        </div>
        <div class="box footer-gallery">
          <img src="images/gallery-01.png" alt="" />
          <img src="images/gallery-02.png" alt="" />
          <img src="images/gallery-03.jpg" alt="" />
          <img src="images/gallery-04.png" alt="" />
          <img src="images/gallery-05.jpg" alt="" />
          <img src="images/gallery-06.png" alt="" />
        </div>
      </div>
      <p class="copyright">
        All Rights Reserved &copy; NADEEN
        <i class="heart fa fa-heart c-main"></i>
      </p>
    </div>
    <!-- End Footer -->
    </body>
</html>
