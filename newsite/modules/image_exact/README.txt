// $Id: README.txt,v 1.1 2006/02/28 22:42:47 joshk Exp $

image_exact.module

ABOUT
I wrote this because it seemed that many sites had designs which called for precisely-sized image thumbnails and avatars, and I was tired of hacking at core modules to give people this functionality.

This module provides very basic utility of precisely-sizing thumbnails and avatars by cropping them equally from all sides until the correct aspect ratio is reached, and then scaling the image to size. It will do nothing if the image is too small (e.g. it won't "blow up" tiny images).

INSTALLATION:
This module requires that you have one of the image toolkits installed to work.

1) Put it in your modules dir
2) Turn in on in admin/modules
3) Hit up admin/settings/image_exact and configure as needed

Image thumbnail resizing is enabled by default. If you want to enable avatar-resizing, you need to set the avatar size the user settings page to DOUBLE the size you want to end up with. This is because the user module does its own resizing first, and we need to have enough room to still crop as needed.

I realize this is slightly inefficient, but the performance hit should be pretty small, and the functionality should be widely useful.

LICENSE
GPL, baby. Look it up.