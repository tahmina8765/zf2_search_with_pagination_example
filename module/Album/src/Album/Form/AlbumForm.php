<?php
namespace Album\Form;

use Zend\Form\Form;
use \Zend\Form\Element;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('album');
        $this->setAttribute('class', 'form-horizontal');
        $this->setAttribute('method', 'post');

        
        $id = new Element\Hidden('id');
        $id->setAttribute('class', 'primarykey');
    
	
        $artist = new Element\Text('artist');
        $artist->setLabel('Artist')
                ->setAttribute('class', 'required')
                ->setAttribute('placeholder', 'Artist');
        

        $title = new Element\Text('title');
        $title->setLabel('Title')
                ->setAttribute('class', 'required')
                ->setAttribute('placeholder', 'Title');
        



        $submit = new Element\Submit('submit');
        $submit->setValue('Submit')
                ->setAttribute('class', 'btn btn-primary');

        $this->add($id);
        $this->add($artist);
	$this->add($title);
	
        $this->add($submit);

    }
}


    