<?php
/**
 * @package     Bootstrap
 * @subpackage  tpl_bootstrap
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Initialiase variables.
$app = JFactory::getApplication();
$path = $this->baseurl . '/templates/' . $this->template;

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="utf-8">
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/prettyPhoto.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/style.css">
	<!--[if lte IE 8]><link href="css/ie.css" rel="stylesheet"><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="shortcut icon" href="<?php echo $path; ?>/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $path; ?>/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $path; ?>/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $path; ?>/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $path; ?>/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div class="container">
		<header>
			<div id="top-panel">
				<div class="login-box">
					<form>
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-user">
								</i>
							</span>
							<input class="span2" id="username" type="text" name="username" placeholder="User Name">
						</div>
						<div class="input-prepend">
							<span class="add-on">
								<i class="icon-lock">
								</i>
							</span>
							<input class="span2" id="userpassword" type="password" name="userpassword"
							placeholder="Password">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							Remember me
						</label>
						<button type="submit" class="btn">
							Sign in
						</button>
					</form>
				</div>
				<div class="login-button toggle">
					<a href="#">Sign in</a>
				</div>
			</div>
			<div class="row">
				<div class="span3 logo">
					<a href="index.html"><h1>Tiago Garcia</h1><h2 class="logo">Analista & Desenvolvedor Sistemas Web</h2></a>
				</div>
				<div class="span9 navigation">
					<div id="menu" class="fix-fish-menu clearfix">
						<!-- Modulo Menu -->
						<jdoc:include type="modules" name="bootstrap-mainmenu" style="none" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="border-5-1">
					</div>
				</div>
				<div class="span9">
					<div class="border-5-1 hide-border">
					</div>
				</div>
			</div>
			<!-- Modulo social -->
			<jdoc:include type="modules" name="bootstrap-social" style="none" />
		</header>
		<!-- Conteudo -->
		<jdoc:include type="component" />

		<div class="row">
			<!-- Modulo Slide Show -->
			<jdoc:include type="modules" name="bootstrap-slideshow" style="none" />
		</div>
		<div class="row">
			<div class="span3">
				<!-- Modulo Serviços -->
				<div class="services clearfix">
					<h4 class="colored">
						Hey.
						<br/>
						We are a team of web developers with a sense of style and uniqueness.
					</h4>
					<p>
						Maecenas purus metus, interdum eu auctor eu, dignissim nec nisl. Suspendisse
						luctus placerat augue a cursus. Mauris sit amet odio ac urna placerat blandit
						at commodo eros. Pellentesque habitant morbi tristique senectus et netus
						et malesuada fames ac turpis egestas.
					</p>
					<a href="#" class="rm-link">View all services</a>
				</div>
			</div>
			<div class="srv-block">
				<div class="srv-block1">
					<h4 class="colored">
						Easy to Customize
					</h4>
					<p class="italic">
						Maecenas purus metus, interdum eu auctor eu, dignissim nec nisl. Suspendisse
						luctus placerat augue a cursus. Mauris sit amet odio ac urna placerat blandit
						at commodo eros. Pellentesque habitant morbi tristique senectus et netus
						et malesuada fames ac turpis egestas.
					</p>
					<div class="quartercircletopleft">
						<a href="#"></a>
					</div>
				</div>
				<div class="srv-block2">
					<h4 class="colored">
						Support All Major Browsers
					</h4>
					<p class="italic">
						Legere semper everti at has, ea wisi periculis est, eos ut ullum error
						perfecto. Labores democritum ius cu, stet instructior mediocritatem eu
						mea. Ius ex saperet evertitur. Est in quot detraxit, soleat senserit no
						vis. Mei meis timeam maiorum et, te esse quas maluisset.
					</p>
					<div class="quartercircletopright">
						<a href="#"></a>
					</div>
				</div>
				<div class="srv-block3">
					<h4 class="colored">
						Clean &amp; Creative
					</h4>
					<p class="italic">
						Sed tale decore facete ad, lorem accusam electram at has. Iusto sententiae
						interpretaris mea ei, eum at eirmod vivendo. Soluta honestatis eam no,
						eu quo elitr semper, primis animal tamquam est eu. Vix id aliquam intellegam
						eloquentiam. Ne vel sumo ludus vivendum, cum eros magna delicata at. Dolore
						labores eos an, ut has quot commodo habemus.
					</p>
					<div class="quartercirclebottomleft">
						<a href="#"></a>
					</div>
				</div>
				<div class="srv-block4">
					<h4 class="colored">
						24 Hours Support
					</h4>
					<ul class="italic unstyled">
						<li>
							<i class="icon-time">
							</i>
							<p>
								Backup &amp; recover data 24/7 for enhanced security.
							</p>
						</li>
						<li>
							<i class="icon-briefcase">
							</i>
							<p>
								Project/Program assessment &amp; management.
							</p>
						</li>
						<li>
							<i class="icon-lock">
							</i>
							<p>
								Internet-based data protection.
							</p>
						</li>
						<li>
						</li>
					</ul>
					<div class="quartercirclebottomright">
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin40">
			<div class="span3">
				<div class="border-5-1">
				</div>
			</div>
			<div class="span9">
				<div class="border-5-1 hide-border">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="span3">
				<!-- Modulo Portifolio -->
				<div class="latest-projects clearfix">
					<h4 class="colored">
						Check out our portfolio.
					</h4>
					<p>
						Maecenas purus metus, interdum eu auctor eu, dignissim nec nisl. Suspendisse
						luctus placerat augue a cursus.
					</p>
					<a href="#" class="rm-link">View all projects</a>
				</div>
			</div>
			<div class="projects-block">
				<div class="span3">
					<div class="projects-box view">
						<img src="<?php echo $path; ?>/img/projects/img02.jpg" alt="Portfolio Item #1" />
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
								<a href="item.html" class="link-icon"></a>
							</div>
						</div>
						<div class="projects-meta">
							<span class="month">
								June
							</span>
							<span class="date">
								05
							</span>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="projects-box view">
						<img src="<?php echo $path; ?>/img/projects/img01.jpg" alt="Portfolio Item #2" />
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
								<a href="item.html" class="link-icon"></a>
							</div>
						</div>
						<div class="projects-meta">
							<span class="month">
								June
							</span>
							<span class="date">
								02
							</span>
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="projects-box view">
						<img src="<?php echo $path; ?>/img/projects/img03.jpg" alt="Portfolio Item #3" />
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
								<a href="item.html" class="link-icon"></a>
							</div>
						</div>
						<div class="projects-meta">
							<span class="month">
								May
							</span>
							<span class="date">
								23
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row margin40">
			<div class="span3">
				<div class="border-5-1">
				</div>
			</div>
			<div class="span9">
				<div class="border-5-1 hide-border">
				</div>
			</div>
		</div>
		<footer class="footer row">
			<div class="span3">
				<!-- Modulo de contato -->
				<jdoc:include type="modules" name="bootstrap-contact" style="widget" />
			</div>
			<div class="span9 footer-widgets clearfix">
				<!-- Modulo de widgets -->
				<jdoc:include type="modules" name="bootstrap-footer" style="widget" />
				<div class="widget">
					<h5>
						Flickr Photos
					</h5>
					<ul class="flickr thumbs">
					</ul>
				</div>
			</div>
		</footer>
		<div id="bottom-panel" class="clearfix">
			<span class="site-name">
				Tiago Garcia — Development Websites and Mobile with Joomla and Rails.
			</span>
			<span>
				Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo $this->baseurl; ?>">
				<?php echo $app->getCfg('sitename'); ?></a>
			</span>
		</div>
	</div>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jflickrfeed.min.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/jquery.preloader.js"></script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/respond.min.js"></script>
	<script type="text/javascript">
	jQuery.noConflict()(function($) {
		$(".header-tweet .tweet").tweet({
			count: 1,
			username: "tiagovtg",
			loading_text: "<?php echo JText::_('TPL_BOOTSTRAP_LOADING_TWITTER'); ?>"
		});
	});
	</script>
	<script type="text/javascript" src="<?php echo $path; ?>/js/custom.js">
	</script>
	<script type="text/javascript">
	var runFancy = true;
	</script>
	<!--[if IE]>
		<script type="text/javascript">
						runFancy = false;
		</script>
		<![endif]-->
		<script type="text/javascript">
		if (runFancy) {
			jQuery.noConflict()(function($) {
				$(".view").preloader();
			});
		};
		</script>
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33887675-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
	</body>
	</html>
