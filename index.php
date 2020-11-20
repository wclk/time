<?php
/**
 * Time前端基于Multiverse。由钻芒开发适配  你可以在<a href="https://www.zmki.cn/4953.html">钻芒博客</a>获得此模板更新信息。请保留底部版权。否则不欢迎使用<br><b>1.1.2更新说明</b>（打包时间:2020年2月12日02:38:28）<ul><li>原生js懒加载。完美提升加载速度</li><li>图片处理集成到后台，配合oss使用。【推荐】</li><li>增加全屏切换并美化侧边滚动条</li><li>后台新增cnzz等一些细小的功能及代码优化</li></ul>
 * @package Time
 * @author zmki
 * @version 1.1.2
 * @link https://www.zmki.cn/
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php $this->options->IndexName(); ?>-<?php $this->options->Indexdict() ?>	</title>
		<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="keywords" content="<?php $this->options->keywords(); ?>"/>
		<meta name="description" content="<?php $this->options->description(); ?>"/>
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/fontawesome-all.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" />
		<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/noscript.css'); ?>" /></noscript>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="//at.alicdn.com/t/font_1635479_m8o2ir6mitf.css">
		<script src="https://at.alicdn.com/t/font_1635479_m8o2ir6mitf.js"></script>  
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
		<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<h1><a href="<?php $this->options->siteUrl(); ?>"><strong><?php $this->options->zmkiabout() ?></strong> <?php $this->options->zmkiabouts() ?></a></h1>
						<nav>
							<ul>
								<li><a type="button" id="fullscreen" class="btn btn-default visible-lg visible-md" alt="切换全屏"><svg  class="icon-zmki zmki_dh zmki_wap" aria-hidden="true"><use xlink:href="#icon-zmki-ziyuan-copy"></use></svg></a></li>
								<li><a href="#footer" class="icon solid fa-info-circle">关于</a></li>
							</ul>
						</nav>
					</header>
					<!-- Main -->
			<div id="main" >	
			
				<?php while($this->next()): ?>
				   <article class="thumb img-area">
				    <a class="image my-photo"  alt="loading"  data-src="<?php echo $this->fields->img();?><?php $this->options->zmki_ys()?>"  href="<?php echo $this->fields->img();?><?php $this->options->zmki_sy()?>" >
				   		<img class="zmki_px  my-photo" data-src="<?php echo $this->fields->img();?><?php $this->options->zmki_ys()?>"  />
				   	  </a> 
						<h2><?php $this->title() ?></h2>
						<p><?php $this->content('Continue Reading...'); ?></p>
				   </article>
				  <?php endwhile; ?>
				</div> 
<body>
 				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div class="inner split">
							<div>
								<section>
									<h2>关于<?php $this->options->IndexName() ?></h2>
									<p><?php $this->options->Biglogo () ?></p>
								</section>
								<section>
									<h2>联系我</h2>
									<ul class="icons">								
						<li><a href="<?php $this->options->xxhome()?>" target="_blank" class="icon brands fa-telegram"><span class="label">HOOME</span></a></li>
						<li><a href="<?php $this->options->xxqq()?>"  target="_blank" class="icon brands fa-qq"><span class="label">QQ</span></a></li>
						<li><a href="<?php $this->options->xxweibo()?>"  target="_blank" class="icon brands fa-weibo"><span class="label">weibo</span></a></li>
						<li><a href="<?php $this->options->xxgithub()?> "  target="_blank" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
										</ul>
								</section> 
								<span style="color: #b5b5b5; font-size: 0.8em;">
									<?php $this->options->cnzz()?>
								<p class="copyright">
									&copy; Design HTML UP  Modify BY ZMKI  THEME:<a href="https://www.zmki.cn/4953.html">Time</a>. ICP备案号:<a href="http://beian.miit.gov.cn/"target="_blank" ><?php $this->options->icp()?></a>
								</p>
								<div>
							</div>
							</div>
							<div>
					</footer>
</div>	
<script type="text/javascript">
function isInSight(el) {
  const bound = el.getBoundingClientRect();
  const clientHeight = window.innerHeight;
  //如果只考虑向下滚动加载
  //const clientWidth=window.innerWeight;
  return bound.top <= clientHeight + 100;
}

let index = 0;
function checkImgs() {
  const imgs = document.querySelectorAll('.my-photo');
  for (let i = index; i < imgs.length; i++) {
    if (isInSight(imgs[i])) {
      loadImg(imgs[i]);
      index = i;
    }
  }
  // Array.from(imgs).forEach(el => {
  //   if (isInSight(el)) {
  //     loadImg(el);
  //   }
  // })
}

function loadImg(el) {
  if (!el.src) {
    const source = el.dataset.src;
    el.src = source;
  }
}

function throttle(fn, mustRun = 10) {
  const timer = null;
  let previous = null;
  return function() {
    const now = new Date();
    const context = this;
    const args = arguments;
    if (!previous) {
      previous = now;
    }
    const remaining = now - previous;
    if (mustRun && remaining >= mustRun) {
      fn.apply(context, args);
      previous = now;
    }
  }
}
 		</script>
		  <script>
    window.onload=checkImgs;
    window.onscroll = throttle(checkImgs);
  </script>
</div> 
		<!-- Scripts -->
			<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/jquery.poptrox.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/browser.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
			
	</body>
</html>