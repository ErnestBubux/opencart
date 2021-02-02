<?php
class ControllerExtensionModuleDemoevent extends Controller {
    public function change(&$route, &$data, &$output=null) {
        $data['heading_title'] = $data['heading_title'] . " Original";
    }
}