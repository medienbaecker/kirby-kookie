# Kirby Kookie (WIP)

Let users accept/reject cookies and display `site/snippets/cookies_accepted.php` conditionally.

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
