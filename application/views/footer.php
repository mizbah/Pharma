<?php require_once 'site-footer.php';?>
 </div><!--/.fluid-container-->

    <?php 
    	require_once 'js.php';
    	if(isset($extrajs) && is_array($extrajs)){
			foreach ($extrajs as $k=>$v) {
				echo '<script src="../assets/js/'.$v.'"></script>';
			}
			
		}
    ?>
   
  </body>
</html>



