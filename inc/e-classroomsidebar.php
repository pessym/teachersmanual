
<style>
     .li span, .li i{
    height:10px;
   }
   a.nav-link{
    height:40px;
    padding-left: 10px;
   }
   li.nav-item.li.currently{
    height:50px;
   }
   .nav-link span, .nav-link i{
    font-size:17px;
   }
   ul li div{
    height:100%;
    padding:0px;
   }
   
    ul li div a{
        height:50px;
        padding-top: 0px;
    }
    .nav-sidebar-hero li:hover{
        background-color:grey;
        color:greenyellow;
        border-radius: 10px;
        color:white;
        border-radius: 10px;
        display:block;
        padding:8px;
    }
     .nav-sidebar-hero li:hover i, li.nav-item.li.currently:hover span {
        color:white;
    }
    .dropdown, .dropdown span , .dropdown a {
        background-color:grey;
        color:white;
        border-radius: 10px;
        display:block;
        padding:10px;
        
    }
    ul 
     .current, .current span, .current i, .current li div a {
        background-color:grey;
        padding:0px;
        padding-right:5px;
        color:greenyellow;
        border-radius: 10px;
        font-weight:bolder;
        display:block;
        height:60px;
      
    }
    .current span, .current i{
        height:20px;
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
        color: whitesmoke;   
    }
   

</style>
<?php
    $text = $_SERVER['REQUEST_URI'];

    $first = explode('/', $text);

    $last = end($first);
    $second = explode('.', $last);
    $to_match = $second[0];
?>
<div class="col-md-4 col-xl-3 order-last order-md-first sidebar" style="position:absolute;">
            <hr class="d-md-none">
            <aside class="sidebar sidebar-sticky sidebar-stick-shadow pr-md-5 br-1" style="height:300vh;padding:0px;">
                <h3 style="color:darkslateblue;"><b> Sub Modules</b></h3>
              <ul class="nav nav-sidebar nav-sidebar-hero" data-accordion="true" style="height:300vh;">
        
<<<<<<< HEAD
                <li class="nav-item li currently">
                  <a class="nav-link active <?php if (preg_match('/^(eclassroom)$/i', $to_match )) echo "current"; ?>" href="../docs/eclassroom.php" ><span> Introduction</span><i class="fa fa-users"></i> </a>
                  
=======
                <li class="nav-item li">
                  <a class="nav-link active <?php echo preg_match('/^(extraeclassroom)$/i', $to_match ) ? 'currently' : ''?>" href="../docs/extraeclassroom.php" ><span> Introduction</span><i class="fa fa-users"></i> </a>  
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
                </li>
	
				<li class="nav-item navclass  <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo "dropdown"; ?>" href="#"> <span> Student Diary </span> <i class="nav-angle"></i></a>
                    <div class="nav li" <?php if (preg_match('/^(studentdiaryextra)$/i',$to_match ) || preg_match('/^(studentdiaryacademics)$/i',$to_match )) echo 'style="display:block"'; ?>>
<<<<<<< HEAD
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryacademics)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryacademics.php"><span class="fa fa-arrow-right"> Student Diary(Academics) </span></a>
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryextra)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryextra.php"><span class="fa fa-arrow-right"> Student Diary(Extra) </span></a>
=======
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryacademics)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryacademics.php">
                        <i class="fa fa-arrow-right" style="font-size:17px"></i>  <span >Student Diary(Academics)</span></a>
                        <a class="nav-link <?php if (preg_match('/^(studentdiaryextra)$/i', $to_match )) echo "current"; ?>" href="../docs/studentdiaryextra.php"> <i class="fa fa-arrow-right" style="font-size:17px"></i> <span style="padding-right:40px;"> Student Diary(Extra) </span></a>
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
            
                    </div>
                </li>
                <li class="nav-item navclass <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo "dropdown"; ?>" href="#"> <span> Exam Management </span> <i class="nav-angle"></i></a>
                    <div class="nav" <?php if (preg_match('/^(exammanagement)$/i',$to_match ) || preg_match('/^(cbcassessment)$/i',$to_match )) echo 'style="display:block"'; ?>>
<<<<<<< HEAD
                        <a class="nav-link <?php if (preg_match('/^(exammanagement)$/i', $to_match )) echo "current"; ?>" href="../docs/exammanagement.php"><span class="fa fa-arrow-right"> Exam(8.4.4/IGCSE) </span></a>
                        <a class="nav-link <?php if (preg_match('/^(cbcassessment)$/i', $to_match )) echo "current"; ?>" href="../docs/cbcassessment.php"><span class="fa fa-arrow-right"> CBC Assessment </span></a>
=======
                        <a class="nav-link <?php if (preg_match('/^(exammanagement)$/i', $to_match )) echo "current"; ?>" href="../docs/exammanagement.php"> <i class="fa fa-arrow-right"></i>  <span style="padding-right:8px;">Exam Mngt (8.4.4/IGCSE)</span></a>
                        <a class="nav-link <?php if (preg_match('/^(cbcassessment)$/i', $to_match )) echo "current"; ?>" href="../docs/cbcassessment.php"><i class="fa fa-arrow-right"></i>  <span style="padding-right:70px;">CBC Assessment</span></a>
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
            
                    </div>
                </li>

                <li class="nav-item navclass <?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>Quizzes</span> <i class="nav-angle"></i></a>

                    <div class="nav"<?php if (preg_match('/^(q&a)$/i',$to_match ) || preg_match('/^(multiplechoices)$/i',$to_match ) || preg_match('/^(pastpapers)$/i',$to_match )) echo 'style="display:block;"'; ?>>
<<<<<<< HEAD
                        <a class="nav-link <?php if (preg_match('/^(q&a)$/i',$to_match )) echo "current"; ?>" href="../docs/q&a.php"><span class="fa fa-arrow-right">Q&A Quizzes </span></a>
                        <a class="nav-link <?php if (preg_match('/^(multiplechoices)$/i', $to_match )) echo "current"; ?>" href="../docs/multiplechoices.php"><span class="fa fa-arrow-right"> Multiple Choices Quizzes </span></a>            
                        <a class="nav-link <?php if (preg_match('/^(paspapers)$/i', $to_match )) echo "current"; ?>" href="../docs/pastpapers.php"><span class="fa fa-arrow-right"> Past Papers </span></a>            
=======
                        <a class="nav-link <?php if (preg_match('/^(q&a)$/i',$to_match )) echo "current"; ?>"       href="../docs/q&a.php"><i class="fa fa-arrow-right" style="font-size:17px"> </i> <span style="padding-right:92px;">Q&A Quizzes</span> </a>
                        <a class="nav-link <?php if (preg_match('/^(multiplechoices)$/i', $to_match )) echo "current"; ?>" href="../docs/multiplechoices.php"> <i class="fa fa-arrow-right" > </i> <span style="padding-right:2px;">Multiple Choices Quizzes</span></a>            
                        <a class="nav-link <?php if (preg_match('/^(paspapers)$/i', $to_match )) echo "current"; ?>" href="../docs/pastpapers.php"><i class="fa fa-arrow-right" style="font-size:17px"> </i> <span style="padding-right:100px;">Past Papers </span></a>            
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
                    </div>
                </li>


                <li class="nav-item navclass <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match ) ) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>E-Materials</span> <i class="nav-angle"></i></a>

                    <div class="nav" <?php if (preg_match('/^(enotesebooks)$/i',$to_match ) || preg_match('/^(evideos)$/i',$to_match ) ) echo 'style="display:block;"'; ?>>
<<<<<<< HEAD
                        <a class="nav-link <?php if (preg_match('/^(enotesebooks)$/i',$to_match )) echo "current"; ?>" href="../docs/enotesebooks.php"><span class="fa fa-arrow-right"> E-notes </span></a>
                        <a class="nav-link <?php if (preg_match('/^(evideos)$/i', $to_match )) echo "current"; ?>" href="../docs/evideos.php"><span class="fa fa-arrow-right"> E-Videos </span></a>            
=======
                        <a class="nav-link <?php if (preg_match('/^(enotesebooks)$/i',$to_match )) echo "current"; ?>" href="../docs/enotesebooks.php"> <i class="fa fa-arrow-right" style="font-size:17px"></i> <span style="padding-right:133px;"> E-notes</span> </a>
                        <a class="nav-link <?php if (preg_match('/^(evideos)$/i', $to_match )) echo "current"; ?>" href="../docs/evideos.php"><i class="fa fa-arrow-right" style="font-size:17px"> </i> <span style="padding-right:126px;">E-Videos</span> </a>            
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
                    </div>
                </li>

                <li class="nav-item navclass <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'dropdown'; ?>" >
                    <a class="nav-link active <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'dropdown'; ?>" href="#"> <span>Teacher Materials</span> <i class="nav-angle"></i></a>
                    <div class="nav" <?php if (preg_match('/^(lessonplan)$/i',$to_match ) || preg_match('/^(lessonmaterials)$/i',$to_match )|| preg_match('/^(schemesofwork)$/i',$to_match ) || preg_match('/^(recordofwork)$/i',$to_match )) echo 'style="display:block;"'; ?>>
<<<<<<< HEAD
                        <a class="nav-link <?php if (preg_match('/^(lessonplan)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonplan.php"><span class="fa fa-arrow-right"> Lesson Plan </span></a>
                        <a class="nav-link <?php if (preg_match('/^(lessonmaterials)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonmaterials.php"><span class="fa fa-arrow-right"> Lesson Materials </span></a>
                        <a class="nav-link <?php if (preg_match('/^(schemesofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/schemesofwork.php"><span class="fa fa-arrow-right"> Schemes of Work </span></a>
                        <a class="nav-link <?php if (preg_match('/^(recordofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/recordofwork.php"><span class="fa fa-arrow-right"> Record of Work </span></a>
=======
                        <a class="nav-link <?php if (preg_match('/^(lessonplan)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonplan.php"> <i class="fa fa-arrow-right" style="font-size:17px"></i> <span style="padding-right:97px;"> Lesson Plan</span> </a>
                        <a class="nav-link <?php if (preg_match('/^(lessonmaterials)$/i', $to_match )) echo "current"; ?>" href="../docs/lessonmaterials.php"> <i class="fa fa-arrow-right"></i>  <span style="padding-right:61px;">Lesson Materials</span> </a>
                        <a class="nav-link <?php if (preg_match('/^(schemesofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/schemesofwork.php"> <i class="fa fa-arrow-right" ></i> <span style="padding-right:58px;"> Schemes of Work</span> </a>
                        <a class="nav-link <?php if (preg_match('/^(recordofwork)$/i', $to_match )) echo "current"; ?>" href="../docs/recordofwork.php"> <i class="fa fa-arrow-right" style="font-size:17px"></i>  <span style="padding-right:70px;">Record of Work </span></a>
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
                    </div>
                </li>
                <li class="nav-item li">
                  <a class="nav-link active <?php echo preg_match('/^(assignment)$/i', $to_match ) ? 'currently' : ''?>" href="../docs/assignment.php" ><span> Assignments</span><i class="fa fa-wrench"></i> </a>  
                </li>
                <li class="nav-item currently">
<<<<<<< HEAD
                <a class="nav-link active <?php if (preg_match('/^(assignment)$/i', $to_match )) echo "current"; ?>" href="../docs/assignment.php" ><span> Assignment</span><i class="fa fa-wrench"></i> </a>
                </li>
                <li class="nav-item currently">
                <a class="nav-link active <?php if (preg_match('/^(studentproject)$/i', $to_match )) echo "current"; ?>" href="../docs/studentproject.php" ><span> Student Project</span><i class="fa fa-laptop"></i> </a>
=======
                <a class="nav-link active <?php if (preg_match('/^(studentproject)$/i', $to_match )) echo "currently"; ?>" href="../docs/studentproject.php" ><span> Student Project</span><i class="fa fa-laptop"></i> </a>
>>>>>>> 6560eb2ba5658cce21e23c6219c5746251573647
                </li>
              </ul>
            </aside>
          </div>
        <style>
                .sidebar{
                    background-color:pale pink;
                } 
         </style>