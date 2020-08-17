<?php
if (isset($_GET)){
    $mess=$_GET['message'];
    $error=$_GET['error'];
}
include_once (__DIR__.'/includes/header.php')
?>
<nav class="navbar bg-dark navbar-dark mb-4" id="navbar">
    <div>
        <h1><a class="navbar-brand amar" href="index.php" style="">AMAR SYLL</a></h1>
    </div>
    <div class="collapse navbar-collapse d-flex justify-content-end mr-3" id="navbarNav">
        <h3 class=""><a class="nav-link" href="index.php">Home</a></h3>
        <h3 class=""><a class="nav-link" href="work.php">Work</a></h3>
        <h3 class=""><a class="nav-link" href="about.php">About</a></h3>
        <h3 class="menu"><a class="nav-link" href="">Contact</a></h3>
    </div>
</nav>
<!--end Header-->
<!--Body-->

<div class="container">
    <h1 class="text-center">Contact me</h1>
    <p class="text-center text-success"><?php echo $mess ;?></p>
    <p class="text-center text-danger"><?php echo $error ;?></p>
    <div class="row contact d-flex justify-content-center ">
        <div class="col-10">
            <div class="row d-flex justify-content-center">
                <form action="mail.php" method="post" class="d-flex justify-content-center flex-column">
                    <div class="col-12 pt-2">
                        <input type="text" class="form-control form-group input py-1"  placeholder="name"
                               name="name">
                    </div>
                    <div class="col-12 pt-2">
                        <input type="email" class="form-control form-group input py-1" placeholder="email"
                               name="email">
                    </div>
                    <div class="col-12 pt-2">
                        <textarea class="form-control input" rows="5" placeholder="message"
                                  name="message"></textarea>
                    </div>
                    <div class="col-12 py-4">
                        <button type="submit" class="form-control btn btn-outline-dark" value="">Send message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--end Body-->
<hr style="width: 80% ;height: 5px">
<?php
include_once (__DIR__.'/includes/footer.php')
?>
