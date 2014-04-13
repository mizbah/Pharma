<ul class="nav nav-pills">
	<?php 
    	foreach ($nav as $key=>$value){
			if ($value['active'] == 1){	
				$li = '<li ';
				if (isset($ctrl) && $ctrl == $value['url']){
				$li .=' class="active" ';
			}
				$li .= '><a href="'.$value['url'].'">'.$value['name'].'</a></li>';
				echo $li;
			}
		}
    ?>
</ul>
