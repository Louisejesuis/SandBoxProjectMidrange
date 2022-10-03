<?php

namespace App\Controller\Admin;

use App\Entity\Brand;
use App\Entity\Car;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use  EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use  EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use  EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class CarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Car::class;
    }

    /**
     * Undocumented function
     *
     * @param string $pageName
     * @return iterable
     */
    public function configureFields(string $pageName): iterable
    {
        return [
            yield TextField::new('model'),
            yield DateField::new('date_of_creation'),
            yield AssociationField::new('brand')
        ];
    }
}
