<?php
//$bg_color = "#1CBB9B";
$bg_color = "#67A1C6";
$bg_color2 = "#34495E";
//$bg_color2 = "#202543";
$bg_config = 0;
?>
<style>
.new_background{
	background:  #34495E;
}
#banner {
	   
		background-attachment: scroll, scroll, scroll, fixed, fixed;
		background-color: <?= $bg_color?>;
		<?php
		if($bg_config == 1){
		?>background-image: url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.png"), url("images/background/home-office-336373_1920.jpg");
	
		<?php
		}
		?>
		
		background-position: bottom left, bottom right, top right, top left, top center;
		background-repeat: no-repeat, no-repeat, no-repeat, repeat, no-repeat;
		background-size: 25em, 25em, 25em, auto, cover;
		color: white;
		cursor: default;
		padding: 6em 0;
		text-align: center;
		
	}

#cta {
		background-attachment: scroll, scroll, scroll, fixed;
		
		background-image: url("images/pat1.png");
		background-position:top center;
		background-repeat: repeat;
		background-size: auto;
		color: white;
		background-color:  <?= $bg_color2?>;
		text-align: center;
	}
.testimonial_section{
	padding:2em;
	background-color:  <?= $bg_color?>;
}

.new_section{
	padding:2em;
	background-color:  <?= $bg_color2?>;
	background-image: url("images/pat1.png");
		background-position:top center;
		background-repeat: repeat;
		background-size: auto;
}

.update_section{
	background-attachment: scroll, scroll, scroll, fixed, fixed;
		background-color: <?= $bg_color?>;
		<?php
		if($bg_config == 1){
		?>background-image: url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.png"), url("images/background/pixabay.jpg");
	
		<?php
		}
		?>
		
		background-position: bottom left, bottom right, top right, top left, top center;
		background-repeat: no-repeat, no-repeat, no-repeat, repeat, no-repeat;
		background-size: 25em, 25em, 25em, auto, cover;
		color: white;
		cursor: default;
		padding: 3em 2em;
		text-align: center;
}
.skill_bar_section{
	background-attachment: scroll, scroll, scroll, fixed, fixed;
		background-color: <?= $bg_color?>;
		<?php
		if($bg_config == 1){
		?>background-image: url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.pngx"), url("images/bg-noise.png"), url("images/background/pixabay.jpg");
	
		<?php
		}
		?>
		
		background-position: bottom left, bottom right, top right, top left, top center;
		background-repeat: no-repeat, no-repeat, no-repeat, repeat, no-repeat;
		background-size: 25em, 25em, 25em, auto, cover;
		color: white;
		cursor: default;
		padding: 3em 2em;
		text-align: center;
}
.grid_section{
		height:5px;
		background-color:  <?= $bg_color2?>;
		background-image: url("images/pat1.png");
		background-position:top center;
		background-repeat: repeat;
		background-size: auto;
}

.new_section_button{
	width: 100%;
	color: #ffffff;
	font-size: 1em;
	padding: 10px;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	line-height: 1.5em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	border:1px solid #fff;
	background: rgba(0, 0, 0, 0) !important;
}

.new_section_button:hover{
	background: rgba(0, 0, 0, 0.2) !important;

}
#about_section{
	padding-top:4.5em;
	background-color:<?= $bg_color2?>;
	background-image: url("images/pat1.png");
		background-position:top center;
		background-repeat: repeat;
		background-size: auto;
		text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);
}
#view_blog_section{
	background-color: #fff;
	padding-top: 50px;
	text-align: left;
}
#cta_contact {
	background-color:  <?= $bg_color?>;
}
.bg_button{
	width: 100%;
	background:  <?= $bg_color?>;
	color: #ffffff;
	font-size: 1em;
	padding: 10px;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	line-height: 1.5em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
}
.bg_button:hover{
	zoom: 1;
	filter: alpha(opacity=75);
	opacity: 0.7;
	-webkit-transition: opacity .15s ease-in-out;
	-moz-transition: opacity .15s ease-in-out;
	-ms-transition: opacity .15s ease-in-out;
	-o-transition: opacity .15s ease-in-out;
	transition: opacity .15s ease-in-out;
	color:#fff !important;
}
.new_button{
	background:  <?= $bg_color?>;
	color: #ffffff;
	font-size: 1em;
	padding: 10px;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	line-height: 1.5em;
	outline: none;
	max-width:30% !important;
	width: 34.3333% !important;
	margin-top:10px !important;
}
.new_button:hover{
	zoom: 1;
	filter: alpha(opacity=75);
	opacity: 0.7;
}
.button.special {
			/*background:  <?= $bg_color?>;*/
			border-color: #fff;
			color: white !important;
		}

			.button.special:hover {
				background: rgba(0, 0, 0, 0.3);
			}
			
			/* Icon */

	.icon {
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			
			font-style: normal;
			font-weight: normal;
		}

		.icon.circle {
			-moz-transition: all 0.2s ease-in-out;
			-webkit-transition: all 0.2s ease-in-out;
			-o-transition: all 0.2s ease-in-out;
			-ms-transition: all 0.2s ease-in-out;
			transition: all 0.2s ease-in-out;
			border: 0;
			border-radius: 100%;
			display: inline-block;
			font-size: 1.25em;
			height: 2.25em;
			left: 0;
			line-height: 2.25em;
			text-align: center;
			text-decoration: none;
			top: 0;
			width: 2.25em;
		}

			.icon.circle:hover {
				top: -0.2em;
			}

			.icon.circle.fa-twitter {
				background: <?= $bg_color?>;
				color: white;
			}

				.icon.circle.fa-twitter:hover {
					background: #7fb7d2;
				}

			.icon.circle.fa-facebook {
				background: url(images/facebook-icon.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
				
			}

				.icon.circle.fa-facebook:hover {
					background: url(images/facebook-icon2.png) no-repeat center #
					;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-google-plus {
				background: url(images/google.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
			}

				.icon.circle.fa-google-plus:hover {
					background: url(images/google2.png) no-repeat center #fff;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-github {
				background: url(images/github.png) no-repeat center #fff;
				zoom: 1;
				filter: alpha(opacity=75);
				opacity: 0.7;
				
			}

				.icon.circle.fa-github:hover {
					background: url(images/github2.png) no-repeat center #fff;
					zoom: 1;
					filter: alpha(opacity=100);
					opacity: 1;
				}

			.icon.circle.fa-dribbble {
				background: <?= $bg_color?>;
				color: white;
			}

				.icon.circle.fa-dribbble:hover {
					zoom: 1;
					filter: alpha(opacity=75);
					opacity: 0.7;
				}

		.icon.feature {
			cursor: default;
			display: block;
			margin: 0 0 1.5em 0;
			opacity: 0.35;
			text-align: center;
		}

			.icon.feature:before {
				font-size: 5em;
				line-height: 1em;
			}

		.icon > .label {
			display: none;
		}
.wrapper.style2 {
			background-color: <?= $bg_color?>;
			background-image: url("images/light-bl.svg"), url("images/light-br.svg");
			background-position: bottom left, bottom right;
			background-repeat: no-repeat, no-repeat;
			background-size: 25em, 25em;
			color:white;
			padding:2em;
			border-radius: 2px;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			-o-border-radius: 2px;
	
		}
		

			.wrapper.style2 .button:hover {
				background: rgba(0, 0, 0, 0.2) !important;
			}

			.wrapper.style2 .button.special {
				background: <?= $bg_color?>;
				border-color: white;
				color: white !important;
			}

				.wrapper.style2 .button.special:hover {
					border-color: inherit !important;
					color: white !important;
				}
.contact_button{
	width: 100%;
	background:  <?= $bg_color?>;
	color: #ffffff;
	font-size: 1em;
	padding: 10px;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	line-height: 1.5em;
	outline: none;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	border:1px solid #fff;
}

.contact_button:hover{
	background: rgba(0, 0, 0, 0.2) !important;

}
.see_more{
	width: 100%;
	background:  <?= $bg_color?>;
	color: #ffffff;
	font-size: 1em;
	padding: 10px;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	
	outline: none !important;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	border-radius: 2px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-o-border-radius: 2px;
	font-weight:bold;

}
.see_more a{
	text-decoration:none;
	color:white;
	font-weight:bold;
	outline:none !important;
}
.see_more:hover{
	zoom: 1;
	filter: alpha(opacity=75);
	opacity: 0.7;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
/* Dropotron */

	.dropotron {
		background: #fff;
		 box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
		line-height: 2.25em;
		min-width: 13em;
		padding: 0 0;
		text-transform: uppercase;
		border:1px solid #fff;
	}

		.dropotron.level-0 {
			font-size: 0.7em;
			font-weight: 400;
			margin-top: 1.5em;
		}

			.dropotron.level-0:before {
				border-bottom: solid 0.5em #fff;
				border-left: solid 0.5em transparent;
				border-right: solid 0.5em transparent;
				
				left: 0.75em;
				position: absolute;
				top: -0.45em;
			}

		.dropotron > li {
			border-top: solid 1px rgba(124, 128, 129, 0.2);
		
		}

			.dropotron > li > a {
				-moz-transition: none;
				-webkit-transition: none;
				-o-transition: none;
				-ms-transition: none;
				transition: none;
				color: inherit;
				text-decoration: none;
				padding: 10px 1em;
				border: 0;
				-webkit-transition: all 0.3s ease-in-out;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
				
			}

			.dropotron > li:hover > a {
				background: <?= $bg_color?>;
				color: white;
				-webkit-transition: all 0.3s ease-in-out;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
			}

			.dropotron > li:first-child {
				border-top: 0;
			}
header.special:before, header.special:after {
			
			content: '';
			height: 7px;
			opacity:0.2;
			position: absolute;
			top: 1em;
			width: 43%;
		}
.garis_title{
	border-top: 5px solid <?=$bg_color?>;
	width:100%;
	height:5px;
	opacity:0.2;
	margin-top:18px;
	}
.garis_title2{
	border-top: 5px solid #fff;
	width:100%;
	height:5px;
	opacity:0.2;
	margin-top:18px;
	}
.img_about{
	width:200px;
	height:200px;
	border-radius:50%;
	border:10px solid #fff;
	margin:1em;
}

/* Timeline */

.cd-timeline-img.cd-default {
  background: <?= $bg_color2?>;

}
.cd-timeline-content {

}

/* Skill bar */

.progress {
  width: 100%;
  height: 50px;
}

.progress-wrap1, .progress-wrap2, .progress-wrap3, .progress-wrap4, .progress-wrap5, .progress-wrap6 {
  background: <?= $bg_color?>;
  color:#fff;
  text-align: left !important;
  font-weight: bold;
  padding-top: 10px;
  padding-left:10px;
  overflow: hidden;
  position: relative;
  border:1px solid <?= $bg_color?>;
}


.progress-wrap1 .progress-bar1,  .progress-wrap2 .progress-bar2, .progress-wrap3 .progress-bar3, .progress-wrap4 .progress-bar4, .progress-wrap5 .progress-bar5, .progress-wrap6 .progress-bar6{
  background: #293A4B;
  left: 0;
  position: absolute;
  top: 0;
  
}

.skill_title{
	
	margin-bottom:5px;
	font-weight: 500;
}

.blog_title{
	font-size: 2em;
	line-height: 1em;
}
.blog_description{
	color:#666;
	line-height: 1.8em;
}

.wagwep-container ul#portfolio-filter li.current a{color:#333;font-weight:400;background:<?= $bg_color?>;color:#fff}
	
.og-grid li a figure{position:absolute;background: url(images/search_por.png) no-repeat center <?= $bg_color ?> ; opacity:50%; width:100%;height:100%}

.og-expander{position:absolute;background:<?= $bg_color2 ?>;color:#d6d6d6;top:auto;left:0;width:100%;margin-top:0;text-align:left;height:0;overflow:hidden}


</style>