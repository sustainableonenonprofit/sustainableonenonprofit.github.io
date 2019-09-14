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
    <link href="https://fonts.googleapis.com/css?family=Abel|Cuprum|Fira+Sans|Merriweather|Muli|Open+Sans+Condensed:300|Oswald|Pacifico|Roboto|Work+Sans&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php include 'header.php' ?>

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


Idea: width: 50% for 2 panels, one side with image of selling or campaigning
and the other saying designs for the environment or some slogan


-->



    <div class="section">
      <h1 class="headers"><br>Mission Statement</h1>
      <p id="line">____________________________</p>
      <p id="mission-para">We hope to engage our community and beyond to contribute to protecting our environment.
         As a group of high school students based in Massachusetts, our campaign hopes to encourage youth to be
         leaders in their community and engage in environmental activism.
         100% of our fundraising profits goes towards helping the environment.

<!--
         Our mission is to engage our community and beyond in protecting the environment through environmental awareness
         and fundraising. As a student-based campaign in Massachusetts, we seek to encourage youth to be leaders in their
         communities and get involved in environmental activism.

-->
      </p>
      <!-- We are a group of students based in Massachusetts.


      <p>Art for a better future</p>
-->
    </div>




      <div class="container">
        <div class="img">
          <img src="assets/quarry_square.jpg" alt="quarry photo">
        </div>
        <div class="text">
          <h1><br>Why Sustainability is Important</h1>
          <p>Why Sustainability is Important</p>
          <button class="learn-more">Learn More</button>
        </div>
      </div>




    <div class="what-we-do">
      <div class="image-container">
        <img src="assets/quarry.JPG">
      </div>
      <div class="text-container">
        <h1><br>Why Sustainability is Important</h1>
        <p>lots of reasons why
         </p>
         <button class="learn-more">Learn More</button>
       </div>
    </div>


    <div class="what-we-do">
      <div class="image-container">
        <img src="assets/main_image.jpg">
      </div>
      <div class="text-container">
        <h1><br>Products</h1>
        <p>We sell products handmade by us, a group of high school students.
           From stylish stickers to encourage your reusable water bottle usage to
           reusable shopping bags, our products will help you reduce your carbon footprint.
           <br><br>100% of funds earned goes to organizations saving the environment.
         </p>
         <button class="learn-more">Shop Now</button>
       </div>
    </div>


      <div class="what-we-do">
        <div class="image-container">
          <img src="assets/leafed_plants.jpg">
        </div>
        <div class="text-container">
          <h1><br>What We Do</h1>
          <ul>
            <li>Fundraise</li>
            <li>Provide Educational Resources</li>
            <li>Local Events/Conferences</li>
            <li>Coming Soon: High School Ambassadors Program</li>
          <ul>
          <p>
            To see what we have been doing lately, check out our blog!
           </p>
           <button class="learn-more">Blog</button>
         </div>
      </div>




    <div class="what-we-do">
      <div class="image-container">
        <img src="assets/lakeview.jpg">
      </div>
      <div class="text-container">
        <h1><br>Get Involved</h1>
        <p>
          We need your help in our success. Become a volunteer or a supporter today!

         </p>
         <button class="learn-more">Contact</button>
       </div>
    </div>







    <?php include 'footer.php' ?>

  </body>
</html>
