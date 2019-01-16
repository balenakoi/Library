<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AddBookType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('auteur')
            ->add('date')
            ->add('resume', TextareaType::class)
            ->add('categorie', ChoiceType::class, array(
                'choices' => array(
                    'categorie' => array(
                        'Histoire' => 'Histoire',
                        'Amour' => 'Amour',
                        'Science' => 'Science',
                    ),
                ),
            ))
            ->add('image', FileType::class, array('label' => 'image'))
            ->add('submit', SubmitType::class, ['label' => 'Ajouter', 'attr' => ['class' => 'btn-primary btn-block']]);
    }
}