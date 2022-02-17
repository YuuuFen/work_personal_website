<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>個人網站</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar -->
    <div class="container">
      <nav class="navbar">
        <div class="nav-center">
          <div class="nav-logo">
            <a href="#home" style="color: #555;"><img src="./img/fake_signature_1_small.png" alt=""></a>
          </div>
          <div class="nav-menu">
            <div class="w-menu">
              <ul>
                <li><a href="#home">HOME&nbsp;</li>
                <li><a href="#about">ABOUT&nbsp;</li>
                <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar end -->

    <!-- Greeting -->
    <div
      id="home"
    >
      <div id="greeting-line">
        <h1>Let's work together.</h1>
      </div>
    </div>
    <!-- Greeting end -->

    <!-- Options -->
    <div class="opt" id="opt">
      <div class="opt_mode">
        <div>
          <p>... and inspire for better solutions</p>
        </div>
        <div class="div_mode" style="display: flex; justify-content: center;">
          <label class="mode">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
        </div>
      </div>
      <div class="opt_lang">
        <div>
        <p>... by courageous conversations</p>
        </div>
        <div class="div_lang">
          <div>
            <label class="options" checked>English
              <input type="radio" checked="checked" name="radio">
            </label>
          </div>
          <div>
            <label class="options">Chinese
              <input type="radio" name="radio" disabled>
            </label>
          </div>
          <div>
            <label class="options">Japanese
              <input type="radio" name="radio" disabled>
            </label>
          </div>
        </div>
      </div>
    </div>
    <!-- Option end -->

    <!-- About -->
    <div id="about">
      <!-- pro pic & info -->
      <div id="pro-pic-info">
        <div id="div-pro-pic">
        <img
          src="./img/proPic2.jpeg"
          alt=""
          id="pro-pic"
        />
        </div>
        <div id="info">
          <ul>
            <li>Yu-Fen Huang</li>
            <li>Taipei City, Taiwan</li>
            <li>
              <a href="https://github.com/YuuuFen"><i class="fab fa-github" style="font-size: 2em;"></i></a>
              <a href="https://www.linkedin.com/in/yu-fen-huang-886a6215a/"><i class="fab fa-linkedin" style="font-size: 2em;"></i></a
              >
            </li>
          </ul>
        </div>
      </div>
      <!-- pro pic & info end -->
      <!-- intro -->
      <div id="about_me">
        <div>
          <h2>About Me</h2>
        </div>
        <div id="intro">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aliquam at nemo voluptas neque quis soluta esse incidunt, dolore voluptate minus? Quibusdam fuga accusantium, accusamus eveniet, porro perspiciatis nostrum enim adipisci voluptatum molestiae magni sint aut cumque non aliquid, voluptates dolore! Non corrupti laboriosam modi labore ad dolorum laudantium dignissimos.
        </div>
      </div>
      <!-- intro end -->
      <!-- Features -->
      <div>
        <div id="features">
          <h2>Features</h2>
          <div id="skill_set">
            <span class="skill">HTML</span>
            <span class="skill">CSS</span>
            <span class="skill">CSS</span>
            <span class="skill">CSS</span>
          </div>
        </div>
      </div>
      <!-- Features end -->
    </div>
    <!-- About end -->


    <!-- Gallery start -->
    <div id="gallery">
      <div><h2>Gallery</h2></div>
      <div class="card-body">
        <div class="card-img"><img src="https://fakeimg.pl/320x180/ffeecc/" alt=""></div>
        <div>
          <ul>
            <li><h3 class="card-title">Calender</h3></li>
            <li>one sentence</li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="card-img"><img src="https://fakeimg.pl/320x180/ffeecc/" alt=""></div>
        <div>
          <ul>
            <li><h3 class="card-title">Calender</h3></li>
            <li>one sentence</li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="card-img"><img src="https://fakeimg.pl/320x180/ffeecc/" alt=""></div>
        <div>
          <ul>
            <li><h3 class="card-title">Calender</h3></li>
            <li>one sentence</li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="card-img"><img src="https://fakeimg.pl/320x180/ffeecc/" alt=""></div>
        <div>
          <ul>
            <li><h3 class="card-title">Calender</h3></li>
            <li>one sentence</li>
          </ul>
        </div>
      </div>
    </div>

    </div>
    <!-- Gallery end -->

    <!-- Contact start -->
    <div id="contact_footer">
      <div></div>
      <div id="contact">
        <div><h1>&bull; Keep in Touch &bull;</h1></div>
        <div class="underline"></div>
        <form action="#" method="post" id="contact_form">
          <div class="name">
            <label for="name"></label>
            <input type="text" placeholder="My name is" name="name" id="name_input" required>
          </div>
          <div class="email">
            <label for="email"></label>
            <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
          </div>
          <div class="company">
            <label for="name"></label>
            <input type="text" placeholder="My company is" name="company" id="company_input">
          </div>
          <div class="subject">
            <label for="subject"></label>
            <input type="text" name="subject" id="subject_input" placeholder="Subject" required>
          </div>
          <div class="message">
            <label for="message"></label>
            <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
          </div>
          <div class="submit">
            <input type="submit" value="Send Message" id="form_button" />
          </div>
        </form>
      </div>
      <!-- Contact end -->
      <div id="footer-con">
        <footer>
          <div id="copyright">
            <span>Made by &nbsp;</span>
            <a href="./back/signin.php">Yu-Fen Huang</a>
            <span itemprop="copyrightHolder"
              >, with love in 2022 &nbsp;</span>
            <span>
                <i class="fa fa-heart"></i>
            </span>
          </div>
        </footer>
      </div>
    </div>


    <!-- JS -->
    <!-- JS end -->
  </body>
</html>
