<?php

namespace Mpk\CmsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class HeaderAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('facebook', null, array('required' => false))
            ->add('tweeter', null, array('required' => false))
            ->add('google', null, array('required' => false))
            ->add('inUrl', null, array('required' => false))
            ->add('skype', null, array('required' => false))
            ->add('phone', null, array('required' => false))
            ->add('email', null, array('required' => false))
            ->add('file', 'file', array('required' => false))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('facebook')
        ;
    }

    // Fields to be shown on lists
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('facebook')
            ->add('tweeter', null, array('editable'=>true))
            ->add('inUrl', null, array('editable'=>true))
            ->add('skype', null, array('editable'=>true))
            ->add('phone', null, array('editable'=>true))
            ->add('google', null, array('editable'=>true))
            ->add('logo', 'string', array('template' => 'MpkCmsBundle:Cms:list_image.html.twig'))
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