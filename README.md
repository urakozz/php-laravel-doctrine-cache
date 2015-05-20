# Laravel Docrtine Cache Proxy

[![Build Status](https://travis-ci.org/urakozz/php-laravel-docrtine-cache.svg?branch=master)](https://travis-ci.org/urakozz/php-laravel-docrtine-cache)
[![Code Climate](https://codeclimate.com/github/urakozz/php-laravel-docrtine-cache/badges/gpa.svg)](https://codeclimate.com/github/urakozz/php-laravel-docrtine-cache)
[![Test Coverage](https://codeclimate.com/github/urakozz/php-laravel-docrtine-cache/badges/coverage.svg)](https://codeclimate.com/github/urakozz/php-laravel-docrtine-cache/coverage)
[![Latest Stable Version](https://poser.pugx.org/kozz/laravel-doctrine-cache/v/stable.svg)](https://packagist.org/packages/kozz/laravel-doctrine-cache)
[![Latest Unstable Version](https://poser.pugx.org/kozz/laravel-doctrine-cache/v/unstable.svg)](https://packagist.org/packages/kozz/laravel-doctrine-cache)
[![License](http://img.shields.io/packagist/l/kozz/laravel-doctrine-cache.svg)](https://packagist.org/packages/kozz/laravel-doctrine-cache)

Laravel Proxy to Doctrine Cache

### When to use

```LaravelDoctrineCache``` implements ```Doctrine\Common\Cache\Cache``` interface 
so it's fully compatible with all libraries that are requiring Doctrine Cache such as:

- Doctrine Annotation Reader
- Symfony Validator
- JMS Serializer

### How does it work

```LaravelDoctrineCache``` is using cache from app container : ```Container::getInstance()->offsetGet('cache')``` and points ```Doctrine\Common\Cache\Cache``` methods to suitable Laravel Cache methods

### Examples
```php
#JMS\Serializer
$serializer = \JMS\Serializer\SerializerBuilder::create()
  ->setAnnotationReader(new CachedReader(new AnnotationReader(), new LaravelDoctrineCache()))
  ->build();
```

### Reference

Methods

```fetch($id)``` - Fetches an entry from the cache

```contains($id)``` - Test if an entry exists in the cache

```save($id, $data, $lifeTime = false)``` - Puts data into the cache

```delete($id)``` - Deletes a cache entry
