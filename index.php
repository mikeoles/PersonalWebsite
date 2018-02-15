<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: Mike Oles">

    <title>Michael Oles</title>
    <link rel="icon" href="./img/icon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="./css/index.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
  </head>

  <body>

    <nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
      <h1>Michael Oles</h1>
          </div>
          <div class="col-xs-12 col-sm-6">
            <ul>
              <li><a href="#fbsection1">Main</a></li>
              <li><a href="contact">Contact</a></li>
              <li><a href="#fbsection2">Skills</a></li>
              <li><a href="#experience">Experience</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div id="cbp-fbscroller" class="cbp-fbscroller">
      <section id="fbsection1">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <img class="profile" src="img/profile2.jpg" alt="Michael Oles">
            </div>

            <div class="col-sm-6 col-xs-12">
              <div id="basicInfo">
                <p>University of Pitsburgh</p>
                <p>Graduated 2017</p>
                <p>Bachelors In Computer Science </p>
                <p>Minor In Fitness </p>
              </div>

              <div id="resumeDocument">
                <a href="resume.php" target="_blank">View My Resume</a>
              </div>
            </div>
          </div>
        </div>

        <div id="map"></div>
      </section>

      <section id="fbsection2" class="codeInfo" class="appear">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <section id="languages" class="appear">
                <h2>Languages</h2>
                <ul>
                  <li><i class="devicon-java-plain colored"></i> Java</li>
                  <li><i class="devicon-c-plain colored"></i> C</li>
                  <li><i class="devicon-cplusplus-plain colored"></i> C++</li>
                  <li><i class="devicon-php-plain colored"></i> PHP</li>
                  <li><i class="devicon-html5-plain colored"></i> HTML</li>
                  <li><i class="devicon-css3-plain colored"></i> CSS</li>
                  <li><i class="devicon-jquery-plain colored"></i> JQuery</li>
                  <li><i class="devicon-javascript-plain colored"></i> JavaScript</li>
                  <li><i class="devicon-mysql-plain colored"></i> MySQL</li>
                </ul>
              </section>
            </div>

            <div class="col-sm-6 col-xs-12">
              <section id="tools" class="appear">
                <h2>Tools</h2>
                <ul>
                    <li><i class="devicon-android-plain colored"></i> Android</li>
                    <li><i class="devicon-git-plain colored"></i> Git</li>
                    <li><i class="devicon-github-plain colored"></i> GitHub</li>
                    <li><i class="devicon-bitbucket-plain colored"></i> BitBucket</li>
                    <li><i class="devicon-windows8-plain colored"></i> Windows</li>
                    <li><i class="devicon-linux-plain colored"></i> Linux</li>
                    <li><i class="devicon-confluence-plain colored"></i> Confluence</li>
                    <li><i class="devicon-slack-plain colored"></i> Slack</li>
                    <li><i class="devicon-zend-plain colored"></i> Zend</li>
                </ul>
              </section>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <section id="courses" class="appear">
                <h2>Courses Taken</h2>
                <ul>
                  <?php
                    $courses = array("Java","Data Structures", "Discrete Structures", "Assembly Language", "System Software (C)", "Algorithm Implementation", "Operating Systems", "Formal Methods", "Web Design", "Quality Assurance", "Android Programming", "Simulation");
                    foreach($courses as &$value){
                      echo "<li>" . $value . "</li>";
                    }
                  ?>
                </ul>
              </section>
            </div>
            <div class="col-sm-6 col-xs-12">
              <section id="concepts" class="appear">
                <h2>Concepts</h2>
                <ul>
                  <?php
                    $concepts = array("Object Oriented Design", "Data Structures", "Operating Systems", "Memory Allocation", "Recursion", "Searching/Sorting", "Algorithms", "Complexity", "Reflection", "Threading", "Software Testing", "Agile/Scrum", "Software Development Life Cycle");
                    foreach($concepts as &$value){
                      echo "<li>" . $value . "</li>";
                    }
                  ?>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </section>

      <section id="experience">
        <h2>Experience</h2>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="appear">
                  <h3>Showclix: Production Support Engineering</h3>
                  <img class="appear" href="https://www.showclix.com/" src="img/showclix.jpg" alt="ShowClix">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Avarint: Software Engineer Intern</h3>
                <img class="appear" src="img/avarint.jpg" alt="Avarint">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Pitt Computing: Consultant</h3>
                <img class="appear" src="img/seal.jpg" alt="Cssd" width="500px" height="500px">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Try-It Distributing: Merchandiser</h3>
                <img class="appear" src="img/tryit.jpg" alt="Tryit" width="500px" height="500px">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Lowes: Unload Team/Assembly</h3>
                <img class="appear" src="img/lowes.jpg" alt="Tryit" width="500px" height="500px">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Pennapps Hackathon</h3>
                <img class="appear" src="img/pennapps.png" alt="Pennapps">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>Big Idea Competition Finals</h3>
                <img class="appear" src="img/bigidea.jpg" alt="Randall Big Idea">
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="appear">
                <h3>SwiftSet Android App</h3>
                <img class="appear" src="img/swiftset.jpg" alt="SwiftSet">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6HoxAssIjgdTcSjwhQ8sOlIcYVSkbu30&callback=initMap">
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
