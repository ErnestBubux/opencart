<?php
class ControllerExtensionModuleDemoevent extends Controller {
    private $error = array();
    
    public function install() {
        $this->load->model('setting/event');
        $this->model_setting_event->addEvent('change_product_title', 'catalog/view/product/product/before', 'extension/module/demoevent/change');
    }

    public function uninstall() {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('change_product_title');
    }
}