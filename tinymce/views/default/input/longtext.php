<?php
/**
 * Elgg long text input with the tinymce text editor intacts
 * Displays a long text input field
 *
 * @package ElggTinyMCE
 *
 * @uses $vars['value'] The current value, if any
 * @uses $vars['js'] Any Javascript to enter into the input tag
 * @uses $vars['internalname'] The name of the input field
 *
 */

global $tinymce_js_loaded, $CONFIG;;

$input = rand(0,9999);

if (!isset($tinymce_js_loaded)) $tinymce_js_loaded = false;

if (!$tinymce_js_loaded) {

?>
<!-- include tinymce -->
<script language="javascript" type="text/javascript" src="<?php echo $vars['url']; ?>mod/tinymce/tinymce/js/tinymce/tinymce.min.js"></script>
<!-- intialise tinymce, you can find other configurations here http://tinymce.moxiecode.com/tryit/full.php -->
<script language="javascript" type="text/javascript">
    tinyMCE.init({
        selector: ".mceEditor",
        theme: "modern",
        skin : "lightgray",
        relative_urls : false,
        remove_script_host : false,
        document_base_url : "<?php echo $CONFIG->wwwroot; ?>",
        plugins: "advlist autolink charmap code emoticons fullscreen hr image insertdatetime link lists paste preview print table textcolor wordcount",
        menubar: false,
        toolbar_items_size: "small",
        toolbar1: "newdocument preview fullscreen print | styleselect | fontselect | fontsizeselect",
        toolbar2: "undo redo | bullist numlist | outdent indent | bold italic underline | alignleft aligncenter alignright alignjustify",
        toolbar3: "inserttime | charmap | hr | table | forecolor backcolor | link unlink | image | emoticons | blockquote<?php if (isadminloggedin()){?>,|,code<?php }?>",
        width : "99%",
        browser_spellcheck : true,
        image_advtab: true,
        paste_data_images: false,
        insertdate_formats: ["%I:%M:%S %p", "%H:%M:%S", "%Y-%m-%d", "%d.%m.%Y"],
        content_css: "<?php echo $vars['url']; ?>mod/tinymce/views/default/tinymce/custom_content.css"
    });
</script>
<?php
    $tinymce_js_loaded = true;
}

?>

<!-- show the textarea -->
<textarea class="input-textarea mceEditor" name="<?php echo $vars['internalname']; ?>" <?php echo $vars['js']; ?>><?php echo htmlentities($vars['value'], null, 'UTF-8'); ?></textarea>

<script type="text/javascript">
    $(document).ready(function() {
        $('textarea').parents('form').submit(function() {
            tinyMCE.triggerSave();
        });
    });
</script>
