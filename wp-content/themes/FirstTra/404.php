<?php
header('HTTP/1.1 200 OK');
$edit = array ('-' , '/' , '.html');// tambahin sendiri karakter yg mau di REMOVE dr Keyword atau url
$title= str_replace($edit, ' ', $_SERVER['REQUEST_URI']);
get_header();
?>
<div style="clear: both"></div>
<div id="nambahneh">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<div class="post">
<?php echo spp($title, 'wiki.html', ' filetype:pdf');?>


<?php echo spp($title, 'isi-pdf.html', ' filetype:pdf');?>
<br />	
<?php echo spp($title, 'default.html');?>  



</div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>