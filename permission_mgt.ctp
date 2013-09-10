<div>
	<table>
	<?php 
		echo $this->Html->tableHeaders( array_merge( array('Aco'), $crudActions ) );
		foreach ( $acoList as $acoId => $nodePath ) {
				$out = array();
				$out[] = $nodePath['path'];
				foreach( $crudActions as $action ) {
					$out[] = $this->Js->link(
								($nodePath[$action] == '1') ? $this->Html->image('tick.png', array('alt' => 'Allow')) :  $this->Html->image('cross.png', array('alt' => 'Block')), 
								'perform_authorization',  
								array('escape' => false, 'update' => '#'.$action.$acoId, 'id' => $action.$acoId, 'data' => array('acoId' => $acoId,'action' => $action), 'method' => 'post' )
							);
				}
			echo $this->Html->tableCells( $out );
		}
		echo $this->Js->writeBuffer();
	?>
	</table>
</div>
