<?php
/**
 * HEADER
 *
 * This file controls the HTML <head> and top graphical markup (including
 * Navigation) for each page in your theme. You can control what shows up where
 * using WordPress and PageLines PHP conditionals.
 *
 * @package     PageLines Framework
 * @since       1.0
 *
 * @link        http://www.pagelines.com/
 * @link        http://www.pagelines.com/tour
 *
 * @author      PageLines   http://www.pagelines.com/
 * @copyright   Copyright (c) 2008-2012, PageLines  hello@pagelines.com
 *
 * @internal    last revised January 23, 2012
 * @version     ...
 *
 * @todo Define version
 */

pagelines_register_hook('pagelines_before_html'); // Hook
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
		pagelines_register_hook('pagelines_head'); // Hook

		wp_head(); // Hook (WordPress)

		pagelines_register_hook('pagelines_head_last'); // Hook ?>

<!-- Begin Custom Links required by BibleResources.org -->
<link rel='stylesheet' id='pagelines-framework-css'  href='http://bibleresources.org/amzn/bibleresources/pagelines-framework.css' type='text/css' media='all' />
<link rel='stylesheet' id='ubermenu-basic-css'  href='http://bibleresources.org/amzn/bibleresources/ubermenu-basic.css' type='text/css' media='all' />
<link rel='stylesheet' id='ubermenu-custom-css'  href='http://bibleresources.org/amzn/bibleresources/ubermenu-custom.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='http://bibleresources.org/amzn/bibleresources/pagelines-superfish.css' type='text/css' media='screen' />
<link rel='stylesheet' id='pagelines-less-css'  href='http://bibleresources.org/amzn/bibleresources/pagelines-min.css' type='text/css' media='all' />
<link rel='stylesheet' id='last-style-css' href='http://bibleresources.org/amzn/bibleresources/last-style.css' type='text/css' media='all' />
<!-- End Custom Links required by BibleResources.org -->
</head>

<?php

echo pl_source_comment('Start >> HTML Body', 1); ?>
<body <?php body_class( pagelines_body_classes() ); ?>>
<?php
pagelines_register_hook('pagelines_before_site'); // Hook

if(has_action('override_pagelines_body_output')):
	do_action('override_pagelines_body_output');

else:  ?>
<div id="site" class="<?php echo pagelines_layout_mode();?>">
<?php pagelines_register_hook('pagelines_before_page'); // Hook ?>
	<div id="page" class="thepage">
		<?php pagelines_register_hook('pagelines_page'); // Hook ?>
		<div class="page-canvas">
			<?php pagelines_register_hook('pagelines_before_header');?>
			<header id="header" class="container-group">
				<div class="outline">
					<?php pagelines_template_area('pagelines_header', 'header'); // Hook ?>
				</div>
			</header>
			<?php pagelines_register_hook('pagelines_before_main'); // Hook ?>
			<div id="page-main" class="container-group">
				<div id="dynamic-content" class="outline">
<?php
				pagelines_special_content_wrap_top();

endif; ?>

<!-- Begin Custom Site Search Code -->
<p style="font-size: 0.2em; line-height: 0.2em;">&nbsp;</p>
<div align="center"><strong><font color="#C000000" style="font-size: 1.1em;">Search This Website:</font></strong> &nbsp; <font style="vertical-align: -30%;"><?php pagelines_search_form(true); ?></font> &nbsp;&nbsp;Press <em>Enter</em>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" style="color: #B40404; font-weight: bold" value="Search Help" onclick="window.location.href='/search-options-help/'"></div>
<p style="font-size: 0.1em; line-height: 0.1em;">&nbsp;</p>
<!-- End Custom Site Search Code -->

<div id="hideaway" style="display:none;"> <!-- Begin Hide/Reveal Search Code DIV -->
<!-- Begin Topic and Verses Search Code -->
<!-- Begin Main div code: Applies to Topic and Verses Search and places a border around the Search forms -->
<div align="center" style="font-size: 1em !important; color: #8b4513 !important; width: 96% !important; margin: auto !important; border: 3px solid #8b4513 !important; padding: auto !important;">

<!-- Begin Custom Bible Search Form by Steve Nordholm 10-26-2015 -->

<!-- Begin Bible Topic Search Form -->
<p style="font-size: 0.2em; line-height: 0.2em;">&nbsp;</p>

<strong><font color="#C000000">Search Bible Topics:</font></strong> Select a Bible & Enter a Topic or an Exact Phrase in the Search Box below like <em>healing</em> or <em>grace of God</em> etc.</font>&nbsp;

<p style="font-size: 0.1em; line-height: 0.1em;">&nbsp;</p>
 
<form action="/bible-search-results" method="get" enctype="application/x-www-form-urlencoded" id="bible-topic-search-results" >  

<select id="bible_version" name="bible_version" style="padding: .4em .4em .4em .4em !important; font-size: 1em !important; width: auto !important;";>&nbsp;
    <option value="5" >American Standard Version</option>
    <option value="14" >Amplified</option>
    <option value="6" >Basic Bible</option>
    <option value="3" >Darby</option>
    <option value="1" selected >King James Version</option>
    <option value="19" >Latin Vulgate</option>
    <option value="12" >Moffatt NT</option>
    <option value="16" >NASB 1977</option>
    <option value="15" >NASB 1995</option>
    <option value="17" >NET Bible</option>
    <option value="2" >Revised Standard Version</option>
    <option value="18" >Spanish LBLA</option>
    <option value="10" >Transliterated Greek NT</option>
    <option value="9" >Transliterated Hebrew OT</option>
    <option value="8" >Weymouth</option>
    <option value="13" >Williams NT</option>
    <option value="7" >World English Bible</option>
    <option value="11" >Young's Literal Translation</option>
  </select>

<font style="font-family: Arial, Helvetica, sans-serif !important; font-style: oblique !important; font-size: 0.9em !important; color: #8b4513; margin: 0 0 .3em 0 !important; ">&nbsp;Enter a Bible Word or an Exact Phrase:</font>
<input name="bible_topic" id="bible_topic" type="text" size="30"  maxlength="100" style="padding: .4em .4em .4em .4em !important; font-size: 1em !important;" required >&nbsp;
<input name="passage_search" id="passage_search" type="hidden" value="false">
<input type="submit" value="Search Bible Topic" />
</form>
<!-- End Bible Topic Search Form -->

<hr style="width: 100%; height: 1px; border: 0; margin: 10px 0 6px 0; padding: 0; background: #8b4513; color: #8b4513;" />

<!-- Start Bible Verses Search Form -->
<font style="font-size: 1em !important; color: #8b4513;"><strong><font color="#C000000">Search Bible Verses:</font></strong> Select a Bible & Bible Book & Enter the Chapter & <em>(Optionally)</em> the Verses you want in the boxes below.</font>

<p style="font-size: 0.1em; line-height: 0.1em;">&nbsp;</p>

<form action="/bible-search-results" method="get" enctype="application/x-www-form-urlencoded" id="bible-passage-search-results" >  

<select id="bible_version" name="bible_version" style="padding: .4em .4em .4em .4em !important; font-size: 1em !important; width: auto !important;">&nbsp;
    <option value="5" >American Standard Version</option>
    <option value="14" >Amplified</option>
    <option value="6" >Basic Bible</option>
    <option value="3" >Darby</option>
    <option value="1" selected >King James Version</option>
    <option value="19" >Latin Vulgate</option>
    <option value="12" >Moffatt NT</option>
    <option value="16" >NASB 1977</option>
    <option value="15" >NASB 1995</option>
    <option value="17" >NET Bible</option>
    <option value="2" >Revised Standard Version</option>
    <option value="18" >Spanish LBLA</option>
    <option value="10" >Transliterated Greek NT</option>
    <option value="9" >Transliterated Hebrew OT</option>
    <option value="8" >Weymouth</option>
    <option value="13" >Williams NT</option>
    <option value="7" >World English Bible</option>
    <option value="11" >Young's Literal Translation</option>
  </select>

  <select id="book_id" name="book_id" class="bible-book" style="padding: .4em .4em .4em .4em !important; font-size: 1em !important; width: auto !important;">&nbsp;
    <optgroup label="Old Testament">
    <option value="1" selected >Genesis</option>
    <option value="2" >Exodus</option>
    <option value="3" >Leviticus</option>
    <option value="4" >Numbers</option>
    <option value="5" >Deuteronomy</option>
    <option value="6" >Joshua</option>
    <option value="7" >Judges</option>
    <option value="8" >Ruth</option>
    <option value="9" >1 Samuel</option>
    <option value="10" >2 Samuel</option>
    <option value="11" >1 Kings</option>
    <option value="12" >2 Kings</option>
    <option value="13" >1 Chronicles</option>
    <option value="14" >2 Chronicles</option>
    <option value="15" >Ezra</option>
    <option value="16" >Nehemiah</option>
    <option value="17" >Esther</option>
    <option value="18" >Job</option>
    <option value="19" >Psalms</option>
    <option value="20" >Proverbs</option>
    <option value="21" >Ecclesiastes</option>
    <option value="22" >Song of Solomon</option>
    <option value="23" >Isaiah</option>
    <option value="24" >Jeremiah</option>
    <option value="25" >Lamentations</option>
    <option value="26" >Ezekiel</option>
    <option value="27" >Daniel</option>
    <option value="28" >Hosea</option>
    <option value="29" >Joel</option>
    <option value="30" >Amos</option>
    <option value="31" >Obadiah</option>
    <option value="32" >Jonah</option>
    <option value="33" >Micah</option>
    <option value="34" >Nahum</option>
    <option value="35" >Habakkuk</option>
    <option value="36" >Zephaniah</option>
    <option value="37" >Haggai</option>
    <option value="38" >Zechariah</option>
    <option value="39" >Malachi</option>
    </optgroup>
    <optgroup label="New Testament">
    <option value="40" >Matthew</option>
    <option value="41" >Mark</option>
    <option value="42" >Luke</option>
    <option value="43" >John</option>
    <option value="44" >Acts</option>
    <option value="45" >Romans</option>
    <option value="46" >1 Corinthians</option>
    <option value="47" >2 Corinthians</option>
    <option value="48" >Galatians</option>
    <option value="49" >Ephesians</option>
    <option value="50" >Philippians</option>
    <option value="51" >Colossians</option>
    <option value="52" >1 Thessalonians</option>
    <option value="53" >2 Thessalonians</option>
    <option value="54" >1 Timothy</option>
    <option value="55" >2 Timothy</option>
    <option value="56" >Titus</option>
    <option value="57" >Philemon</option>
    <option value="58" >Hebrews</option>
    <option value="59" >James</option>
    <option value="60" >1 Peter</option>
    <option value="61" >2 Peter</option>
    <option value="62" >1 John</option>
    <option value="63" >2 John</option>
    <option value="64" >3 John</option>
    <option value="65" >Jude</option>
    <option value="66" >Revelation</option>
    </optgroup>
  </select>    

<font style="font-family: Arial, Helvetica, sans-serif !important; font-style: oblique !important; font-size: 0.9em !important; color: #8b4513; margin: 0 0 .3em 0 !important; ">&nbsp;Chapter:</font>
<input name="chapter_id" id="chpater_id" size="3" maxlength="3" value="1" type="number" min="1" max="150" style="width: 3.4em !important; padding: .4em .4em .4em .4em !important; font-size: 1em !important;" required>&nbsp;

<font style="font-family: Arial, Helvetica, sans-serif !important; font-style: oblique !important; font-size: 0.9em !important; color: #8b4513; margin: 0 0 .3em 0 !important; ">Verses:</font>
<input name="begin_verse_id" id="begin_verse_id" value=" " size="3" maxlength="3" type="number" min="1" max="180" style="width: 3.4em !important; padding: .4em .4em .4em .4em !important; font-size: 1em !important;">&nbsp;

<font style="font-family: Arial, Helvetica, sans-serif !important; font-style: oblique !important; font-size: 0.9em !important; color: #8b4513; margin: 0 0 .3em 0 !important; ">Thru:</font>
<input name="end_verse_id" id="end_verse_id" value=" " size="3" maxlength="3" type="number" min="1" max="180" style="width: 3.4em !important; padding: .4em .4em .4em .4em !important; font-size: 1em !important;">&nbsp;
<input name="passage_search" id="passage_search" type="hidden" value="true">
<input type="submit" value="Search Bible Verses"/>
</form>

<p style="font-size: 0.2em; line-height: 0.2em;">&nbsp;</p>

</div> <!-- End Main Search Code -->
<!-- End Bible Verses Search Form -->
<!-- End Custom Bible Search Form -->
<!-- End Topic and Verses Search Code -->
</div> <!-- End Hide/Reveal Search Code DIV -->

<p style="font-size: 0.2em; line-height: 0.2em;">&nbsp;</p>

<!-- Begin Buttons to Hide/Reveal Search Code -->
<div align="center"> 

<script type="text/javascript">
function toggleContent() {
  // Get the DOM reference
  var contentId = document.getElementById("hideaway");
  // Toggle 
  contentId.style.display == "none" ? contentId.style.display = "block" : 
contentId.style.display = "none"; 
}
</script>
<font style="font-size: 1.1em; color: #B40404; font-weight: bold;">Search & Explore 18 Bibles Online: &nbsp;</font><font style="vertical-align: 10%;"><input type="button" style="color: #B40404; font-weight: bold;" value="Open | Close" onclick="toggleContent()"></font>
<!-- Begin Alternate code for Close & Open Buttons - This code not used -->
<!--
<input type="button" style="color: #B40404; font-weight: bold;" value="Search & Explore 18 Bibles Online |Open|Close|" onclick="toggleContent()">
-->
<!-- 
<input type="button" style="color: #B40404; font-weight: bold;" value="Open Online Bibles Search Form" onClick="document.getElementById('hideaway').style.display='block';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="button" style="color: #B40404; font-weight: bold;" value="Close Online Bibles Search Form" onClick="document.getElementById('hideaway').style.display='none';">
-->
<!-- End Alternate code for Close & Open Buttons - This code not used -->
</div>
<!-- End Buttons to Hide/Reveal Search Code -->

<p style="font-size: 0.3em; line-height: 0.3em;">&nbsp;</p>

<hr style="width: 96%; height: 2px; border: 0; margin: auto; padding: 0; background: #8b4513; color: #8b4513;" />

<?php
if(function_exists('social_warfare')):
	echo "<!-- Begin Social Warfare buttons --><div style='padding: 0 30px 0 30px;'>";
   	social_warfare();
	echo "</div><!-- End Social Warfare buttons -->";
endif;
?>
