<?php include('templates/header.php'); ?>

<article>

<!-- Main content container -->
 <!-- justify-content-center align-items-center -->
 <div class="row sizebody pt-3"> <!-- beginning of row -->


  <!-- Left box -->
  <section class="col-lg-1 col-md-2 h-100 justify-content-center align-self-top">
    <ul class="nav flex-column">
      <li class="nav-item border bg-light"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item border bg-light"><a class="nav-link" href="about.php">Profile</a></li>
      <li class="nav-item border bg-light"><a class="nav-link" href="projects.php">Projects</a></li>
      <li class="nav-item border bg-light"><a class="nav-link" href="resume.php">resume</a></li>
      <li class="nav-item border bg-light"><a class="nav-link" href="contactme.php">Contact Info</a></li>
    </ul>
  </section>


  <!-- Middle Box -->
  <section class="col-lg-7 h-100 justify-content-center text-center align-self-top">
    <p class="border border-dark bg-light text-center align-self-top h-10">
      <!-- this is where I will tell about myself -->
         I am a christian and I love Jesus. <br/>
         I am a father of two boys and I am married to a wonderfull woman. <br/>
         I enjoy the outdoors; fishing, camping, hiking, and all around adventuring. <br/>
         I am an audiophile and I find enjoyment in all forms of music. <br/>
         And I also have an avid interest in the cinema, movies old and new, as well as live theatre.
    </p>
    <img src="img\Mountain1.jpg" alt="Picture 1">


  </section>


  <!-- Right Box -->
  <!-- this is for all of the Pictures -->
  <section class="col-lg-4 h-50 pt-5 justify-content-center align-self-top">
            <img src="img/profilepic1.jpg" alt="Picture of Alan Barnes"/>

    <p>Information on pictures</P>
  </section>



</div> <!-- end of row-->

</article>

<aside role="complementary">
</aside>

<?php include('templates/footer.php'); ?>
