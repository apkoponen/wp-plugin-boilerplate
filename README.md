# WordPress Plugin Boilerplate

## Coding Style

Follow [PSR-2](http://www.php-fig.org/psr/psr-2/) with the following changes:

- Indent with 2 spaces.
- Opening and closing braces for functions and classes forced on the same line.
- Allow brace after body before last `}`

Additional rules:

- Use short array syntax.

Follow [PSR-4](http://www.php-fig.org/psr/psr-4/) for autoloading.

You can check if your code passes the styleguide by installing [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) and running the following in your project directory:

```
phpcs --standard=phpcs.xml --extensions=php -n -s .
```
