<!-- Wamp server on desktop -->
<!-- Layout Example: https://www.elevationweb.org/best-nonprofit-websites/ -->
<!-- For side layout https://www.children.org/ -->


<!-- New layout examples

https://greenpeacefund.org/
https://www.nature.org/en-us/
https://plantchicago.org/
https://twloha.com/

-->

<!DOCTYPE html>
<html>
  <head>
    <title>Sustainable One</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sustainable One is">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Assistant|Cuprum|Fira+Sans|Merriweather|Muli|Open+Sans+Condensed:300|Oswald|Pacifico|Roboto|Work+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
        <a href="index.php"><img src="assets/logo_alpha_new.png" alt="logo"></a>
          <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="learn.php">Learn</a></li>
            <li><a href="store.php">Store</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
    </header>

    <!-- Top Navigation Menu -->
    <!--
    <div class="topnav">
      <a href="#home" class="active"><img src="assets/logo_line_alpha.png"></img></a>
      <div id="myLinks">
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
-->


    <div class="hero-image">
      <div class="hero-text">
          <h1 id="first-line">Campaign dedicated to improving the environment</h1>
          <p id="quote">"The natural environment sustains <br>the life of all beings universally"<br></p>
          <p id="quote-author">- Dalai Lama</p>

          <button id="kickstarter" onclick="window.open('https://www.kickstarter.com','_blank');">Support our Kickstarter!</button>

      </div>
    </div>

<!--
Learn
Get Involved
 - should be added to the navigation bar

-->

    <div class="section">
      <h1 class="headers"><br>Mission Statement</h1>
      <p id="line">____________________________</p>
      <p id="mission-para">We hope to engage our community and beyond to contribute to protecting our environment.
         As a group of high school students based in Massachusetts, our campaign hopes to encourage youth to be
         leaders in their community and understand environmental issues.
         100% of our fundraising profits goes towards helping the environment.
      </p>
    </div>

      <div class="container">
        <div class="img">
          <img src="assets/quarry_square.jpg" alt="quarry photo">
        </div>
        <div class="text">
          <h1><br>Why Sustainability is Important</h1>
          <p>Life on earth depends on what we do. Check our resources</p>
          <button class="learn-more" onclick="window.open('learn.php','_self');">Learn More</button>
        </div>
      </div>

      <div class="container">
        <div class="img">
          <img src="assets/main_image.jpg" alt="nature photo">
        </div>
        <div class="text">
          <h1><br>Products</h1>
          <p>We sell products handmade by us, a group of high school students.
             From stylish stickers to encourage your reusable water bottle usage to
             reusable shopping bags, our products will help you reduce your carbon footprint.
             <br><br>100% of funds earned goes to organizations saving the environment.</p>
             <button class="learn-more" onclick="window.open('about.php','_self');">About</button>
        </div>
      </div>


      <div class="container">
        <div class="img">
          <img src="assets/leafed_plants_square.jpg" alt="leafed plants photo">
        </div>
        <div class="text">
          <h1><br>What We Do</h1>
          <p>
            We hope to raise awareness of environmental issues through
            our fundraisers. We are currently working on creating environmental
            education resources and advocating for a more sustainable lifestyle through
            social media. In the future, we hope to host a local conference for high
            school students.
            To see what we have been doing lately, check out our blog!
           </p>
           <button class="learn-more" onclick="window.open('blog.php','_self');">Blog</button>
         </div>
      </div>

    <div class="container">
      <div class="img">
        <img src="assets/lakeview_square.jpg" alt="lakeview photo">
      </div>
      <div class="text">
        <h1><br>Get Involved</h1>
        <p>
          Subscribe to our newsletter and get the latest updates by following
          our social media accounts. Check out the bottom of the page!
          <br><br>
          In addition, feel free to contact us for more information about volunteering
          opportunities, product requests, and any questions.
         </p>
         <button class="learn-more" onclick="window.open('contact.php','_self');">Contact</button>
       </div>
    </div>

    <?php include 'footer.php' ?>

  </body>
</html>
