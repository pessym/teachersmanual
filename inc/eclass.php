<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>SmartShule Teachers Portal Manual</title>

    <!-- Styles -->
    <link href="../assets/css/page.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/amold.ico"> 

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheDocs — Online Documentation Template">
    <meta property="og:description" content="A powerful, responsive, and high-performance html online documentation template which can help you rapidly develop your next software’s documentation.">
    <meta property="og:image" content="assets/img/og-img.jpg">
    <meta property="og:url" content="index.html">
    <meta name="twitter:card" content="summary_large_image">
  </head>

  <body>

  <style>
   ul li div{
    height:100%;
    padding:0px;
   }
   
  
    .nav-sidebar-hero li:hover{
        background-color:darkslateblue;
        color:antiquewhite;
        border-radius: 10px;
        color:white;
        display:block;
        padding:8px;

    }
    .dropdown, .dropdown span , .dropdown a {
        background-color:darkslateblue;
        color:antiquewhite;
        border-radius: 10px;
        color:white;
        display:block;
        padding:8px;
        
    }

    ul 
     .current, .current span, .current i, .current li div a {
        background-color:#F06292;
        padding:8px;
        padding-right:5px;
        color:antiquewhite;
        border-radius: 10px;
        color:white;
        display:block;
    }

    .current span, .current i{
        height:40px;
        padding-left:10px;
    }

    .nav-sidebar .nav-item>.nav-link.active {
        color:grey;

    }
    .nav-sidebar .nav-item>.nav-link.active i{
        margin:10px;
        padding-right:5px;
    }
    .nav-sidebar .nav-item>.nav-link.active span{
        margin-right:15px;
    }
    .nav-sidebar .nav-link.active+.nav{
        display:none;
    } 

    .nav-sidebar-hero .nav-item:hover .nav-link {
        color: white;   
    }

</style>
<?php
    $text = $_SERVER['REQUEST_URI'];

    $first = explode('/', $text);

    $last = end($first);
    $second = explode('.', $last);
    $to_match = $second[0];
?>

<div class="col-md-4 col-xl-3 order-last order-md-first">
            <hr class="d-md-none">
            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1">
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Overview <i class="nav-angle"></i></a>
                  
                </li>
				
				<li class="nav-item">
                  <a class="nav-link " href="#">My Students <i class="nav-angle"></i></a>
                  
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Eclassroom <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="typography.html">Diary</a>
                    <a class="nav-link" href="code.html">Exams</a>
                    <a class="nav-link" href="icon.html">Icon</a>
                    <a class="nav-link" href="image.html">Image</a>
                    <a class="nav-link" href="table.html">Table</a>
                    <a class="nav-link" href="video.html">Video</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Layout <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="navbar.html">Navbar</a>
                    <a class="nav-link" href="sidebar.html">Sidebar</a>
                    <a class="nav-link" href="toc.html">Table of content</a>
                    <a class="nav-link" href="utility.html">Utility classes</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Components <i class="nav-angle"></i></a>
                  <div class="nav">
                    <a class="nav-link" href="accordion.html">Accordion</a>
                    <a class="nav-link" href="alert.html">Alert</a>
                    <a class="nav-link" href="badge.html">Badge</a>
                    <a class="nav-link" href="button.html">Button</a>
                    <a class="nav-link" href="files.html">Files</a>
                    <a class="nav-link" href="form.html">Form</a>
                    <a class="nav-link" href="pagination.html">Pagination</a>
                    <a class="nav-link" href="palette.html">Palette</a>
                    <a class="nav-link" href="progress.html">Progress</a>
                    <a class="nav-link" href="scroll.html">Scroll</a>
                    <a class="nav-link" href="social.html">Social</a>
                    <a class="nav-link" href="steps.html">Steps</a>
                    <a class="nav-link" href="tab.html">Tab</a>
                  </div>
                </li>

              </ul>
            </aside>
          </div>
  </body>

</html>
