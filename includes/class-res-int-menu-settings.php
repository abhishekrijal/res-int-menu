<?php
/**
 * The Menu settings page.
 *
 * @since 1.0.0
 *
 * @package Res_Int_Menu
 */
?>
<div class="interface-header">
	<div class="crystal_container">
		<div class="block">
			<div class="text">
				<h1><?php esc_html_e('Responsive Interface Menu', 'res_int_menu');?></h1>
			</div>
		</div>
		<div class="crystal" id="c01"></div>
		<div class="crystal" id="c02"></div>
		<div class="crystal" id="c03"></div>
		<div class="crystal" id="c04"></div>
		<div class="crystal" id="c05"></div>
		<div class="crystal" id="c06"></div>
		<div class="crystal" id="c07"></div>
		<div class="crystal" id="c08"></div>
		<div class="crystal" id="c09"></div>
		<div class="crystal" id="c10"></div>
	</div>
</div>
<form method="post" action="<?php echo admin_url( 'admin-post.php' ); ?>" class="res-int-menu-form">
    <input type="hidden" name="action" value="res_int_menu_settings_save"/>
    <?php wp_nonce_field( 'res-int-menu-nonce', 'res_int_menu_settings_nonce_field' ); ?>
		<div id="main" class="main-contain">
		<div id="primary" class="primary-main-contain">
			<div class="tab-menu">
				<ul class="tabs">
				  <li class="active" rel="tab1">Basic Setup</li>
				  <li rel="tab2">Logo</li>
				  <li rel="tab3">Typography</li>
				  <li rel="tab4">Custom css</li>
				  <li rel="tab5">Import/Export</li>
				  
				</ul>
				<div class="tab_container">
				  <h3 class="d_active tab_drawer_heading" rel="tab1">Basic Setup</h3>
				  <div id="tab1" class="tab_content">
				  <div class="primary-main-contain-block">
						<p>Enter your CSS menu selector for the Menu, for example; #primary-menu or #menu-primary-menu etc.</p>
						<form class="menu-customize">
							<div>
								<label>Add Class or Id</label>
								<input type="text" name="class name">
							</div>
							<div>
								<label>Menu Position</label>
								<input type="text" name="class name">
							</div>
							<div>
								<label>Show Desktop Menu Above</label>
								<input type="text" name="class name">
							</div>
							<div>
								<label>Menu Breakpoint</label>
								<input type="text" name="class name">
							</div>
						</form>
						<button type="submit" class="update"><?php esc_html_e('Update Changes', 'res-int-menu'); ?></button>
					</div>
				  </div>
				  
				  <!-- #tab1 -->
				  <h3 class="tab_drawer_heading" rel="tab2">Logo</h3>
				  <div id="tab2" class="tab_content">
				     <p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
				  </div>
				  <!-- #tab2 -->
				  <h3 class="tab_drawer_heading" rel="tab3">Custom css</h3>
				  <div id="tab3" class="tab_content">
				     <p>Nulla eleifend felis vitae velit tristique imperdiet. Etiam nec imperdiet elit. Pellentesque sem lorem, scelerisque sed facilisis sed, vestibulum sit amet eros.</p>
				  </div>
				  <!-- #tab3 -->
				  <h3 class="tab_drawer_heading" rel="tab4">Import/Export</h3>
				  <div id="tab4" class="tab_content">
				      <p>Integer ultrices lacus sit amet lorem viverra consequat. Vivamus lacinia interdum sapien non faucibus. Maecenas bibendum, lectus at ultrices viverra, elit magna egestas magna, a adipiscing mauris justo nec eros.</p>
				  </div>
				  <!-- #tab4 --> 
				</div>
			<!-- .tab_container -->
			</div>
		</div>
			<div id="secondary" class="secondary-main-contain">
				<div class="secondary-main-contain-block">
					<div class="secondary-heading">
						<h2>Responsive Interface Menu</h2>
						<div class="inside">
							<h3><span>Additional Resources</span></h3>
							<div class="inside">
								<p>More Responsive Interface Menu Info...</p>
								<ul>
									<li><a href="#" rel="nofollow">Responsive Interface Menu home</a></li>
									<li><a href="#" rel="nofollow">Responsive Interface Menu GitHub</a></li>
									<li><a href="#" rel="nofollow">Advanced Filter Guide</a></li>
									<li><a href="#" target="_blank">Symbol Reference</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div></form>
<?php