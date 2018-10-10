<?php 
	$this->load->view('template/user/header');
	$this->load->view('template/user/topmenu');
?>
<?php $this->load->view($main_content);?>
<?php $this->load->view('template/user/footer');?>