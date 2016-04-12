<?php

namespace Mpk\CmsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ArticleAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'Article Title',
                                         'required' => false))
            ->add('author', null, array('required' => false))
            ->add('content', 'textarea', array('label' => 'Content of the Article'))
            ->add('published', 'checkbox', array('required' => false))
            ->add('file', 'file', array('required' => false))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
            ->add('published')
        ;
    }

    // Fields to be shown on lists
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('content')
            ->add('image', 'string', array('template' => 'MpkCmsBundle:Cms:list_image.html.twig'))
            ->add('published', null, array('editable'=>true))
        ;
    }
    
    public function prePersist($image) {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image) {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image) {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }
}