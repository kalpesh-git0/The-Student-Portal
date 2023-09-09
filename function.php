<?php  function post_repeat(){
	          for($i=1;$i<=6;$i++){
	          	$name=$_SESSION['name'];?>
            
              <div class="col-md-6 d-flex align-items-stretch">
                <article class="entry">

                  <h2 class="entry-title">
                    <a href="doubt-single-view.php">SQL server with PHP error problem.</a>
                  </h2>

                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="doubt-single-view.php"><?php echo $name; ?></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="doubt-single-view.php"><time datetime="2020-01-01">June 19, 2021</time></a></li>
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>
                      Whenever I try to submit a form with data like name address and photo it's showing an error that your image can't move to dir from database .
                    </p>
                    <div class="read-more">
                      <a href="doubt-single-view.php">View And Answer</a>
                    </div>
                  </div>

                </article><!-- End blog entry -->
              </div>
          <?php }
}


?>