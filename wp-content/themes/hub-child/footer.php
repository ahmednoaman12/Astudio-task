<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the main containers
 *
 * @package Hub theme
 */
?>

<?php liquid_action( 'after_content' ); ?>
</div>
<?php liquid_action( 'after_contents_wrap' ); ?>
</main>
<?php
		liquid_action( 'before_footer' );
		liquid_action( 'footer' );
		liquid_action( 'after_footer' );
		?>

</div>

<?php liquid_action( 'after' ) ?>

<div class="global_cta_buttons">
	<a href="#" target="_blank">
		<div class="transform">
		contact us
		</div> 
		<span class="cta-label">
			<div class="row p-0 m-0">
				<div class="col-12">
					<h6>
						olivia S.
					</h6>
				</div>
				<div class="col-12">
					<p>business devoloper</p>
				</div>
			</div>
			<div class="row p-0 m-0">
				<div class="col-12">
					<p>
					olivia@astudio.ae
					</p>
				</div>
				<div class="col-12">
					<p>+971 1511151 | mobile</p>
				</div>
			</div>
		</span>
	</a>


	
</div>

<?php wp_footer(); ?>

</body>

</html>