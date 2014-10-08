Elgg Extended Tinymce plugin for Elgg 1.7
Latest Version: 4.1.6
Released: 2014-10-08
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly 2012-2014, (C) Curverider 2008-2014

The TinyMCE editor is licensed under
GNU Lesser General Public License version 2.1
(c) 2003-2014 Moxiecode Systems AB.
Website: http://www.tinymce.com/



An extended tinymce plugin based on version 4.1.6 of the TinyMCE editor for Elgg 1.7.



Instructions:

1. Disable the Elgg core tinymce plugin,

2. Replace the tinymce folder in your mod directory with this tinymce folder,

3. Replace start.php of the htmlawed plugin with the start.php file in the htmlawed subfolder in this plugin. This version of htmlawed's start.php is a backport of Elgg 1.8 that works better for me - for example it also allowed different fonts to be used in postings.

4. Enable the tinymce plugin again,

5. Execute the upgrade.php script, i.e. call http://<yoursite.domain>/upgrade.php in your browser to flush the site cache.



Creating your own custom skin:

1. Configure your custom skin at http://skin.tinymce.com/ and download it,

2. Copy your skin folder into the tinymce/tinymce/js/tinymce/skins directory,

3. Change the skin name of the skin option in tinymce/views/default/input/longtext.php to the name of your skin.
