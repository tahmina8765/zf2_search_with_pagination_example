<?php
namespace Album\Form;

use Zend\Form\Form;
use \Zend\Form\Element;

class AlbumSearchForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('album');
        $this->setAttribute('class', 'form-horizontal');
        $this->setAttribute('method', 'post');


	
        $artist = new Element\Text('artist');
        $artist->setLabel('Artist')
                ->setAttribute('class', 'required')
                ->setAttribute('placeholder', 'Artist');
        

        $title = new Element\Text('title');
        $title->setLabel('Title')
                ->setAttribute('class', 'required')
                ->setAttribute('placeholder', 'Title');
        



        $submit = new Element\Submit('submit');
        $submit->setValue('Search')
                ->setAttribute('class', 'btn btn-primary');


        $this->add($artist);
	$this->add($title);
	
        $this->add($submit);

    }
}


    