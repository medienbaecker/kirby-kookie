<?php
	if(isset($_POST['cookies_accept'])) {
		Cookie::set("cookies_switch", "true");
	}
	elseif(isset($_POST['cookies_reject'])) {
		Cookie::set("cookies_switch", "false");
	}
?>

<?php if (!Cookie::exists("cookies_switch")): ?>

	<div class="kookie">
		<form action="<?= $page->url() ?>" method="POST">
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

<?php elseif (Cookie::get("cookies_switch") AND Cookie::get("cookies_switch") == "true"): ?>

	<?php snippet('cookies_accepted') ?>
	
<?php endif ?>