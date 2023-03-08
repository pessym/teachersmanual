<style>
   .li span, .li i{
    height:10px;
   }
   
   ul li div{
    height:100%;
    padding:0px;
   }
   
    ul li div a{
        height:50px;
        padding-top: 0px;
    }
    a .nav-link .active .current{
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
        padding:0px;
        padding-right:5px;
        color:antiquewhite;
        border-radius: 10px;
        color:white;
        display:block;
    }
    .current span, .current i{
        height:50px;
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

<div class="col-md-4 col-xl-3 order-last order-md-first sidebar">
   
            <hr class="d-md-none">
            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1" style="height:100vh;padding:0px;">
                <h3 style="color:darkslateblue;"><b> Sub Modules</b></h3>
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true" style="height:100vh;">
        
                <li class="nav-item li">
                  <a class="nav-link active <?php if (preg_match('/^(extraeclassroom)$/i', $to_match )) echo "current"; ?>" href="../docs/extraeclassroom.php" ><span> Introduction</span><i class="fa fa-users"></i> </a>
                  
                </li>
	
				<li class="nav-item navclass  <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo "dropdown"; ?>" href="#"> <span> Student Diary </span> <i class="nav-angle"></i></a>
                    <div class="nav li" <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo 'style="display:block"'; ?>>
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryacademics)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryacademics.php">Student Diary(Academics)</a>
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryextra)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryextra.php">Student Diary(Extra)</a>
            
                    </div>
                </li>
                <li class="nav-item navclass <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo "dropdown"; ?>" href="#"> <span> Exam Management </span> <i class="nav-angle"></i></a>
                    <div class="nav" <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo 'style="display:block"'; ?>>
                        <a class="nav-link <?php if (preg_match('/^(exammanagement)$/i', $to_match )) echo "current"; ?>" href="../docs/exammanagement.php">Exam Management(8.4.4/IGCSE)</a>
                        <a class="nav-link <?php if (preg_match('/^(cbcassessment)$/i', $to_match )) echo "current"; ?>" href="../docs/cbcassessment.php">CBC Assessment</a>
            
                    </div>
                </li>

                <li class="nav-item navclass <?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>Quizzes</span> <i class="nav-angle"></i></a>

                    <div class="nav"<?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'style="display:block;"'; ?>>
                        <a class="nav-link <?php if (preg_match('/^(q&a)$/i',$to_match )) echo "current"; ?>" href="../docs/q&a.php">Q&A Quizzes</a>
                        <a class="nav-link <?php if (preg_match('/^(multiplechoices)$/i', $to_match )) echo "current"; ?>" href="../docs/multiplechoices.php">Multiple Choices Quizzes</a>            
                        <a class="nav-link <?php if (preg_match('/^(paspapers)$/i', $to_match )) echo "current"; ?>" href="../docs/pastpapers.php">Past Papers</a>            
                    </div>
                </li>


                <li class="nav-item navclass <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match ) ) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>E-Materials</span> <i class="nav-angle"></i></a>

                    <div class="nav" <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match ) ) echo 'style="display:block;"'; ?>>
                        <a class="nav-link <?php if (preg_match('/^(enotesebooks)$/i',$to_match )) echo "current"; ?>" href="../docs/enotesebooks.php">E-notes</a>
                        <a class="nav-link <?php if (preg_match('/^(evideos)$/i', $to_match )) echo "current"; ?>" href="../docs/evideos.php">E-Videos</a>            
                    </div>
                </li>

                <li class="nav-item navclass <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>Teacher Materials</span> <i class="nav-angle"></i></a>
                    <div class="nav" <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'style="display:block;"'; ?>>
                        <a class="nav-link <?php if (preg_match('/^(lessonplan)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonplan.php">Lesson Plan</a>
                        <a class="nav-link <?php if (preg_match('/^(lessonmaterials)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonmaterials.php">Lesson Materials</a>
                        <a class="nav-link <?php if (preg_match('/^(schemesofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/schemesofwork.php">Schemes of Work</a>
                        <a class="nav-link <?php if (preg_match('/^(recordofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/recordofwork.php">Record of Work</a>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link active <?php if (preg_match('/^(studentproject)$/i', $to_match )) echo "current"; ?>" href="../docs/studentproject.php" ><span> Student Project</span><i class="fa fa-laptop"></i> </a>
                </li>
              </ul>
            </aside>
          </div>
        <style>
                .sidebar{
                    background-color:pale pink;
                } 
         </style>