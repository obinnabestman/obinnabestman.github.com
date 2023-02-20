
<?php
include("includes/header.php");
?>
 

    <div id="body">
        <p>YOU'RE JUST A STEP AWAY FROM TAKING YOUR IDEAS TO THE </p> <br>
        <h1 data-aos="zoom-out-right">ONLINE SPACE</h1> <br>
        <span>
        I would love to be part of the journey in taking that idea online!!!
        </span>
    </div>

    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom">

    <form action="contact.php" method="post" id="form" >
        <p>CONTACT FORM</p>
        <label for="name">NAME:</label> <br>
        <input type="text" name="name" id="name" placeholder="Full Name" required> <br>
        <label for="email">EMAIL:</label> <br>
        <input type="email" name="email" id="name" placeholder="Email" required> <br>
        <label for="phone">PHONE NUMBER</label> <br>
        <input type="number" name="phone" id="phone" placeholder="Optional"> <br>
        <label for="text">WRITE YOUR MESSAGE:</label> <br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea> <br>
        <input type="submit" name="submit" id="submit" value="Send">
    </form>
    </div>
   

    <?php
    include("includes/footer.php");
    ?>

