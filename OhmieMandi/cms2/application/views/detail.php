<section class="main-content" id="detail">
	<div class="row">
		<div id="detail-gallery" class="small-12 large-6 columns">
		<ul class="medium-block-grid-2">		
			<li><img src="<?php echo base_url(); ?>public/images/<?php echo "${'gallerythumb1'}"; ?>" alt="" /></li>
			<li><img src="<?php echo base_url(); ?>public/images/<?php echo "${'gallerythumb2'}"; ?>" alt="" /></li>
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
</section>