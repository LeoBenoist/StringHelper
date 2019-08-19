# StringHelper

## Usage:

### StringHelper::toUpperCamelCase($string)

```php
    use LeoBenoist\StringHelper\StringHelper;
    
    StringHelper::toUpperCamelCase('CamelCase');
    StringHelper::toUpperCamelCase('camelCase');
    StringHelper::toUpperCamelCase('camel_case');
    StringHelper::toUpperCamelCase('camel case');
```

Result: `CamelCase`

### StringHelper::toLowerCamelCase($string)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::toLowerCamelCase('CamelCase');
    StringHelper::toLowerCamelCase('camelCase');
    StringHelper::toLowerCamelCase('camel_case');
    StringHelper::toLowerCamelCase('camel case');
    StringHelper::toLowerCamelCase('camel Case');
```
Result: `camelCase`

### StringHelper::toSnakeCase($string)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::toSnakeCase('SnakeCase');
    StringHelper::toSnakeCase('snakeCase');
    StringHelper::toSnakeCase('snake_case');
    StringHelper::toSnakeCase('snake case');
    StringHelper::toSnakeCase('snake Case');
```
Result: `snake_case`
    
### StringHelper::toLowerCase($string)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::toLowerCase('LowerCase');
    StringHelper::toLowerCase('lowerCase');
    StringHelper::toLowerCase('lower_case');
    StringHelper::toLowerCase('lower case');
    StringHelper::toLowerCase('lower Case');
```
Result: `lower case`

### StringHelper::toHumanCase($string)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::toHumanCase('HumanCase');
    StringHelper::toHumanCase('humanCase');
    StringHelper::toHumanCase('human_case');
    StringHelper::toHumanCase('human case');
    StringHelper::toHumanCase('human Case');
```
Result: `Human case`

### StringHelper::endWith(string $haystack, string $needle)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::endsWith('WillItEndWithTheWordEnd', 'End');
```
Result: `true`

### StringHelper::startsWith(string $haystack, string $needle)
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::startsWith('WillItStartsWithTheWordWill', 'Will');
```
Result: `true`

### StringHelper::extractPrefix(string $haystack, string $separator = '-')
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::extractPrefix('pre-fix');
    StringHelper::extractPrefix('pre-bla-fix');
```
Result: `pre`

### StringHelper::extractSuffix(string $haystack, string $separator = '-')
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::extractSuffix('suf-fix');
    StringHelper::extractSuffix('suf-bla-fix');
    StringHelper::extractSuffix('suf#fix', '#');
```
Result: `fix`

### StringHelper::removePrefix(string $haystack, string $separator = '-')
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::removePrefix('pre-fix');
    StringHelper::removePrefix('pre#fix', '#');
```
Result: `fix`

### StringHelper::removeSuffix(string $haystack, string $separator = '-')
```php
    use LeoBenoist\StringHelper\StringHelper;

    StringHelper::removeSuffix('pre-fix');
    StringHelper::removeSuffix('pre#fix', '#');
```
Result: `pre`

### StringHelper::stringContains(string $haystack, string $needle)
```php
    use LeoBenoist\StringHelper\StringHelper;

    $this->assertTrue(StringHelper::contains('It is better to offer no excuse than a bad one.', 'better');
```
Result: `true`

## Run tests
` ./vendor/phpunit/phpunit/phpunit`
