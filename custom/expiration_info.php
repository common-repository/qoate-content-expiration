<div class="my_meta_control">
	<label>Qoate Expiration Post Options</label>
	<p>
		<?php $metabox->the_field('exp_dd'); ?>
		<input size="1" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(strlen($metabox->get_the_value()) > 0) { $metabox->the_value(); } else { echo 'dd'; } ?>" onClick="if(this.value='dd') { this.value=''; }" />
		/<?php $metabox->the_field('exp_mm'); ?>
		<input size="1" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(strlen($metabox->get_the_value()) > 0) { $metabox->the_value(); } else { echo 'mm'; } ?>" onClick="if(this.value='mm') { this.value=''; }" />
		/20<?php $metabox->the_field('exp_yy'); ?>
		<input size="1" type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(strlen($metabox->get_the_value()) > 0) { $metabox->the_value(); } else { echo 'yy'; } ?>" onClick="if(this.value='yy') { this.value=''; }" />
		<span>Expiration Date (dd/mm/yy).</span><br />
		
		<?php $metabox->the_field('exp_text'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php if(strlen($metabox->get_the_value()) > 1) { $metabox->the_value(); } else { echo 'The text to appear after expiration date.'; } ?>" onClick="if(this.value='The text to appear after expiration date.') { this.value=''; }" />
		<span>Expiration Text. Use a space for no message.</span>
	</p>
	<p>Need help? Check out my post on <a href="http://dannyvankooten.com/wordpress-plugins/post-content-expiration/" target="_blank">Post Content Expiration</a>.</p>
	</div>