<?php
if($this->session->userdata('admin')==""){
    $this->session->set_userdata('admin',FALSE);
}
date_default_timezone_set('Asia/Jakarta'); 

$this->db->where('TYPEDATE','31');
$a = $this->db->get('web_init');
$a = $a->row_array();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo $a['meta_charset'];?>">
    <meta http-equiv="Content-Type" content="<?php echo $a['meta_content_type'];?>">
        
    <meta name="og:description" content='<?php echo $a['meta_og_desc'];?>'>
    <meta name="og:title" content="<?php echo $a['meta_og_title'];?>">
    <meta name="og:image" content="<?php echo $a['meta_og_image'];?>">
        
    <meta name="viewport" content="<?php echo $a['meta_viewport'];?>">
    <meta name="product" content="<?php echo $a['meta_product'];?>">
    <meta name="description" content="<?php echo $a['meta_desc'];?>">
    <meta name="author" content="<?php echo $a['meta_author'];?>">
    <meta name="keywords" content="<?php echo $a['meta_keyword'];?>">
    <meta name="title" content="<?php echo $a['meta_title'];?>">
    <meta name="keywords tag" content="<?php echo $a['meta_keyword_tag'];?>">

    <link href="<?php echo base_url();?>assets/css/metro-bootstrap.css" rel="stylesheet">
    <link href="<?php echo $a['favicon'];?>" rel="shortcut icon">
    <link href="<?php echo $a['favicon'];?>" rel="favicon">
    <!--link href="<?php echo base_url();?>assets/css/metro-bootstrap-responsive.css" rel="stylesheet"-->
    <link href="<?php echo base_url();?>assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/mine.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/syntax/styles/shCoreDefault.css"/>
    <title><?php echo $a['judul'];?></title>
    <style type="text/css">
    label{
        font-size: 12pt;
    }
    </style>
</head>
    <BODY style="background-image:url('<?php echo $a['backimage'];?>'); " class="metro" style="height:100%;">
        <div style="height:10px;"></div>
        <div class="fbawal bg-blue fg-white" style="position:fixed;">
            <a class="coba" href="#"><div class="fg-white" style="padding:10px;">&nbsp;<i class="icon-phone fg-white"></i></div></a>
            <!--a class="" style="" href="#"><div class="fg-white" style="padding:10px;"><i class="icon-phone fg-white"></i><?php echo $a['phone'];?></div></a-->
            <a class="" target="_blank" style="" href="<?php echo $a['fb'];?>"><div class="fg-white" style="padding:10px;">&nbsp;<i class="icon-facebook fg-white"></i></div></a>
            <a class="" target="_blank" style="" href="<?php echo $a['twitter'];?>"><div class="fg-white" style="padding:10px;">&nbsp;<i class="icon-twitter fg-white"></i></div></a>
        </div>
        <!--div class="fbleft bg-blue fg-white">
            <a class="" target="_blank" style="" href="<?php echo $a['fb'];?>"><div class="fg-white" style="padding:10px;"><i class="icon-facebook fg-white"></i> <?php echo $a['fb'];?></div></a>
            <a class="" target="_blank" style="" href="<?php echo $a['twitter'];?>"><div class="fg-white" style="padding:10px;"><i class="icon-twitter fg-white"></i> <?php echo $a['twitter'];?></div></a>
        </div-->
        <div class="header-page">
            <?php 
            if($this->session->userdata('admin')==FALSE){
            if($a['header_front']!=""){
            ?>
            <img style="width:100%" src="<?php echo $a['header_front'];?>">
            <?php } }
            if($this->session->userdata('admin')==TRUE){
            if($a['header_back']!=""){
            ?>
            <img style="width:100%" src="<?php echo $a['header_back'];?>">
            <?php } }?>
        </div>
        <div class="big-center-menu"><?php include "menu.php";?></div>
        <div id="bodybody" class="container pad10" style="">
        <div class="big-center-body">