<?php include_once "header.php"; ?>



<main>
    <section>
        <!-- navigation -->
    <a href="logout.php">Logout</a>
    
    </section>
  
    <section>
    <!-- main content here -->
    <?php 
     session_start();
     
    if($_SESSION['userid']==null)
    {
    }
    else
    {
       $userid=$_SESSION['userid'];
       echo "<h2> Welcome ". $userid."</h2>";
    }



    ?>
</section>
</main>

<?php include_once "footer.php"; ?>
</body>
</html>