<style type="text/css">

* {
  border: 0;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Roboto", sans-serif;
}

h2 {
  padding: 16px 0;
}

h1,
h2 {
  font-family: "Playfair Display", serif;
}

h1 {
  font-size: 30px;
}

h3,
p {
  padding: 10px 0 0px;
}

.container {
  max-width: 900px;
  margin: 0 auto;
}

body {
  background: #14203b;
}

button {
  margin-top: 15px;
}

/*=====================================
  
  Nav Bar Styling 
  
=====================================*/
.top-bar {
  width: 100%;
  padding: 8px;
  background: #cf1874;
  color: #f4f4f4;
  position: fixed;
  display: inline-block;
  z-index: 99;
}

nav {
  float: right;
  padding: 6px 20px 0 0;
}

.logo {
  font-family: "Birthstone Bounce", serif;
  float: left;
  padding: 10px;
}

.menu svg {
  position: relative;
  top: 1px;
}

nav ul li {
  display: inline-block;
  vertical-align: top;
}

nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #f4f4f4;
  font-size: 15px;
  transition: 0.3s;
}

nav ul li a:hover {
  color: #14203b;
  transition: 0.3s;
}

.sub-menu {
  display: none;
  z-index: 99;
  text-align: center;
  transition: 0.3s;
}

.menu-item:hover .sub-menu {
  display: block;
  position: absolute;
  top: 60px;
  background: #cf1874;
  width: 121px;
  transition: 0.3s;
}

.menu-item:hover .sub-menu:hover a:hover {
  background: #326986;
  color: white;
  width: 91px;
}

/*=========================================

Footer Styling 

=========================================*/

footer {
  text-align: center;
  background: #14203b;
  color: #f4f4f4;
  padding: 40px 0px;
}

footer a {
  color: white;
  font-size: 18px;
  margin: 0 3px;
  transition: 0.3s;
}

footer a:hover {
  color: #c5c2c2;
  transition: 0.3s;
}

footer p {
  padding: 5px;
}
</style>


<header>
        <section class="top-bar">
            <h1 class="logo">Brittany Pigott</h1>
            <nav>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li class="menu-item"><a href="#portfolio">PORTFOLIO <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="webdesign.html">WEB DESIGN</a></li>
                            <li class="menu-item"><a href="branding.html">BRANDING</a></li>
                            <li class="menu-item"><a href="print.html">PRINT</a></li>
                            <li class="menu-item"><a href="booklets.html">BOOKLETS</a></li>
                            <li class="menu-item"><a href="social.html">SOCIAL</a></li>
                            <li class="menu-item"><a href="misc.html">MISC</a></li>
                        </ul>
                    </li>
                    <li><a href="#form">CONTACT</a></li>
                </ul>
            </nav>
        </section>
    </header>

<div class="container">
    <h1>Sorry something went wrong with your submission</h1>
    <p>Please try again</p>
<div>

<footer>
    <p class="website">Website By Brittany Pigott</p>
    <span>FOLLOW ME</span>
    <a href="https://facebook.com" target="blank"><i class="fab fa-facebook-square"></i></a>
    <a href="http://instagram.com" target="blank"><i class="fab fa-instagram"></i></a>
    <a href="http://twitter.com" target="blank"><i class="fab fa-twitter"></i></a>
</footer>