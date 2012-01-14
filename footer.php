			<footer role="contentinfo">
			
				<div id="inner-footer" class="row">
					<nav class="six columns offset-by-six clearfix">
						<?php bones_footer_links(); ?>
					</nav>
				</div>
				
				<div class="row">
					<p class="twelve columns">&copy; <?php bloginfo('name'); ?> <?php _e("is brought to you by", "bonestheme"); ?> <a href="http://320press.com/wp-foundation">WP-Foundation</a>, <a href="http://wordpress.org/" title="WordPress">WordPress</a>, <a href="http://www.themble.com/bones" title="Bones" class="footer_bones_link">Bones</a> <span class="amp">&</span> <a href="http://foundation.zurb.com/" title="Zurb Foundation">Zurb Foundation</a>.</p>
					
					<!--<p class="attribution two columns"><a href="http://320press.com" id="credit320" class="hide-on-phones" title="By the dudes of 320press">320press</a></p>-->
				</div>
					
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>