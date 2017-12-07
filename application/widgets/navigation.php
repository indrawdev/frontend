<?php

class Navigation extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array('beranda', 'lapangan', 'kontak');
        }
        $this->view('widgets/navigation', $data);
    }
    
}