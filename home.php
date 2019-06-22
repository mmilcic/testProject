<?php

function processForm(){
	foreach($this->input->post() as $key=>$value) {
		$attr[$key] = $value;
	}
	
	echo json_encode($attr);
}

function cvPreview($type=null) {
	if ($type == 'first') {
		$this->load->view('cv_preview_first.html');
	} else if ($type == 'second') {
		$this->load->view('cv_preview_second.html');
	} else if ($type == 'third') {
		$this->load->view('cv_preview_third.html');
	}
}

function openPdf() {

}

?>