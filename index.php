<?php
require('includes/header.php')
?>
<nav class="navbar bg-dark navbar-dark " id="navbar">
    <div>
        <h1 class="am"><a class="navbar-brand amar" href="" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3" id="navbarNav">
        <h3 class=""><a class="nav-link menu" href="index.php">Home</a></h3>
        <h3 class=""><a class="nav-link" href="work.php">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.php">About</a></h3>
        <h3 class=""><a class="nav-link" href="contact.php">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->
<div class="container mb-4">
    <div class="row  d-flex justify-content-center">
        <div class="col-8 d-flex justify-content-center mt-3 ">
            <img src="assets/img/developpeur-full-stack.jpg" class="img-fluid img-amar" alt="amar">
        </div>
        <div class="col-8">
            <h1 class="text-center">About me</h1>
            <article class="aboutMe">
                Ero uno studente di Master 2 in fisica, chimica e scienze dei materiali.
                Sono sempre stato molto appassionato di computer, soprattutto di linguaggi
                di programmazione. Ho iniziato ad imparare da solo. Ho comprato molti corsi
                online per imparare le basi. Attraverso il training online per <span style="font-weight: bold">sviluppatori
                FullStack</span> su <a href="https://www.start2impact.it/percorsi/sviluppo-web-app/" target="_blank">Start2Impact</a>
                sono stato in grado di consolidare le mie conoscenze
                attraverso <a href="work.php">progetti</a> reali che ho portato a termine con successo<br/>.

                <a class="btn btn-outline-dark mt-4" href="about.php#suite">Learn more >></a>
            </article>
        </div><!-- /col-lg-8 -->
    </div><!-- /row -->
</div> <!-- /container -->
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center py-3">
            <h2>My SKILLS</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-around my-2 ">
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/javascript/Javascript.jpg" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/html5-css3.png.webp" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/reactjs/reactjs.png" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/wordpress/wordpress_page.jpg" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/php_mysql/images.png" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
        <div class="col-sm-4 d-flex justify-content-center">
            <img src="assets/img/nodejs/nodejs-frameworks.webp" class="img-responsive my-1 zoom  rounded-circle image" alt="">
        </div>
    </div>
    <hr>
</div>

<?php  include_once ('includes/footer.php') ?>
