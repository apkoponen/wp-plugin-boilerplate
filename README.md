# WordPress Plugin Boilerplate

[![Build Status](https://travis-ci.org/frozzare/wp-plugin-boilerplate.svg?branch=master)](https://travis-ci.org/frozzare/wp-plugin-boilerplate)

Plugin Boilerplate requires PHP 5.4.

## Coding Style

Follow [PSR-2](http://www.php-fig.org/psr/psr-2/) with the following changes:

- Indent with 2 spaces.
- Opening braces for functions and classes forced on the same line.
- Allow new line before last `}`.
- Forced newline after opening brace.

Additional rules:

- Use short array syntax.

Follow [PSR-4](http://www.php-fig.org/psr/psr-4/) for autoloading.

You can check if your code passes the styleguide by installing [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and running the following in your project directory:

```
phpcs --standard=phpcs.xml --extensions=php -n -s .
```
