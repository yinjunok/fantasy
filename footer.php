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

		pre code {
			border: none;
			background: none;
			font-size: 1em;
			color: #abb2bf;
			background-color: transparent;
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
			width: 38px;
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
<!-- <a id="back_to_top" href="#top" class="back_to_top"><span>△</span></a> -->
<!-- <script>
	window.addEventListener('DOMContentLoaded', function() {
		var toTop = document.getElementById('back_to_top')
		window.addEventListener('resize', function() {
			if (window.innerWidth > 580) {
				toTop.style.display = 'none'
			} else {
				toTop.style.display = 'block'
			}
		})
		window.addEventListener('scroll', function() {
			const scrollTop = document.documentElement.scrollTop + document.body.scrollTop
			if (scrollTop > 30) {
				toTop.style.display = 'block'
			} else {
				toTop.style.display = 'none'
			}
		})
	})
</script> -->
<?php $this->footer(); ?>
</body>

</html>
