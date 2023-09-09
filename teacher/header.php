<header id="header" class="fixed-top header-inner-pages">
    <div class="container headw d-flex align-items-center">

       <a href="index.html" class="logo "><img src="../assets/img/logo-mod.png" alt="" class="img-fluid"></a>
             <h1 class="logo mr-auto"><a href="index.html fs-28"> &nbsp The Student Portal</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="padding-12"><a href="dashboard.php">Dashboard</a></li>
          
          <li class="drop-down padding-12"><a href="#">Add</a>
            <ul>
              <li><a href="E-learning upload.php?id=E-classes">Add E-Class</a></li>
              <li><a href="E-learning upload.php?id=Notes">Add Notes</a></li>
              <li><a href="E-learning upload.php?id=Assignment">Add Assignment</a></li>
              <li><a href="E-learning upload.php?id=Project">Add Project</a></li>
            </ul>
          </li>
          
          <li class="drop-down padding-12"><a href="#">Manage</a>
            <ul>
              <li><a href="manage.php?id=classes">Manage E-Classes</a></li>              
              <li><a href="manage.php?id=Notes">Manage Notes</a></li>
              <li><a href="manage.php?id=Assignments">Manage Assignment</a></li>
              <li><a href="manage.php?id=Projects">Manage Projects</a></li>
            </ul>
          </li>
          <?php  $subject=$_SESSION['subject']; ?>
          <li class="padding-12"><a href="doubts.php?id=<?php echo $subject; ?>">Doubts</a></li>          
          
          <li class="drop-down padding-12"><a href="#">Account</a>
            <ul>
             <!-- <li><a href="my-profile.php">My Profile</a></li>  -->
              <li><a href="#">Change Password</a></li>
            </ul>
          </li>
          <a href="logout.php"><button class="form-control"> Logout</button></a>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>