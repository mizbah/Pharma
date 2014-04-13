		
		<div class="well sidebar-nav">
            <ul class="nav nav-list">
            	<?php 
            		if(!empty($ctrl_nav) && isset($ctrl_nav['child'])) {
						foreach ($ctrl_nav['child'] as $key=>$val) {
							
							if($val['active'] == 1) {
								$s_n = '<li ';
								if (isset($active_side_nav) && $active_side_nav == $val['url']) {
									$s_n .= 'class="active"';
								}
								$s_n .= '><a href="'.$val['url'].'">'.$val['label'].'</a></li>';
								echo $s_n;
							}
						}
					}
            	?>
            </ul>
          </div><!--/.well -->