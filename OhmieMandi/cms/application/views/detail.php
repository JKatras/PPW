<div class="main-content" id="detail">
	<div class="row">
		<div id="detail-gallery" class="small-12 large-6 columns">
			<ul>
				<li><img class="thumb-210" src="<?php echo base_url(); ?>public/images/pp-thumb-293x293.png" alt="P-38 versus Zeros" /></li>		
				<!--<li><img src="<?php echo base_url(); ?>public/images/sh-thumb-210x210.png" alt="P-38 versus Zeros" /></li>-->
				<li><img src="<?php echo base_url(); ?>public/images/sh-thumb2-210x210.png" alt="P-38 takes flak against a mini-boss" /></li>
				<li><img src="<?php echo base_url(); ?>public/images/sh-thumb-440x210.png" alt="P-38 versus giant airship" /></li>
			</ul>
		</div>
		<div id="detail-copy" class="small-12 large-6 columns">
		<?php
//	Doesn't work with foreach loop...
//		foreach ($gameId as $g => $row) {
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
//		}	?>
		</div>
	</div>
</div>
		<!--<h1>Steel Hawks</h1>
			<p>Your base was attacked and now it's time for you to return the fight! Shoot your way through 30 waves of gunships, bombers, and fighters. Power up your guns for an even deadlier attack! Intense dogfights await as you strap into your cockpit and fire up your engines. Good hunting, pilot!</p>
			<ul>
				<li>Requirements: 186MB of free space</li>
				<li>Compatibility: Mac OSX 10.6 or higher</li>
			</ul>
			<p class="price">$3.99</p>
			<?php echo
			"<a href=?action=checkout class='btn-lg'>Download</a>"
			?>-->
		

	