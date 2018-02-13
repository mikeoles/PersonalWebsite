<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="author: Mike Oles">

    <title>Contact</title>
    <link rel="icon" href="./img/icon.png">  

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css" />
</head>

  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="resume.php">Resume</a>
          </li>
        </ul>
      </nav>
    </header>

    <section id="topSection">
      <h1 class="name">
        Contact
      </h1>

      <h2 id="formTitle">Send Message</h2>
      <h2 id="altFormTitle">Cancel Message</h2>
    </section>

    <div class="signup-form">
      <form action="" method="POST" id="signupForm">

        <fieldset>
          <p class="warn" id=firstNameError></p>
          <h2 class="form=title">Name</h2>
          <input type="text" id="name" name="name"><br>
        </fieldset>

        <fieldset>
          <p class="warn" id=companyError></p>
          <h2 class="form=title">Company</h2>
          <input type="text" id="company"><br>
        </fieldset>

        <fieldset>
          <p class="warn"id=emailError></p>
          <h2 class="form-title">Email</h2>
          <input type="email" id="email" name="email">
        </fieldset>

        <fieldset>
          <h2 class="form-title">Comment</h2>
          <textarea rows="5" cols="50" id="comment" name="comment"></textarea>
        </fieldset>

        <br>
        <input type="submit" name="submit" value="Send" class="button">
        <input type="reset" value="Clear" class="button">
      </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $to = "oles@live.com";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = "New Website comment";
        $message = "From: " . $name . "\n\n" . $_POST['comment'];
        $headers = "From:" . $from;

        mail($to,$subject,$message,$headers);
        echo "Thank You! Message Sent";
        }
    ?>

    <section id="contactSection">
      <h3 class="contactInfo">
        Email:
      </h3>
      <p class="contactInfo">
        <a href="mailto:mbo10@pitt,edu?Subject=Website%20Contact" target="_top">mbo10@pitt.edu</a>
      </p>
      <h3 class="contactInfo">
        Github:
      </h3>
      <p class="contactInfo">
        <a href="https://github.com/mikeoles" target="_top">GitHub.com/MikeOles</a>
      </p>
      <h3 class="contactInfo">
        LinkedIn:
      </h3>
      <p class="contactInfo">
        <a href="https://linkedin.com/in/mikeoles" target="_top">LinkedIn.com/In/MikeOles</a>
      </p>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>
