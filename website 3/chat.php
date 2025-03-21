<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpgradeU</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="UpgradeU.css">
    <link rel="stylesheet" href="./Style/chat.css">
</head>

<body>
    <!--Navigation-->
    <header id="header">
        <nav>
            <a href="./index.html">Home</a>
            <a href="./about.html">About</a>
            <a href="./blog.html">Blogs</a>
            <a href="./courses.html">Courses</a>
            <a href="./contact.html">Contact</a>
            <a href="">Feedback</a>
            <a href="./signin.html"><button class="btn" >Sign in</button></a>
        </nav>
    </header>
    <section id="home">
            <img src="images1\logo.svg.PNG">
            <div>
                <h2>Send your feedback</h2>
            </div>
            <div class="send">

            <form action="send.php" method="post">
                <div class="dashboard-section">
                    <h4>Do you have any inquaries? </h4>
                    <div class="input-box">
                        <input type="text" name="name"  placeholder="name" required >
                        <input type="text" name="message"  placeholder="feedback" required >
                        
                    </div>
                    <button type="submit" class="btn" name="send_btn"> Send</button>
                  
                </div>
        </form>

            </div>
    </section>
    <footer>
      <div class="footerContainer">
          <div class="footer-img-container">
              <img src="images1/footer.jpeg"/>
          </div>
          <div>
              <p>📞0779590902</p>
              <p>📧samalkarathnasooriya@gmail.com</p>

          </div>
          <div class="socialIcons">
          <a href="https://www.facebook.com/UpgradeU01?mibextid=ZbWKwL"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://www.linkedin.com/in/samalkarathnasooriya?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://youtube.com/@upgradeusamalkarathnasoori419?si=gTj4xmG5tKyMwEcG"><i class="fa-brands fa-youtube"></i></a>
          <a href="https://www.tiktok.com/@samalka_rathnasooriya?_t=8hiCBts1isC&_r=1"><i class="fa-brands fa-tiktok"></i></a>
          </div>
      </div>   
  </footer> 
    
</body>
</html>