<?php  
  $result1=$c->fetchdoubts();
  $result2=$c->fetchsubjects();

?>

<h3 class="sidebar-title">Subject Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php foreach($result2 as $r2): ?>
                  <li><a href="doubts.php?id=<?php echo $r2['SubjectCode']; ?>" onclick="<?php $_SESSION['dbstatus']=1; ?>"><?php echo $r2['subject']; ?></a></li>
                  <?php endforeach; ?>
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Doubts</h3>
              <div class="sidebar-item recent-posts">

              <?php
                $cnt=0;
               foreach($result1 as $r3) { ?>
                <div class="post-item clearfix">
                  <h4><a href="doubt-single-view.php?id=<?php echo $r3['QId']; ?>"><?php echo $r3['topic']; ?></a></h4>
                  <time datetime="2020-01-01"><?php echo $r3['postdate']; ?></time>
                </div>
                 <?php 
                  $cnt++;
                  if ($cnt==5) {
                     break;
                  }
                   } ?>
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->