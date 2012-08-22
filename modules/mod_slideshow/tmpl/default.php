<ul id="main-carousel" class="jcarousel-skin-tango">
	<?php foreach ($list as $item):
	// Initialize Variables
	$images = json_decode($item->images);
	?>
		<li>
			<div class="carousel-box">
				<div class="block view">
					<img src="<?php echo $images->image_intro; ?>" alt="<?php echo $item->title ?>" />
					<div class="mask">
						<div class="mask-icon">
							<div class="quartercircletopleft-mask">
								<a href="#"></a>
							</div>
							<div class="quartercircletopright-mask">
								<a href="#"></a>
							</div>
							<div class="quartercirclebottomright-mask">
								<a href="#"></a>
							</div>
							<div class="quartercirclebottomleft-mask">
								<a href="#"></a>
							</div>
							<a href="<?php echo $images->image_intro; ?>" data-rel="prettyPhoto" class="zoom-icon"></a>
						</div>
					</div>
				</div>
				<h4>
					<?php echo htmlspecialchars(JString::substr($item->title,0,31)); ?>
				</h4>
				<div class="border-5-1">
				</div>
			</div>
		</li>
	<?php endforeach ?>
</ul>