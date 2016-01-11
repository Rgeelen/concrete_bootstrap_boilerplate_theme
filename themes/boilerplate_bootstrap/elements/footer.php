<?php defined('C5_EXECUTE') or die (_('Access Denied.')); ?>
			<!-- footer -->
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="footer-copyright"><?php echo '&copy; ' . Config::get('concrete.site') . ' ' . date('Y'); ?></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- end footer -->
		

		</div> <!-- end pageWrapperClass -->
		
		
		<script src="<?php echo $view->getThemePath(); ?>/js/vendor/bootstrap.min.js"></script>
		<script src="<?php echo $view->getThemePath(); ?>/js/main.js"></script>

		<?php Loader::element('footer_required'); ?>
	</body>
</html>