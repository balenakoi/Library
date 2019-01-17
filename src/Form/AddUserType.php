<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddUserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('submit', SubmitType::class, ['label' => 'Ajouter', 'attr' => ['class' => 'btn-primary btn-block']]);
    }
}