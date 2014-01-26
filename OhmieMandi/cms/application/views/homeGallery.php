<section class="main-content" id="home-gallery">
	<ul class="medium-block-grid-3">
		
	<?php
	foreach ($gameId as $g => $row) {
			
	echo "
		<li>
			<figure>
				<a href=?action=detail&gameId=${row['gameId']}>
					<img src=".base_url()."public/images/${row['mainthumb']} alt='a P-38 laying down fire' />
				</a>
			</figure>
			<h1>
				 <a href=?action=detail&gameId=${row['gameId']}>${row['name']}</a> 
			</h1>
			<p>${row['slug']}</p>
		</li>";
	} ?>
		
	</ul>
</section>