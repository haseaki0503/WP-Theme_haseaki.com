<?php if ( is_active_sidebar( 'sidebar-1' ) ) :
dynamic_sidebar( 'sidebar-1' );
else: ?>
	<h2>No Widget</h2>
	<div class="category">
		<p>ウィジットは設定されていません。</p>
	</div><!-- /.widget -->
<?php endif; ?>