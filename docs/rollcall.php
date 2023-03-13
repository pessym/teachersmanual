<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>SmartShule Teachers Portal</title>

  <!-- Styles -->
  <link href="../assets/css/page.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../inc/header2.css">

  <!-- Favicons -->
  <link rel="icon" href="../assets/img/amold.ico">

</head>

<body>
  <!-- Navbar -->

  <?php include '../inc/e-classroomnavbar.php' ?>
  <!-- /.navbar -->


  <!-- Header -->
  <?php include '../inc/header2.php' ?>

  <!-- /.header -->


  <!-- Main Content -->
  <main class="main-content">

    <div class="container">
      <div class="row">


        <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Sidebar
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
          <?php include '../inc/sidebar2.php' ?>

        <!--
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          | Content
          |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
          !-->
        <div class="col-md-2 col-xl-9 ml-md-auto py-1"  style="margin-top:100px">
          <article>

            <h2>Roll Call</h2>
            <p class="lead">
            A teacher assigned as the <b>class teacher or subject teacher</b> can take roll call during class time(lesson time) or even in remedial times.
            On clicking the <b style="color:palevioletred;">Roll Call</b> tab, a list of classes a teacher has been assigned will be display. <br>
            A teacher can either add new roll call by clicking <b class="text-primary">+Add New</b> button adjacent to the class whose roll call is to taken
            or view roll call that was already added by clicking on the<b CLASS="text-warning"> View</b> button.
            </p>

            <hr>

            <div class="code-preview">
              <img src="../manual_images/img/otherimages/rollcall.jpg" class="img-fluid" alt="Responsive image">
            </div>

            <hr>
          </article>
          
          <div class="row justify-content-around m-4 mb-6">
                <div class="col-md-7 img">
                <div class="code-preview">
              <img src="../manual_images/img/images/add roll call1.jpg" class="img-fluid" alt="Responsive image">
               </div>
                    <hr>
                </div>
                <div class="col-md-5 content">
                <article>
            <h2>Create new Rollcall</h2>
            <p class="lead">
              To add new roll call:
              <ul style="list-style:square;">
                <li>Click on <b class="text-primary">+ Add New </b> button adjacent to the class whose roll call is to added.</li>
                A form will be displayed as shown.
                <li>Select the <b>date and the attendance for the period of time.</b></li>
                <strong>If all students are present you can click on the checkbox besides the word present. If a student is absent, check the student name 
                and click on checkbox under absent.</strong>
                A teacher can also add comment on the reason why the student is absent.
                <li>Click <b class="text-primary">Save</b> to save on the changes done</li>
                <li>Click on <b class="text-success">View  </b> button to view register or edit the already existing one.</li>
              </ul>
            </p>
            <hr>
           

            <hr>
          </article>
                </div>
              </div>
              <div class="row justify-content-around m-4 mb-6">
                  <div class="col-md-5 content">
                    <article>
                        <h3>View Roll Call</h3>
                        <p class="lead">
                          To view a list of roll calls taken for a class:
                          <ul style="list-style:circle">
                            <li>Click on <b class="text-warning"> View</b> Button adjacent to the class selected.</li>
                            <li>Click on the <b class="text-success">View Register</b> button to view a previously added roll call.</li>
                            <li>To edit a register, click on the <b style="color:blueviolet;">Edit</b> button adjacent to the register. </li>
                          </ul>
                        </p>
                      </article>
                  </div>
                  <div class="col-md-7 img">
                      <div class="code-preview">
                        <img src="../manual_images/img/otherimages/viewrollcall.jpg" class="img-fluid" alt="Responsive image">
                      </div>
                      <hr>
                </div>
        </div>
      

      </div>
    </div>
  </main>
  <!-- /.main-content -->


 

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-md-3 text-center text-md-right offset-xl-9">
            <a href="https://smartshule.com/">©Smartshule. All Rights Reserved.</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.footer -->


  <!-- Scripts -->
  <script src="../assets/js/page.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>