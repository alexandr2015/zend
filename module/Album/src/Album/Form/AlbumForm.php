<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24.03.16
 * Time: 15:40
 */

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct($name);

//        $this->setAttribute('method', 'GET');

        $this->add([
            'name' => 'id',
            'type' => 'Hidden',
        ]);

        $this->add([
            'name' => 'title',
            'type' => 'Text',
            'options' => [
                'label' => 'Title',
            ],
        ]);

        $this->add([
            'name' => 'artist',
            'type' => 'Text',
            'options' => [
                'label' => 'Artist',
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Go',
                'id' => 'submitButton',
            ],
        ]);
    }
}