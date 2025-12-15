<!DOCTYPE html>
<html>
  <head>
    <title>online Shakespeare store website</title>

    <!--- swiper  css cdn link-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">
        <img src="kindle.jpg.webp" alt="" />
      </a>

      <i class="bx bx-menu" id="menu-icon"></i>
      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#overview">Overview</a>
        <a href="#author">Author</a>
        
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact</a>
        <a href="my_store.php">My Store</a>
      </nav>
    </header>

    <!-- home section -->
    <section class="home" id="home">
      <div class="home-content">
        <div class="content">
          <h2>Shakespeare World<br />template to present<br />Shakespeare</h2>
          <p>
            Welcome to the unique world of literature. A literature that no writer’s living reputation can compare to that of Shakespeare, whose plays, written in the late 16th and early 17th centuries for a small repertory theatre, are now performed and read more often and in more countries than ever before. The prophecy of his great contemporary, the poet and dramatist Ben Jonson, that Shakespeare “was not of an age, but for all time,” has been fulfilled.
          </p>

         
        </div>
        <div class="image">
          <img src="shakespeare.png.png" alt="" style="background:transparent;"/>
        </div>
      </div>
    </section>

    

  

    <section id="overview">
      <div class="topic">
        <h3>shakespear books</h3>
        <p>
          The Shakespeare apocrypha is a group of plays and poems that have sometimes been attributed to Shakespeareor.
        </p>
      </div>

      <div class="row">
        <div class="col-2">
          <img src="emma.png" alt="" style="width: 50px" />
          <h4>Emma</h4>
          <p>centers around Emma Woodhouse, a young woman living in the village of Highbury, who is confident in her matchmaking abilities.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
          <input type="hidden" name="book" value="Emma">
          <input type="hidden" name="price" value="15">
          <button type="submit" class="order-btn">Order Now</button>
          </form>


        </div>

        <div class="col-2">
          <img src="kingLiar.png" alt="" style="width: 50px" />
          <h4>king Lear</h4>
          <p>explores themes of power, betrayal, madness, and the complexities of familial relationships through the story of an aging king who divides his kingdom among his daughters.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
  <input type="hidden" name="book" value="king Lear">
  <input type="hidden" name="price" value="15">
  <button type="submit" class="order-btn">Order Now</button>
</form>


        </div>

        <div class="col-2">
          <img src="macbeth.png" alt="" style="width: 50px" />
          <h4>Macbeth</h4>
          <p>explores themes of ambition, power, guilt, and the supernatural through the story of a Scottish general whose desire for power leads to his downfall.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
  <input type="hidden" name="book" value="Macbeth">
  <input type="hidden" name="price" value="15">
  <button type="submit" class="order-btn">Order Now</button>
</form>


        </div>

        <div class="col-2">
          <img src="othelo.png" alt="" style="width: 50px" />
          <h4>Othello</h4>
          <p>explores themes of jealousy, love, betrayal, and racism through the story of Othello, a Moorish general in Venice, who is manipulated into doubting his wife Desdemona's fidelity.</p>
          <p class="total">$<span>15</span></p>
          
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="book" value="Othello">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
          </form>

        


        </div>

        <div class="col-2">
          <img src="AsYouLikeIt.png" alt="" style="width: 50px" />
          <h4>As You Like It</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="book" value="As You Like It">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
          </form>


        </div>

        <div class="col-2">
          <img src="midsummer.png" alt="" style="width: 50px" />
          <h4>A midsummer Night's Dream</h4>
          <p>explores themes of love, magic, and transformation through intertwining plots involving Athenian lovers and fairies in a mystical forest.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="book" value="A midsummer Night's Dream">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
          </form>


        </div>

        <div class="col-2">
          <img src="muchAdo.png" alt="" style="width: 50px" />
          <h4>Much Ado About Nothing</h4>
          <p>explores themes of love, deception, and reconciliation, culminating in a series of comedic events that lead to the characters' eventual happiness.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="book" value="Much Ado About Nothing">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
          </form>


        </div>

        <div class="col-2">
          <img src="tempest.png" alt="" style="width: 50px" />
          <h4>The Tempest: The Cartoon Illustrated Edition</h4>
          <p> features a skilfully edited version of the original text, preserving key speeches and maintaining the play's momentum while omitting less relevant passages.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
           <input type="hidden" name="book" value="The Tempest">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
         </form>


        </div>

        <div class="col-2">
          <img src="julius.png" alt="" style="width: 50px" />
          <h4>Julius Caesar</h4>
          <p> explores themes of power, betrayal, and the moral dilemmas of leadership through the story of Caesar's rise and fall in ancient Rome.</p>
          <p class="total">$<span>15</span></p>
          <form action="add_to_cart.php" method="post">
            <input type="hidden" name="book" value="Julius Caesar">
            <input type="hidden" name="price" value="15">
            <button type="submit" class="order-btn">Order Now</button>
          </form>


        </div>
      </div>
    </section>

    <dive style="padding: 50px;">
      
    </dive>
    <div class="review">
      <div class="topic">
        <h3 class="text" style="color: white">check out video review on Shakespeare</h3>
        <p class="text" style="text-align: center; color: white">
  
        </p>
      </div>
      <div class="video">
        <iframe width="1260" height="709" src="https://www.youtube.com/embed/K-aAUwAFZlQ" title="هل قام شكسبير حقاً بكتابة مسرحياته؟" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>

  <br style="padding: 50px;"></br>
    <section id="author">
      <div class="topic">
        <h3>about the author</h3>
      </div>
      <div class="author-row">
        <div class="col-3">
          <img class="author-img" src="author.png" alt="" />
        </div>
        <div class="col-3">
          <h4>William Shakespeare</h4>
          <p>
            Widely esteemed as the greatest writer in the English language, William Shakespeare (1564-1616) was an actor and theatrical producer in addition to writing plays and sonnets. Dubbed "The Bard of Avon," Shakespeare oversaw the building of the Globe Theatre in London, where a number of his plays were staged, the best-known of which include Romeo and Juliet, Hamlet, and Macbeth. The First Folio, a printed book of 36 of his comedies, tragedies, and history plays, was published in 1623.
          </p>

          

          <img class="signature-img" src="signature.svg" alt="" />

          <div class="social">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-google"></i>
          </div>
        </div>
      </div>
    </section>

  

    <section id="testimonials">
      <div class="topic">
        <h3 class="text">what our readers say</h3>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <p>
              Shakespeare’s writing is beautiful and deep. His ability to mix tragedy, love, and humor is unmatched. King Lear and Othello are unforgettable.
            </p>

            <img src="girl.jpg" alt="" />
            <h4>-Alice Boga</h4>

            <span>CED ,apple inc</span>
          </div>
          <div class="swiper-slide slide">
            <p>
              Shakespeare’s works are timeless. The emotions, conflicts, and characters still feel real even today. Every play teaches something about human nature.”
            </p>

            <img src="images.jpeg" alt="" />
            <h4>-John Doe</h4>

            <span>Director , Google inc.</span>
          </div>
          <div class="swiper-slide slide">
            <p>
              I used to think Shakespeare was difficult, but once I started reading his plays, I realized how powerful and relatable the stories are. Macbeth completely changed how I see ambition.
            </p>

            <img src="Unknown.jpeg" alt="" />
            <h4>-Jesica Doe</h4>

            <span>Web Developer</span>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    
    <section id="contact">
      <div class="topic">
        <h3>drop us a message</h3>
        <p>
          Have you read any of Shakespeare’s works?
We’d love to hear your thoughts. Share your experience, opinions, or favorite plays with us, and your review may be featured on our website.
        </p>
      </div>
      <div class="contact-row">
        <form action="">
          <input type="text" placeholder="Name" />
          <input type="text" placeholder="Enter Email" />
          <textarea cols="30" rows="10" placeholder="Message"></textarea>

          <div class="button">
            <button class="submit">submit</button>
          </div>
        </form>
      </div>
    </section>

    <!--- google map section start--->

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.486954751527!2d44.
                00645087536958!3d36.227663199764926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40071f56e1eee737%3A0x6a172bc3c201121e!2sCatholic%20University%20in%20Erbil!5e0!3m2!1sen!2siq!4v1719775581506!5m2!1sen!2siq"
        width="100%"
        height="400"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>

    <!--- footer map section start--->

    <section class="footer">
  <div class="social">
    <a href="https://facebook.com" target="_blank">
      <i class="bx bxl-facebook"></i>
    </a>

    <a href="https://twitter.com" target="_blank">
      <i class="bx bxl-twitter"></i>
    </a>

    <a href="https://google.com" target="_blank">
      <i class="bx bxl-google"></i>
    </a>

    <a href="https://linkedin.com" target="_blank">
      <i class="bx bxl-linkedin"></i>
    </a>
  </div>
</section>


      <span>&copy; copyright all right reserved by codeslaves design</span>
    </section>

    <!--scroll reveal -->

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- customer js file -->
    <script src="./script.js"></script>
  </body>
</html>
