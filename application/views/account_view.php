<?php require_once 'header.php';?>	
	<h1>Accounts</h1>
	<table id="accounts-list">
		<thead>
		<tr>
			<th>Account</th>
			<th>Amount</th>
			<th>Type</th>
		</tr> 
		</thead>
		<tbody>
			<?php
				foreach ($accounts as $k=>$v){
					echo '
						<tr>
							<td> <a href="javascript:accountsInformation('.$v->id.')" >'.$v->name.'</a></td>
							<td>'.$v->amount.'</td>
							<td>'.$v->type.'</td>
						</tr>';
				}
			?>
		</tbody>
	</table>
         
        </div><!--/span-->
      </div><!--/row-->
		<div id="popup"></div>
      <hr>
	<?php require_once 'footer.php';?>