<?php

namespace LeoBenoist\Tests\StringHelper;

use LeoBenoist\StringHelper\StringHelper;
use PHPUnit\Framework\TestCase;

/**
 * @author Léo Benoist <jobs.leo@benoi.st>
 */
class StringHelperTest extends TestCase
{
    public function testToUpperCamelCase()
    {
        $this->assertEquals('CamelCase', StringHelper::toUpperCamelCase('CamelCase'));
        $this->assertEquals('CamelCase', StringHelper::toUpperCamelCase('camelCase'));
        $this->assertEquals('CamelCase', StringHelper::toUpperCamelCase('camel_case'));
        $this->assertEquals('CamelCase', StringHelper::toUpperCamelCase('camel case'));
        $this->assertEquals('CamelCase', StringHelper::toUpperCamelCase('camel Case'));
    }

    public function testToLowerCamelCase()
    {
        $this->assertEquals('camelCase', StringHelper::toLowerCamelCase('CamelCase'));
        $this->assertEquals('camelCase', StringHelper::toLowerCamelCase('camelCase'));
        $this->assertEquals('camelCase', StringHelper::toLowerCamelCase('camel_case'));
        $this->assertEquals('camelCase', StringHelper::toLowerCamelCase('camel case'));
        $this->assertEquals('camelCase', StringHelper::toLowerCamelCase('camel Case'));
    }

    public function testToSnakeCase()
    {
        $this->assertEquals('snake_case', StringHelper::toSnakeCase('SnakeCase'));
        $this->assertEquals('snake_case', StringHelper::toSnakeCase('snakeCase'));
        $this->assertEquals('snake_case', StringHelper::toSnakeCase('snake_case'));
        $this->assertEquals('snake_case', StringHelper::toSnakeCase('snake case'));
        $this->assertEquals('snake_case', StringHelper::toSnakeCase('snake Case'));
    }
    
    public function testToLowerCase()
    {
        $this->assertEquals('lower case', StringHelper::toLowerCase('LowerCase'));
        $this->assertEquals('lower case', StringHelper::toLowerCase('lowerCase'));
        $this->assertEquals('lower case', StringHelper::toLowerCase('lower_case'));
        $this->assertEquals('lower case', StringHelper::toLowerCase('lower case'));
        $this->assertEquals('lower case', StringHelper::toLowerCase('lower Case'));
    }

    public function testToHumanCase()
    {
        $this->assertEquals('Human case', StringHelper::toHumanCase('HumanCase'));
        $this->assertEquals('Human case', StringHelper::toHumanCase('humanCase'));
        $this->assertEquals('Human case', StringHelper::toHumanCase('human_case'));
        $this->assertEquals('Human case', StringHelper::toHumanCase('human case'));
        $this->assertEquals('Human case', StringHelper::toHumanCase('human Case'));
    }

    public function testStringEndWith()
    {
        $this->assertTrue(StringHelper::endsWith('WillItEndWithTheWordEnd', 'End'));
        $this->assertFalse(StringHelper::endsWith('ItShouldNotWorkLikeContain', 'Should'));
    }

    public function testStringStartsWith()
    {
        $this->assertTrue(StringHelper::startsWith('WillItStartsWithTheWordWill', 'Will'));
        $this->assertTrue(StringHelper::startsWith('WillItStartsWithTheCorrectWord', 'Will'));
        $this->assertFalse(StringHelper::startsWith('ShouldNotWork(It)LikeContainIt', 'It'));
    }

    public function testExtractPrefix()
    {
        $this->assertEquals('pre', StringHelper::extractPrefix('pre-fix'));
        $this->assertEquals('pre', StringHelper::extractPrefix('pre-bla-fix'));
        $this->assertEquals('pre', StringHelper::extractPrefix('pre#fix', '#'));
    }

    public function testExtractSuffix()
    {
        $this->assertEquals('fix', StringHelper::extractSuffix('suf-fix'));
        $this->assertEquals('fix', StringHelper::extractSuffix('suf-bla-fix'));
        $this->assertEquals('fix', StringHelper::extractSuffix('suf#fix', '#'));
    }

    public function testRemovePrefix()
    {
        $this->assertEquals('fix', StringHelper::removePrefix('pre-fix'));
        $this->assertEquals('bla-fix', StringHelper::removePrefix('pre-bla-fix'));
        $this->assertEquals('fix', StringHelper::removePrefix('pre#fix', '#'));
    }

    public function testStringContains()
    {
        $this->assertTrue(StringHelper::contains('It is better to offer no excuse than a bad one.', 'better'));
        $this->assertTrue(StringHelper::contains('It is better to offer no excuse than a bad one.', 'It is better'));
        $this->assertTrue(StringHelper::contains('It is better to offer no excuse than a bad one.', 'one.'));
        $this->assertFalse(StringHelper::contains('It is better to offer no excuse than a bad one.', 'super'));
    }
}