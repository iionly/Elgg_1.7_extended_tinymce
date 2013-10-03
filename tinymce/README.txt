Elgg Extended Tinymce plugin for Elgg 1.7
Latest Version: 4.0.7 r24
Released: 2013-10-03
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly 2012-2013, (C) Curverider 2008-2013

The TinyMCE editor is licensed under
GNU Lesser General Public License version 2.1
(c) 2003-2013 Moxiecode Systems AB.
Website: http://www.tinymce.com/



An extended tinymce plugin based on version 4.0.7 of the TinyMCE editor.



Instructions:

1. Disable the Elgg core tinymce plugin,

2. Replace the tinymce folder in your mod directory with this tinymce folder,

3. Replace start.php of the htmlawed plugin with the start.php file in the htmlawed subfolder in this plugin. This version of htmlawed's start.php is a backport of Elgg 1.8 that works better for me - for example it also allowed different fonts to be used in postings.

4. Enable the tinymce plugin again,

5. Execute the upgrade.php script, i.e. call http://<yoursite.domain>/upgrade.php in your browser to flush the site cache.
