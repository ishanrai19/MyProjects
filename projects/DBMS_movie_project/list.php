<?php
session_start();
/*$em=$_GET['email'];
echo($em);

echo($_SESSION["email"]);
*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Ticket</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous"
        />
      </head>
      <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
          src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"
        ></script>
      </body>
    </html>
    <div id="navbar">
      <ul>
        <li class="item"><a href="#">Home</a></li>
        <li class="item"><a href="#">Content</a></li>
        <li class="item"><a href="#">Contact Us</a></li>
        <li class="item"><a href="#">About</a></li>
      </ul>
    </div>

    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./images/img1.jpg" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/img2.jpg" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/img3.jpeg" alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/img6.jpeg" alt="Third slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/img7.jpeg" alt="Third slide" />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <h4 id="head1">Movies On Stream</h4>
    <div class="box">
      <div class="smbox">
        <img src="./images/rrr_poster.jpeg" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt8178634/?ref_=ext_shr_lnk"
          >RRR</a
        >
        <!-- <iframe width="250px" height="150px" src="https://www.youtube.com/embed/lu1K-PFdNDw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              -->
        <br />
        <button class="btn">
          <a href="booking.php?name=RRR  ">Book Now</a>
        </button>
      </div>
      <div class="smbox">
        <img src="./images/movie1.jpg" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt10811166/?ref_=ext_shr_lnk"
          >The Kashmir Files</a
        >
        <br />
        <?php
          $movie_name="The Kashmir Files";
          ?>
        <button class="btn">
          <a href="booking.php?name=The Kashmir Files">Book Now</a>
        </button>
      </div>
      <div class="smbox">
        <img src="./images/attack_poster.jpg" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt7529298/?ref_=ext_shr_lnk"
          >Attack</a
        >
        <br />
        <button class="btn">
          <a href="booking.php?name=Attack">Book Now</a>
        </button>
      </div>
      <div class="smbox">
        <img src="./images/no_time_to_die.jpg" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt2382320/?ref_=ext_shr_lnk"
          >No Time To Die</a
        >
        <br />
        <button class="btn">
          <a href="booking.php?name=No Time To Die ">Book Now</a>
        </button>
      </div>
      <div class="smbox">
        <img src="./images/pathan_poster.jpg" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt12844910/?ref_=ext_shr_lnk"
          >Pathaan</a
        >
        <br />
        <button class="btn">
          <a href="booking.php?name=Pathaan">Book Now</a>
        </button>
      </div>
      <div class="smbox">
        <img src="./images/DoctorStrange.webp" alt="MOve11" />
        <br />
        <a
          class="link"
          href="https://www.imdb.com/title/tt9419884/?ref_=ext_shr_lnk"
          >Doctor Strange in the Multiverse of Madness</a
        >
        <br />
        <button class="btn">
          <a href="booking.php?name=Dr. Strange">Book Now</a>
        </button>
      </div>
    </div>
  </body>
</html>
