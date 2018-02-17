<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('markdown.extra', true);

c::set('license', 'K2-PERSONAL-2bf7b5e616011806696f4ce25747c155');
c::set('imagekit.license', 'IMGKT1-172c16556c16eb7fb845659610274e0f');
c::set('imageset.license', 'IMGST1-6606f75984750152b75e121416ccbfe6');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

if($_SERVER['SERVER_NAME'] == 'localhost') $isDev = true;
else $isDev = false;

if($isDev)dump($_SERVER['SERVER_NAME']);

c::set('debug',$isDev);

c::set('thumbs.driver', 'im');
c::set('cache', !$isDev);

c::set('imageset.presets', [
  'hero'    => [
    [ '320x180-1920x1080,5', 'media' => '(min-aspect-ratio: 3/2)' ]
  ],
  'tags'   => [
    [ '250-800,4' ]
  ]
]);


c::set('imageset.tags.image.sizes.default', 'tags');
c::set('imagekit.lazy', !$isDev);
c::set('imageset.placeholder', 'blurred');
c::set('imageset.cache',!$isDev);
