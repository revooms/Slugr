<?php

require 'src/Slugr.php';

use Slugr\Slugr;

print "\n";

print Slugr::slugify('Hello World Out There');
print "\n";

print Slugr::slugify('Hello World Out There', '.', false);
print "\n";

print Slugr::slugify('Hello World Out There', '_', true);
print "\n";

print Slugr::slugify('Hello World Out There', '--**--', true);
print "\n";

print Slugr::slugify('Hello World Out There', null,null, 15);
print "\n";

print Slugr::slugify('Hällö Welt da draußen! 2,3,4 - - ');
print "\n";
