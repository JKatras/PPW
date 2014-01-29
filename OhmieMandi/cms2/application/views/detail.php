<div class="main-content" id="detail">
	<div class="row">
		<div id="detail-gallery" class="small-12 large-6 columns">
		<ul>		
			<li><img src="<?php echo base_url(); ?>public/images/sh-thumb-210x210.png" alt="P-38 versus Zeros" /></li>
			<li><img src="<?php echo base_url(); ?>public/images/sh-thumb2-210x210.png" alt="P-38 takes flak against a mini-boss" /></li>
			<li><img src="<?php echo base_url(); ?>public/images/sh-thumb-440x210.png" alt="P-38 versus giant airship" /></li>
		</ul>
		
		
		</div>
		<div id="detail-copy" class="small-12 large-6 columns">
		<?php
		echo "
			<h1>${'name'}</h1>
			<p>${'description'}</p>
			<ul>
				<li>Requirements: ${'requirements'}</li>
				<li>Compatibility: ${'compatibility'}</li>
			</ul>
			<p class=price>${'price'}</p>
			<aside>
			<a href=?action=checkout class=btn-lg>Download</a>
			</aside>";
		?>
		</div>
	</div>
</div>