<?php
	if(isset($_POST['cookies_accept'])) {
		setcookie("kookie", 'true', time() + 3600);
	}
	elseif(isset($_POST['cookies_reject'])) {
		setcookie("kookie", 'false', time() + 3600);
	}
?>

<?php if (!isset($_COOKIE['kookie'])): ?>

	<div class="kookie">
		<form id="kookie_form" action="<?= $page->url() ?>" method="POST">
			<div class="kookie_text">
				<?= option('medienbaecker.kookie.text') ?>
				<a href="<?= option('medienbaecker.kookie.link') ?>"><?= option('medienbaecker.kookie.linkText') ?></a>
			</div>
			<div class="kookie_buttons">
				<button class="kookie_button_accept" type="submit" name="cookies_accept"><?= option('medienbaecker.kookie.accept') ?></button>
				<button class="kookie_button_reject" type="submit" name="cookies_reject"><?= option('medienbaecker.kookie.reject') ?></button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		var buttons = document.querySelectorAll('.kookie_buttons button');
		buttons.forEach(function(button) {
			button.addEventListener("click", function(e) {
				if(button.getAttribute('name') == 'cookies_accept') {
					fetch('<?= $site->url() ?>/kookie/cookies_accepted').then(function (response) {
						return response.text();
					}).then(function (html) {
						var scripts = document.createElement('div');
						scripts.innerHTML = html;
						scripts.querySelectorAll('script').forEach(function(script) {
							var newScript = document.createElement("script");
							newScript.setAttribute("type", "text/javascript");
							newScript.text = script.innerHTML;
							document.body.appendChild(newScript);
						});
					});
					document.cookie = "kookie=true";
					document.querySelector('.kookie').remove();
				}
				else {
					document.cookie = "kookie=false";
					document.querySelector('.kookie').remove();
				}
				e.preventDefault();
			});
		})
	</script>

	<style>
		.kookie {
			--kookie-color: <?= option('medienbaecker.kookie.color') ?>;
			--kookie-background-color: <?= option('medienbaecker.kookie.background-color') ?>;
			--kookie-color-accept: <?= option('medienbaecker.kookie.color-accept') ?>;
			--kookie-background-color-accept: <?= option('medienbaecker.kookie.background-color-accept') ?>;
			--kookie-color-reject: <?= option('medienbaecker.kookie.color-reject') ?>;
			--kookie-background-color-reject: <?= option('medienbaecker.kookie.background-color-reject') ?>;
			position: fixed;
			bottom: 0;
			right: 0;
			padding: 20px;
			display: flex;
			flex-direction: column;
			box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
			line-height: 1.25;
			width: 100%;
			box-sizing: border-box;
			max-width: 500px;
			background-color: var(--kookie-background-color);
		}
			.kookie_text {

			}
				.kookie_text a:hover {
					color: var(--kookie-highlight);
				}
			.kookie_buttons {
				display: flex;
				align-items: flex-end;
				margin-top: 20px;
			}
				.kookie_buttons button {
					appearance: none;
					border: none;
					font: inherit;
					display: block;
					text-decoration: none;
					padding: 10px;
					background: var(--kookie-color);
					color: var(--kookie-background-color);
					cursor: pointer;
				}
				.kookie_buttons .kookie_button_accept {
					color: var(--kookie-color-accept);
					background-color: var(--kookie-background-color-accept);
					margin-right: 10px;
				}
				.kookie_buttons .kookie_button_reject {
					color: var(--kookie-color-reject);
					background-color: var(--kookie-background-color-reject);
				}
	</style>

<?php elseif (isset($_COOKIE['kookie']) AND $_COOKIE['kookie'] == "true"): ?>
	<?php snippet('cookies_accepted') ?>
<?php endif ?>