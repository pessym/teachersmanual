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
  <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
  <link rel="icon" href="../assets/img/favicon.png">
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
        <div class="col-md-2 col-xl-9 ml-md-auto py-1" style="margin-top:100px">
          <article>

            <h2>My Students Tab</h2>
            <p class="lead">
              The MyStudentPage is divided into two sections:<strong>My Assigned Classes</strong> and <strong>Student List</strong>
              This page will only list all the classes that a teacher has been assigned to either as the subject teacher or the class teacher.
            </p>

            <hr>

            <div class="code-preview">
              <img src="../manual_images/img/images/my students.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <hr>
          </article>
        </div>
  
         <div class="col-md-2 col-xl-9 ml-md-auto py-1">
           <div class="row justify-content-around m-4 mb-6">
             <div class="col-md-7 img">
               <div class="code-preview">
                 <img src="../manual_images/img/otherimages/assignedclasses.jpg" class="img-fluid" alt="Responsive image">
               </div>
               <hr>
             </div>
             <div class=" col-md-5 content">
               <article>
               <h2>View of Assigned Classes</h2>
                <p class="lead">
                  A teacher can view a list of the students he/she has been assigned to upon clicking any of the classes
                  under My Assigned Classes. from the list, a teacher can view a selected <strong>Student Profile</strong>.
                  <br> This view will show:
                  <ul class="lead" style="list-style:alpha;">
                    <li>List of all Classes a teacher is assigned to.</li>
                    <li>List of all subjects assigned in the class.</li>
                    <li>Number of students in the class in a green button.</li>
                    <li>Whether a taecher is the class teacher of a class, usually in a red button</li>
                  </ul>
                </p>
                 <hr>
               </article>
             </div>
           </div>
          </div>

             <div class="col-md-2 col-xl-9 ml-md-auto py-1">
               <div class="row justify-content-around m-4 mb-6">
                  <div class=" col-md-5 content">
                      <article>
                      <h2>Student List</h2>
                        <p class="lead">
                        My student list displays the list of students in a specific selected class from the <strong>My Assigned Classes</strong>
                        A teacher can view a student profile's and add Hobbies and favourites  for a selected student.
                        To perform these functions:
                          <ul class="lead" style="list-style:alpha;">
                            <li>Click <b>Record Hobbies and Favourites</b> button to add hobbies and favourite of a selected student.</li>
                            <li>Click <b>View Students Hobbies</b> button to view hobbies and favourite added for students.</li>
                            <li>To view students profile, click on the <b>View</b> button.</li>

                          </ul>
                        </p>
                        <hr>
                      </article>
                    </div>

                  <div class="col-md-7 img">
                    <div class="code-preview">
                      <img src="../manual_images/img/otherimages/studentlist.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <hr>
                  </div>
                 
                </div>
              </div>
                <div class="col-md-2 col-xl-9 ml-md-auto py-1">
                <h3>A View of a Students' Profile</h3> <br>
                <p class="lead">
                To view students profile, click on the <b>View</b> button adjacent to the student.
                </p>
                  <div class="row justify-content-around ">
                 
                      
                      <div class="col-md-6 img">
                        <div class="code-preview">
                          <img src="../manual_images/img/otherimages/viewstudentprofile.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <hr>
                      </div>
                      
                      <div class="col-md-6 img">
                        <div class="code-preview">
                          <img src="../manual_images/img/otherimages/viewstudentprofilemore.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                        <hr>
                      </div>
                    
                  </div>
                </div>

  </main>
  <!-- /.main-content -->


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row gap-y align-items-center">

        <div class="col-md-9">
          <div class="nav justify-content-center justify-content-md-start">
            <a class="nav-link" href="http://hr-guide.co.ke/">Home</a>
            <a class="nav-link" href="#">Talk to one of us</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link" href="#">Contact</a>
          </div>
        </div>

        <div class="col-md-3 text-center text-md-right">
          <a href="http://thetheme.io/">© Keypad Systems</a>
        </div>
      </div>
    </div>
  </footer><!-- /.footer -->


  <!-- Scripts -->
  <script src="../assets/js/page.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>