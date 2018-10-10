<?php 
	$this->load->view('template/home/header');
	$this->load->view('template/home/topmenu');
?>
<?php $this->load->view($main_content);?>
<?php $this->load->view('template/home/footer');?>