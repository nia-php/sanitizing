# nia - Sanitizing

Sanitizing component provides classes and interfaces to sanitize values.

## Installation

Require this package with Composer.

```bash
	composer require nia/sanitizing
```

## Tests
To run the unit test use the following command:

    $ cd /path/to/nia/component/
    $ phpunit --bootstrap=vendor/autoload.php tests/

## Sanitizers
The component provides several sanitizers but you are able to write your own sanitizer by implementing the `Nia\Sanitizing\SanitizerInterface` interface for a more specific use case.

| Sanitizer | Description |
| --- | --- |
| `Nia\Sanitizing\ClosureSanitizer` | Sanitizer using a closure. |
| `Nia\Sanitizing\CompositeSanitizing` | Composite sanitizers are used to combine multiple sanitizers and use them as one. |
| `Nia\Sanitizing\NonWhitespaceSanitizer` | Sanitizer to remove all whitespaces from the passed content. |
| `Nia\Sanitizing\NullSanitizer` | Null sanitizer object implementation. |
| `Nia\Sanitizing\TrimSanitizer` | Sanitizer to remove all leading and trailing whitespaces from the passed content. |

## How to use
The following sample shows you how to use the `Nia\Sanitizing\NonWhitespaceSanitizer`.

```php
	$sanitzer = new NonWhitespaceSanitizer();
	echo $sanitzer->sanitize(" \t \r \n foo\n \tbar \n"); // foobar
```
