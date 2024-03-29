<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Log-in Form</title>
        <link rel="stylesheet" type="text/css" href="login.css">


        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/navbar.css">

       
    </head>
    <body>
        <header>
            <section>
                
        <div id="container">
            
            <div id="shopName"><a href=""> <b>Tech</b>Ecom </a></div>
                
                <div id="search">
                <input type="text" name="searchBox" placeholder="Search">
                <input type="button" value="Search">
            </div>
            <div id="user">
                <a href=""> <i class="fas fa-shopping-cart addedToCart"><div id="badge"> 0 </div></i></a>
    
            </div>
    
            <div class="navbar">
                <input type="checkbox" name="" id="btn-menu" class="hidden">
                    <label for="btn-menu" class="icon-menu">
                <i class="fa fa-bars bars"></i>
                
                </label>
                <div class="navbar_div">
                    
                    <ul class="navbar_div_ul">
                        
                      <li class="navbar_div_li"><a href="Mainpage.html">Ballina</a></li>
                      <li class="navbar_div_li"><a href="Produktet.html">Produktet</a></li>
                      <li class="navbar_div_li"><a href="Rreth Nesh.html">RrethNesh</a></li>
                      <li class="navbar_div_li"><a href="Kontakt.html">Kontakti</a></li>
                      <li class="navbar_div_li"><a href="Login.html">Login</a></li>
                      <li class="navbar_div_li"><a href="Register.html">Register</a></li>
                      <li class="navbar_div_li"><a href="Shopping.html">Shopping</a></li>
                    </ul>     
            </div>
        </div>
            </div>
    
        </section>
    </header>
    <main>
      <div class="main">

        <div class="wrapper">
          <header>Login Form</header>
          <form action="#">
            <div class="field email">
              <div class="input-area">
                <input type="text" placeholder="E-mail Adresa">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">E-mail nuk duhet te jete e zbrazet</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" placeholder="Fjalekalimi">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Fjalekalimi nuk duhet te jete i zbrazet</div>
            </div>
            <div class="pass-txt"><p><a href="Register.html">Keni harruar fjalekalimin?</p></a></div>
            <input type="submit" value="Login">
          </form>
          <div class="sign-txt">Nese nuk je i anetarsuar ende? <a href="Register.html">Regjistrohu</a></div>
        </div>
        <script src="login.js"></script>
</div>
</main>
    <footer>
        <div class="footer">
          <div class="content1">
            <div class="left box">
              <h2>Te drejtat me ligj</h2>
              <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptatibus magni vitae, ipsa omnis quidem repellendus possimus. Consequatur doloremque unde temporibus deleniti, minus dolore earum fugiat sapiente autem, sed ipsum minima, rerum voluptatem consectetur nemo? Numquam obcaecati sapiente commodi illum!</p>
                <div class="social">
                  <a href="https://facebook.com/" target="_blank"><img src="C:\Users\Admin\Documents\GitHub\Webfaqja\photos\facebook.jpg"><span class="fab fa-facebook-f"></span></a>
                  <a href="https://twitter.com/" target="_blank"><img src="C:\Users\Admin\Documents\GitHub\Webfaqja\photos\twitter.jpg"><span class="fab fa-twitter"></span></a>
                  <a href="https://instagram.com/" target="_blank"><img src="C:\Users\Admin\Documents\GitHub\Webfaqja\photos\instagram.jpg"><span class="fab fa-instagram"></span></a>
                  <a href="https://youtube.com/" target="_blank"><img src="C:\Users\Admin\Documents\GitHub\Webfaqja\photos\youtube.jpg"><span class="fab fa-youtube"></span></a>
                </div>
              </div>
            </div>
            <div class="center box">
              <h2>Adresa</h2>
              <div class="content">
                <div class="place">
                  <span class="fas fa-map-marker-alt"></span>
                  <span class="text">Bill Klinton, Kosova</span>
                </div>
                <div class="phone">
                  <span class="fas fa-phone-alt"></span>
                  <span class="text">+383-44-111-111</span>
                </div>
                <div class="email">
                  <span class="fas fa-envelope"></span>
                  <span class="text">email@gmail.com</span>
                </div>
              </div>
            </div>
            <div class="right box">
              <h2>Navbar</h2>
              <div class="content">
                <div class="nav1">
                  <ul>
                    <li><a href="#">Ballina</a></li>
                    <li><a href="#">Produktet</a></li>
                    <li><a href="#">RethNesh</a></li>
                    <li><a href="#">Kontakti</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom">
            <center>
              <span class="credit">Ndertuar nga <a href="https://www.google.com">Leke Kelmendi</a> | </span>
              <span class="far fa-copyright"></span><span> 2022 Te gjitha te drejtat e rezervuara</span>
            </center>
          </div>
         </div>
        </footer>
        <div class="scroll-bar" ></div>
    </body>
</html>