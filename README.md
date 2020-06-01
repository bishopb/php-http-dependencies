# Dependencies from URL

Based on an article about [Deno dependencies][1], this repo demonstrates that PHP may use URL, versioned or not, as dependency endpoints.

```php
$v4 = require 'https://raw.githubusercontent.com/bishopb/php-http-dependencies/1.0.0/src/Uuid/v4.php';
echo $v4(); // Outputs: 8b787dba-d019-43d3-9fd7-2419591e5307
```

One could build, from this, an entire dependency management system. For it to be robust, it'd need:

* A wrapper that checked signatures and cached contents
* A means to scan a code base and produce a dependency list
  * A means to generate a dependency graph, in such a way as to not crawl the Internet
* A collection of registries to facilitate package discovery

[1]: https://kitsonkelly.com/posts/deno-is-a-browser-for-code/
