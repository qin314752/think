<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<?php  foreach($menu_top as $v){ 

				if($v[1]==1){
			?>
			<dl id="menu-system">
				<dt><i class="Hui-iconfont">&#xe616;</i> <?php echo $v[0] ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
				<dd>
					<ul>
					<?php 
					 foreach($v['low_title'] as $num){ 
						if($num[2]==1){
							echo '<li><a data-href="'. $num[1].'" data-title="'.$num[0].'" href="javascript:void(0)">'.$num[0].'</a></li>';
							}
						}?>
					</ul>
				</dd>
			</dl>

		<?php }}?>
	</div>
</aside>