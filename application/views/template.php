<?php
$this->load->helper('url');
$this->load->view('includes/header', array('title' => $title));

$this->load->view($content);

$this->load->view('includes/footer');

?>