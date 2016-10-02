<?php 
	function pi_side_bar_widget(){
		$sidebar=array(
			'name'			=>	__('first sidebar','promosIndia'),
			'id'			=>	'pi_sidebar',
			'description'	=>	__('promoseIndia contact side bar'),
			'class'			=> ''

		);
		register_sidebar($sidebar);
	}
 ?>