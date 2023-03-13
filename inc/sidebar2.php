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
        padding:8px;
        
    }

    ul 
     .current, .current span, .current i, .current li div a {
        background-color:grey;
        padding:10px;
        padding-right:5px;
        color:greenyellow;
        border-radius: 10px;
        font-weight:bolder;
        display:block;
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
        color: greenyellow;   
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
                    <a class="nav-link <?php if (preg_match('/^(dashboard)$/i', $to_match )) echo "current"; ?>" href="../layout/dashboard.php">Home <i class="fa fa-home"></i></a>
                </li>
	
                <li class="nav-item <?php if (preg_match('/^(mystudents)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(mystudents)$/i', $to_match )) echo "current"; ?>" href="../docs/mystudents.php">My Students <i class="fa fa-user"></i></a>
                </li>

                <li class="nav-item <?php if (preg_match('/^(rollcall)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(rollcall)$/i', $to_match )) echo "current"; ?>" href="../docs/rollcall.php">Roll Call <i class="fa fa-tag"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../docs/eclassroom.php">E-classroom <i class="fa fa-arrow-right"></i></a>
                </li>

                <li class="nav-item  <?php if (preg_match('/^(messages)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(messages)$/i', $to_match )) echo "current"; ?>" href="../docs/messages.php">Messages<i class="fa fa-address-book"></i></a>
                </li>

                <li class="nav-item <?php if (preg_match('/^(selfappraisal)$/i', $to_match )) echo "current"; ?>">
                    <a class="nav-link <?php if (preg_match('/^(selfappraisal)$/i', $to_match )) echo "current"; ?>" href="../docs/selfappraisal.php">Self Appraisal <i class="fa fa-check"></i></a>
                </li>
              </ul>
            </aside>
          </div>
