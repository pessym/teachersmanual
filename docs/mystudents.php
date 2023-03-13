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
        <div class="col-md-2 col-xl-9 ml-md-auto py-1" style="margin-top:100px">
          <article>

            <h2>My Students Tab</h2>
            <p class="lead">
              The MyStudentPage is divided into two sections:<strong>My Assigned Classes</strong> and <strong>Student List.</strong>
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
                  under <b> My Assigned Classes </b> sidebar. From the list, a teacher can view a selected <strong>Student Profile</strong>.
                  <br> This view will show:
                  <ul class="lead" style="list-style:alpha;">
                    <li>List of all Classes a teacher is assigned to.</li>
                    <li>List of all subjects assigned in the class.</li>
                    <li>Number of students in the class in <B CLASS="text-success"> a green background view.</B> </li>
                    <li>Whether a teacher is the class teacher of a class, usually in <B class="text-danger"> a red background view.</B></li>
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
                        My student list displays the list of students in a specific selected class from the <strong>My Assigned Classes.</strong>
                        A teacher can view a student profile's and add Hobbies and favourites  for a selected student <strong>if assigned as the class teacher.</strong>
                        To perform these functions:
                          <ul class="lead" style="list-style:alpha;">
                            <li>Click <b class="text-primary">Record Hobbies and Favourites</b> button to add hobbies and favourite of a selected student.</li>
                            <li>Click <b class="text-success">View Students Hobbies</b> button to view hobbies and favourite added for students.</li>
                            <li>To view students profile, click on the <b style="color:blueviolet;">View</b> button.</li>

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
                To view students profile, click on the <b style="color:blueviolet;">View</b> button adjacent to the student.
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