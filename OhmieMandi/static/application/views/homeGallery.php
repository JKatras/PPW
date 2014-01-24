<!--<section class="main-content" id="home-gallery">
	<ul class="medium-block-grid-3">
		<li>
			<figure>
				<?php
				echo		
				"<a href=?action=detail>
					<img src=".base_url()."public/images/sh-thumb-293x293.png alt='a P-38 laying down fire' />
				</a>"
				?>
			</figure>
			<h1>
				<?php echo "<a href=?action=detail>Steel Hawks</a>" ?>
			</h1>
			<p>High-flying fun over the Pacific!</p>
		</li>
		<li>
			<figure>
				<?php
				echo		
				"<a href=?action=detail>
					<img src=".base_url()."public/images/fake-thumb-293x293.png alt='Fake BLock - the geometric puzzler' />
				</a>"
				?>
			</figure>
			<h1>
				<?php echo "<a href=?action=detail>Fake Block</a>" ?>
			</h1>
			<p>Beat your friends or beat the clock, but look out for Fake Block.</p>
		</li>
		<li>
			<figure>
				<?php
				echo		
				"<a href=?action=detail>
					<img src=".base_url()."public/images/pp-thumb-293x293.png alt='an 8-bit-looking skull' />
				</a>"
				?>
			</figure>
			<h1>
				<?php echo "<a href=?action=detail>Pirate Poker</a>" ?>
			</h1>
			<p>Think you can bluff a pirate?</p>
		</li>
	</ul>
</section>-->

<section class="main-content" id="home-gallery">
	<ul class="medium-block-grid-3">
		
	<?php
	foreach ($gameId as $g => $row) {
			
	echo "
		<li>
			<figure>
				<a href=?action=detail>
					<img src=".base_url()."public/images/${row['mainthumb']} alt='a P-38 laying down fire' />
				</a>
			</figure>
			<h1>
				 <a href=?action=detail>${row['name']}</a> 
			</h1>
			<p>${row['slug']}</p>
		</li>";
	} ?>
		
	</ul>
</section>