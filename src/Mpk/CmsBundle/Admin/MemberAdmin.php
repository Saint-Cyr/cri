<?php

namespace Mpk\CmsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MemberAdmin extends Admin
{
    public $supportsPreviewMode = true;
    
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('firstName')
            ->add('lastName')
            ->add('dob', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker',))
            ->add('telephone')
            ->add('address')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            
            ->add('id')
            ->add('image', 'string', array('template' => 'MpkCmsBundle:Cms:image_member.html.twig'))
            ->add('firstName')
            ->add('lastName')
            ->add('dob')
            ->add('telephone')
            ->add('address')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('firstName')
            ->add('lastName')
            ->add('dob', 'sonata_type_date_picker', array())
            ->add('file', 'file', array('required' => false))
            ->add('telephone')
            ->add('address')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('image', 'string', array('template' => 'MpkCmsBundle:Cms:image_member.html.twig'))
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('dob')
            ->add('telephone')
            ->add('address')
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
