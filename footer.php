<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer><span>© <?php echo date('Y'); ?> <?php $this->options->title(); ?> - <a href="<?php $this->options->feedUrl(); ?>"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->publishedPostsNum() ?> Posts crafted</a></span><span> ♥ <a href="https://github.com/PCDotFan/Aragaki">Aragaki</a> By <a href="https://www.xde.io/typecho/fantasy.html">Xingr</a></span>

	<div class="powered_by">
		<span>Proudly published with</span>
		<a href="http://typecho.org/" target="_blank">Typecho</a>
	</div>
	<div class="footer_slogan">
	</div>
</footer>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/fonts.css'); ?>">
<?php if ($this->is('post') || $this->is('page') && $this->options->useHighline == 'able') : ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@latest/build/styles/atom-one-dark.min.css">
	<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@latest/build/highlight.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/highlightjs-line-numbers.js@2.7.0/dist/highlightjs-line-numbers.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', (event) => {
			document.querySelectorAll('pre').forEach((block) => {
				hljs.highlightBlock(block);
				hljs.lineNumbersBlock(block, {
					singleLine: true
				});
			});
		});
	</script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.207/distr/fira_code.css">
	<style>
		code,
		pre {
			font-family: "Fira Code", monospace;
		}

		@supports (font-variation-settings: normal) {
			code {
				font-family: "Fira Code VF", monospace;
			}
		}

		pre {
			border-radius: 4px;
			line-height: 1.8;
		}

		pre .hljs-regexp {
			background: transparent;
		}

		pre code {
			background: none;
		}

		pre table {
			table-layout: auto;
			background: none;
			border: none;
			margin: 8px 0;
		}

		pre td,
		th {
			border-top: none;
		}

		pre td:first-child,
		pre th:first-child {
			text-align: center;
			border-left: none;
		}

		pre td:nth-child(2),
		pre td:nth-child(2) {
			padding-left: 1em;
			border-left: 1px solid #999;
		}

		pre table tbody>tr:nth-child(odd)>td,
		pre table tbody>tr:nth-child(odd)>th {
			background: transparent
		}
	</style>
	<!-- <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.1.1/build/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script> -->
<?php endif; ?>
<style type="text/css">
	a.back_to_top {
		text-decoration: none;
		position: fixed;
		bottom: 40px;
		right: 30px;
		background: #f0f0f0;
		height: 40px;
		width: 40px;
		border-radius: 50%;
		line-height: 36px;
		font-size: 18px;
		text-align: center;
		transition-duration: .5s;
		transition-propety: background-color;
		display: none
	}

	a.back_to_top span {
		color: #888
	}

	a.back_to_top:hover {
		cursor: pointer;
		background: #dfdfdf
	}

	a.back_to_top:hover span {
		color: #555
	}

	@media print,
	screen and (max-width:580px) {
		.back_to_top {
			display: none !important
		}
	}
</style>
<a id="back_to_top" href="#top" class="back_to_top"><span>△</span></a>
<script>
	$(document).ready((function(_this) {
		return function() {
			var bt;
			bt = $('#back_to_top');
			if ($(document).width() > 480) {
				$(window).scroll(function() {
					var st;
					st = $(window).scrollTop();
					if (st > 30) {
						return bt.css('display', 'block')
					} else {
						return bt.css('display', 'none')
					}
				});
				return bt.click(function() {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false
				})
			}
		}
	})(this));
</script>
<?php $this->footer(); ?>
</body>

</html>