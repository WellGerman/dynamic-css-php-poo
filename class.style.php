<?php
class Style {
	var $margin;
	var $padding;
	var $width;
	var $height;
	var $background;
	var $color;
	var $border;
	var $font_family;
	var $font_size;
	var $text_align;
	var $box_shadow;
	var $text_shadow;
}

$get = new Style();

$get->margin  	  = '40px auto 0 auto';
$get->padding 	  = '25px';
$get->width   	  = '650px';
$get->height  	  = 'auto';
$get->background  = '#d5d5d5';
$get->color 	  = 'darkgreen';
$get->border 	  = '1px solid darkgreen';
$get->font_family = 'sans-serif';
$get->font_size   = '18px';
$get->text_align  = 'left';
$get->box_shadow  = '5px 9px -4px rgba(0, 0, 0, 0.90)';
$get->text_shadow = '1px 1px #fff';
?>