<?php
if (isset($_SESSION['message']) == true) {
     ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
               <span class="alert-inner--text"><?php echo $_SESSION['message']; ?></span>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
               </button>
          </div>
     <?php
     unset($_SESSION['message']);
     } else if(isset($_SESSION['error'])==true) {
     ?>

          <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
               <span class="alert-inner--text"><?php echo $_SESSION['error'] ?></span>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
               </button>
          </div>
     <?php
     }
     unset($_SESSION['error']);

?>