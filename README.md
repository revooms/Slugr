## Slugr

Easy to use "slugification" class.

### Usage:
```php
<?php

require 'src/Slugr.php';
use Slugr\Slugr;
print Slugr::slugify([TEXT-TO-SLUGIFY], [SEPERATOR], [LOWERCASE], [LIMIT], [EXPRESSION]);
```

### Examples:
```php
print Slugr::slugify('Hello World Out There');

```
will output `Hello-World-Out-There`

```php 
print Slugr::slugify('Hello World Out There', '.', false);
```
will output `Hello.World.Out.There`

```php
 print Slugr::slugify('Hello World Out There', '_', true);
 ```
will output `hello_world_out_there`

```php 
print Slugr::slugify('Hello World Out There', '--**--', true);
```
will output `hello--**--world--**--out--**--there`

```php 
print Slugr::slugify('Hello World Out There', null, null, 15);
``` 
will output` Hello-World-Out`

```php 
print Slugr::slugify('Hällö Welt da draußen! 2,3,4 - - ');
```
will output `H-ll-Welt-da-drau-en-2-3-4`
