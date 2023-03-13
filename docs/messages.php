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
                <h2>Messages Tab</h2>
                <p class="lead">
                    On clicking this button a list of conversation between the teacher and the parent can be seen. A teacher can also
                    add a new message and select the sender as one of the parents and view the responses. 
                    <strong>Note that the Administrator can be able to view all conversations between the teachers and the parents.</strong> 
                </p>
                <hr>
                <div class="code-preview">
                <img src="../manual_images/img/otherimages/messages.jpg" class="img-fluid" alt="Responsive image">
                </div>

                <hr>
          </article>
        </div>

        <div class="col-md-2 col-xl-9 ml-md-auto py-1">
           <div class="row justify-content-around m-4 mb-6">
             <div class="col-md-7 img">
               <div class="code-preview">
                 <img src="../manual_images/img/otherimages/newmessage.jpg" class="img-fluid" alt="Responsive image">
               </div>
               <hr>
             </div>
             <div class=" col-md-5 content">
               <article>
               <h2>Add New Message</h2>
                <p class="lead">
                  To add a new message,
                  <ul class="lead" style="list-style:alpha;">
                    <li>Click on the <strong class="text-primary">+New Message</strong> button at the top right of the page.</li>
                    <li>Type the title/subject of the message, select the parent, type the message in the text box provided.</li>
                    <li>Click <strong style="color:pink;">Send</strong> to send the message.</li>
                    <li>Otherwise, click <strong class="text-danger">Cancel</strong> to reverse the action done.</li>
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
               <h2>View Responses</h2>
                <p class="lead">
                  To view responses of conversations between the teacher and a parent,
                  <ul class="lead" style="list-style:alpha;">
                    <li>Click on the<strong style="color:lightseagreen;"> View Responses</strong> button adjacent to the specific parent.</li>
                    <li>To add new message after a respond, click on the <b>Reply</b> text box.</li>
                    <li>Click <b class="text-primary">Send</b> button to send another message.</li>
                    <li>Click <b class="text-success">Back</b> button to return to the previous page.</li>

                  </ul>
                </p>
                 <hr>
               </article>
             </div>
             <div class="col-md-7 img">
               <div class="code-preview">
                 <img src="../manual_images/img/otherimages/viewresponses .jpg" class="img-fluid" alt="Responsive image">
               </div>
               <hr>
             </div>
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