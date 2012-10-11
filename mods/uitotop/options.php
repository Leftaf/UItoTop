<?php
// UItoTop by Leftaf V1.0
// $Id$

$cs_lang = cs_translate('uitotop');

$cs_uitotop = cs_sql_option(__FILE__,'uitotop');

$img_max['width'] = $cs_uitotop['max_width'];
$img_max['height'] = $cs_uitotop['max_height'];
$img_max['size'] = $cs_uitotop['max_size'];
$img_filetypes = array('image/pjpeg' => 'jpg','image/jpeg' => 'jpg','image/gif' => 'gif', 'image/png' => 'png');
$uitotopimg = $cs_uitotop['img'];

$data['if']['error'] = 0;

$data['lang']['getmsg'] = cs_getmsg();

if(!empty($error) OR empty($_POST['submit'])) {

  if(!empty($message)) {
    $data['if']['error'] = 1;
    $data['uitotop']['error'] = $message;
  }

  $data['action']['form'] = cs_url('uitotop','options');

  if(empty($uitotopimg)) {
    $data['uitotop']['img'] = $cs_lang['nopic'];
  }
  else {
    $place = 'uploads/uitotop/' . $uitotopimg;
    $size = getimagesize($cs_main['def_path'] . '/' . $place);
    $data['uitotop']['img'] = cs_html_img($place,$size[1],$size[0]);
  }

  $matches[1] = $cs_lang['pic_infos'];
  $return_types = '';
  foreach($img_filetypes AS $add => $value) {
    $return_types .= empty($return_types) ? $add : ', ' . $add;
  }
  $matches[2] = $cs_lang['max_width'] . $img_max['width'] . ' px' . cs_html_br(1);
  $matches[2] .= $cs_lang['max_height'] . $img_max['height'] . ' px' . cs_html_br(1);
  $matches[2] .= $cs_lang['max_size'] . cs_filesize($img_max['size']) . cs_html_br(1);
  $matches[2] .= $cs_lang['filetypes'] . ': ' . $return_types;
  $data['uitotop']['clip'] = cs_abcode_clip($matches);
}

$UItoTop_form = 1;

if(isset($_POST['submit'])) {

  $UItoTop_form = 0;

  $save = array();
  $save['max_width'] = $_POST['uitotop_width'];
  $save['max_height'] = $_POST['uitotop_height'];
  $save['max_size'] = $_POST['file_size'] * 1024;
  $save['file_types'] = $_POST['file_types'];

  cs_optionsave('uitotop', $save);

  cs_redirect($cs_lang['success'], 'options','roots');

}

if(!empty($UItoTop_form)) {
  $data['action']['form'] = cs_url('uitotop','options');

  $size = $cs_UItoTop['file_size'] / 1024;

  $data['options']['max_width'] = $cs_board['uitotop_width'];
  $data['options']['max_height'] = $cs_board['uitotop_height'];
  $data['options']['max_size'] = $size;
  $data['options']['filetypes'] = $cs_board['file_types'];
}

echo cs_subtemplate(__FILE__,$data,'uitotop','options');