<?php
class ControllerExtensionModuleMenuAdd extends Controller {
    private $error = array();
    
    public function install() {
        $this->load->model('setting/event');
        $this->model_setting_event->addEvent('add_new_item_menu', 'admin/view/common/column_left/before', 'extension/module/menu_add/add');
    }

    public function uninstall() {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('add_new_item_menu');
    }

    public function add(&$route, &$data, &$output = null) {
        $my_language = $this->load->language('extension/module/menu_add');

        $data['menus'][] = array(
            'name'     => $my_language['heading_title'],
            'href'     => $this->url->link('extension/payment/cod', 'user_token=' . $this->session->data['user_token'], true),
            'icon'	   => 'fa-credit-card',
            'children' => array()
        );
    }
}