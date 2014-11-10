<?php

class Common extends MX_Controller {
	
    function index() {
		$this->load->view("home");
    }

    function homeHeader($css_array = '', $vars = array()) {
        if (!empty($css_array) && is_array($css_array))
            $this->data['css_array'] = $css_array;
        foreach ($vars as $key => $val) {
            $this->data[$key] = $val;
        }
        $this->load->view("header");
    }
	
    function footer($js_array = '', $vars=array()) {
        if (!empty($js_array) && is_array($js_array))
            $this->data['js_array'] = $js_array;
			
        $html = $this->load->view("footer");
        echo $html;
    }
	
    function home() {
		$this->load->view("home");
    }
}
