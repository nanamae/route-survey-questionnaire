<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 */
class ImagesController extends AppController
{
 
     public function content($id)
    {
        $image = $this->Images->get($id);
        $this->autoRender = false;
        $this->response->type('image/jpeg');
        $this->response->body(stream_get_contents($image->data));
    }
}
