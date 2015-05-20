# Laravel Docrtine Cache Proxy

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
```
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
