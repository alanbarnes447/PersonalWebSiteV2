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
    <div class="border border-dark bg-light text-center align-self-top h-10">
      <!-- this is for my resume -->

      <!--list of education-->
      <h1>Education</h1>
      <div class="resume">
      <p><b>University of Illinois Springfield</b>, Springfield, IL    						Expected 2020<br>
      Bachelor of Science in Computer Science</p>

      <p><b>Elgin Community College</b>, Elgin, IL 							2016<br/>
      Associate of Science, Honors, Phi Theta Kappa, Mu Alpha Theta</p>

      <p><b>Affiliations</b> – IEEE Computer Society Chicago Chapter, Association for Computing Machinery</p>

      </div>

      <!--list of specific classes taken-->
      <div class="resume">
        <h1>Specific Coursework</h1>
        <ul>
          <li>Java 1 and Java 2</li>
          <li>Data Structures and Algorithms</li>
          <li>Programming Languages</li>
          <li>Operating Systems</li>
          <li>Computer Organization</li>
          <li>Database Systems</li>
          <li>Web Design</li>
          <li>Web Programming</li>
        </ul>
      </div>

      <!--list of languages I have studied-->
      <div class="resume">
        <p><b>PROGRAMMING LANGUAGES:</b> JAVA, C, C#, C++, HTML, CSS, RUBY, PYTHON, JAVASCRIPT, SQL, SCHEME, POWER MILL MACRO LANGUAGE<br/>
        <b>OPERATING SYSTEMS:</b>  MS WINDOWS</p>

      </div>

      <!--list of job experience-->
      <div class="resume">
        <p><b>CNC PROGRAMMER AND SUPERVISOR</b> | Chicago Mold Engineering      	3/2012-Present<br/>
        Oversee automation in manufacturing of molds for the plastics industry including:</P>

        <ul>
          <li>Development of custom macros using C# and the Power Mill Macro programming language.</li>
          <li>Development of custom post processor cycles using JavaScript</li>
          <li>Programming of custom and production machining projects using Power Mill.<li>
          <li>CAD development of custom parts and mold components.</li>
          <li>Sourcing of tooling, work holding, and supplies.</li>

      </div>

      <div class="resume">
        <p><b>OPERATIONS MANAGER</b> | Freedom Tool 	9/2003-2/2012<br/>
        Established and led daily operations for newly opened subsidiary specializing in deep hole drilling.</p>

        <ul>
          <li>Built highly efficient and productive team from the ground up including training and coaching.</li>
          <li>Supported company vision by setting goals and objectives along with establishing policies.</li>
          <li>Ensured personnel wellbeing and company property through principles of risk reduction.</li>

      </div>

      <div class="resume">
        <p><b>APPRENTICE MOLD MAKER</b> | Chicago Mold 	4/2000 to 9/2003<br/>
        Undertook an apprenticeship to gain skills for the processes of mold making.</p>

      </div>



      <div class="resume">
      </div>

      <p></p>
    </div>


  </section>


  <!-- Right Box -->
  <!-- this is for all of the Pictures -->
  <section class="col-lg-4 h-100 pt-5 justify-content-center align-self-top img-fluid fit-pic">
    <div class="h-100">
      <img src="img/gradpic2.jpg" alt="Picture of Alan Barnes"/>

    <p>Information on pictures</P>
    </div>
  </section>



</div> <!-- end of row-->

</article>

<aside role="complementary">
</aside>

<?php include('templates/footer.php'); ?>
