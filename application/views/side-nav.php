		
		<div class="well sidebar-nav">
            <ul class="nav nav-pills nav-stacked">
            	<?php 
            		if(!empty($ctrl_nav) && isset($ctrl_nav['child'])) {
						foreach ($ctrl_nav['child'] as $key=>$val) {
							
							if($val['active'] == 1) {
								
								$s_n = '<li ';
								if (isset($ctrl) && $ctrl == $val['url']) {
									$s_n .= ' class="active" ';
								}
								$s_n .= '><a href="'.$val['url'].'">'.$val['label'].'</a></li>';
								echo $s_n;
							}
						}
					}
            	?>
            </ul>
          </div><!--/.well -->