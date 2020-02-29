<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Max Miedinger was fomous for creating the Neue Haas Grotesk typeface in 1957 that was renamed Hellvetica in 1960. Marketed as a symbol of cutting-edge Swiss technology, Helvetica achived immediate global success.">
    <meta name="keywords" content="Max Miedinger, Arial, Helvetica, max, miedinger, magicsk, magicsk.eu, max miedinger quotes, max miedinger helvetica, max miedinger wiki, miedinger about">
    <meta name="author" content="Rastislav Brna">
    <title>Max Miedinger | magicsk.eu</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">  </head>

  <body>
    <div class="container">
  <section class="background">
    <div class="content-wrapper">
      <p class="title" id="f">Max Miedinger</p>
      <img id="profile" src="img/profile.png" alt="profile" title="Max Miedinger">
      <p class="subtitle">He was fomous for creating the Neue Haas Grotesk typeface in 1957 that was renamed Hellvetica in 1960. Marketed as a symbol of cutting-edge Swiss technology, Helvetica achived immediate global success.</p>
      <p class="icotext">24th December 1910 Zurich, Switzerland &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 8th March 1980 Zurich, Switzerland</p>
    </div>
  </section>
  <section class="background">
    <div class="content-wrapper">
      <p class="title" id="s">Helvetica</p>
      <p class="subtitle">– neo-grotesque or realst design <br> – its use became a hallmark of the Internationsal Typographic Style<br>– its become one of most populartypefaces of 20th century
 </p>
    </div>
  </section>
  <section class="background">
    <div class="content-wrapper">
      <p class="title" id="t">Arial and Helvetica</p>
      <p class="subtitle">Arial was inspirated by Helvetica and replaced Helvetica on newer versions of Windows. MacOS X still useing Helvetica as main Sans Serif and it not have Arial as default font. </p>
    </div>
  </section>
  <section class="background">
    <div class="content-wrapper">
      <p class="title">Sources and information</p>
      <div class="rectangles">
        <div class="rectangle">
          <img src="img/source.png" alt="source">
          <p class="subtitle">If you want to know more here is soure of all text.</p>
          <a href="https://en.wikipedia.org/wiki/Max_Miedinger" target="_blank"><button type="button" name="button">MORE</button></a>
        </div>
        <div class="rectangle">
          <img src="img/img.png" alt="image">
          <p class="subtitle">Looking for source of images ? Here you are.</p>
          <button type="button" class="btn btn-lg" name="button" data-toggle="modal" data-target="#mimg">SOURCE</button>
        </div>
        <div class="rectangle">
          <img src="img/contact.png" alt="contact">
          <p class="subtitle">You found any mistake ? Contact us here.</p>
          <button  type="button" class="btn btn-lg" name="button" data-toggle="modal" data-target="#mcontact">CONTACT</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal source-->
    <div id="mimg" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Image source</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p><a href="http://www.hypocritedesign.com/wp-content/uploads/2017/02/MaxMiedinger-900x473.jpg">http://www.hypocritedesign.com/wp-content/uploa...</a><br>
               <a href="https://multimediaman.files.wordpress.com/2013/05/max-miedinger.jpg">https://multimediaman.files.wordpress.com/20...</a><br>
               <a href="https://apricotjuice.files.wordpress.com/2012/03/typography-assignment.png?w=547">https://apricotjuice.files.wordpress.com/201...</a><br>
               <a href="https://www.designprintdigital.com/wp-content/uploads/2012/04/Helvetica.jpg">https://www.designprintdigital.com/wp-cont...</a><br></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!-- Modal contact-->
    <div id="mcontact" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Contact</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form action="db_connect.php" method="post">
           <div class="modal-body">
              <input type="text" placeholder="Your name" name="name" class="form-control">
              <input type="email" placeholder="Your e-mail" name="email" class="form-control">
              <textarea placeholder="Description" rows="3" name="description" class="form-control" style="margin-top: 5%;"></textarea>
              <input type="submit" name="submit" class="btn">
           </div>
           <div class="modal-footer">
              <p class="copy">&copy; 2018 Rastislav Brna</p>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<script src='js/lodash.min.js'></script>
<script src='js/jquery.js'></script>
<script src="js/parallax.js"></script>
<script src="js/bootstrap.js"></script>

<a href="#" id="dot1" onclick="javascript:previous()"></a>
<a href="#" id="dot2" onclick="javascript:next()"></a>


</body>
</html>