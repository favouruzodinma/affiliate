<?php
if(isset($_SESSION['mgs'])){
    unset($_SESSION['mgs']);
}

?>
<footer class="main-footer text-center">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<!-- <a class="nav-link" href="javascript:void(0)">FAQ</a> -->
		  </li>
		  <li class="nav-item">
			<!-- <a class="nav-link" href="#">Purchase Now</a> -->
		  </li>
		</ul>
    </div>
	  &copy;<?php echo date('Y');?> <a href="https://wa.me/+2347041390038/">Findo Affiliate.com</a>. All Rights Reserved.
  </footer>