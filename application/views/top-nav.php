<ul class="nav nav-pills">
	<?php 
    	foreach ($nav as $key=>$value){
			if ($value['active'] == 1){	
				$li = '<li ';
				if (isset($ctrl_nav['name']) && $ctrl_nav['name'] == $value['url']){
				$li .=' class="active" ';
			}
				$li .= '><a href="'.$value['url'].'">'.$value['name'].'</a></li>';
				echo $li;
			}
		}
    ?>
</ul>
