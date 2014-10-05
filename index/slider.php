   <div class="slider"><!-- start slider -->
				<div id="da-slider" class="da-slider">
					<?php
					$q_slider = mysql_query("select * from sliders");
					while($r_slider = mysql_fetch_array($q_slider)){
					?>
						<div class="da-slide">
							<h2><?= $r_slider['slider_title'] ?></h2>
							<p><?= $r_slider['slider_description'] ?></p>
						</div>
					<?php
					}
					?>

						<nav class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</nav>
				</div>
			</div>