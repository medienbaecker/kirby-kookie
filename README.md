# Kirby Kookie (WIP)

Let users accept/reject cookies and display the `<script>` tags in `site/snippets/cookies_accepted.php` conditionally.

Simply insert `<?php snippet('kookie') ?>` and you're good to go.

![Preview](https://user-images.githubusercontent.com/7975568/91409020-17ecbe00-e845-11ea-8d3f-3c16a56b90cc.gif)


## Options

```php
# site/config/config.php
return [
  'medienbaecker.kookie.color' => '#000000',
  'medienbaecker.kookie.background-color' => '#ffffff',
  'medienbaecker.kookie.color-accept' => '#ffffff',
  'medienbaecker.kookie.background-color-accept' => '#000000',
  'medienbaecker.kookie.color-reject' => '#ffffff',
  'medienbaecker.kookie.background-color-reject' => '#777777',
  'medienbaecker.kookie.text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  'medienbaecker.kookie.link' => 'privacy',
  'medienbaecker.kookie.linkText' => 'Learn more',
  'medienbaecker.kookie.accept' => 'Accept',
  'medienbaecker.kookie.reject' => 'Reject',
]
