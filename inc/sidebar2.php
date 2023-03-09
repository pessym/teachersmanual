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
        height:50px;
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
    .current span, .current i, .current li div a{
        height:50px;
        padding-left:10px;
        margin:5px;
        
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
    .currently{
        height:70px;
        border-radius:10px;
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

                <li class="nav-item <?php if (preg_match('/^(dashboard)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(dashboard)$/i', $to_match )) echo "current"; ?>" href="../layout/dashboard.php">Home <i class="nav-angle"></i></a>
                </li>
	
                <li class="nav-item <?php if (preg_match('/^(mystudents)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(mystudents)$/i', $to_match )) echo "current"; ?>" href="../docs/mystudents.php">My Students <i class="nav-angle"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if (preg_match('/^(rollcall)$/i', $to_match )) echo "current"; ?>" href="../docs/rollcall.php">Roll Call <i class="nav-angle"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../docs/extraeclassroom.php">E-classroom <i class="nav-angle"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if (preg_match('/^(messages)$/i', $to_match )) echo "current"; ?>" href="../docs/messages.php">Messages<i class="nav-angle"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php if (preg_match('/^(selfappraisal)$/i', $to_match )) echo "current"; ?>" href="../docs/selfappraisal.php">Self Appraisal <i class="nav-angle"></i></a>
                </li>
              </ul>
            </aside>
          </div>
