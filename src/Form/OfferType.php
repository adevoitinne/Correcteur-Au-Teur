<?php

namespace App\Form;

use App\Entity\Genre;
use App\Entity\Member;
use App\Entity\Offer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class OfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'Roman' => 'Roman',
                    'Nouvelle' => 'Nouvelle',
                    'Poème' => 'Poème',
                    'Théâtre' => 'Théâtre',
                    'Essai' =>'Essai'],
                'placeholder' => "Type d'œuvre"
            ])
            

              // ->add('deadline', DateType::class, [
            //     'widget' => 'single_text',
	        //     'format' => 'dd/mm/yyyy',
            //     'html5' => false,
	        //     'input' => 'datetime_immutable',
            //     'constraints' => [
            //         new Date([
            //             'message' => "Le format de l'échéance est erroné"
            //         ]),
            //     ],
            // ])
// TextType et type string dans Offer.php en attendant de régler le probème de la saisie d'une date alors que le formulaire me met un message d'erreur : doit être de type string
            ->add('deadline',  TextType::class)
            ->add('title',  TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => "Renseignez obligatoirement le titre de l'œuvre"
					]),
					new Length([
						'min' => 2,
						'max' => 255,
						'minMessage' => 'Le titre est trop court',
						'maxMessage' => 'Le titre est trop long',
					]),
                ],
			])
            ->add('description', TextareaType::class, [
                'constraints' => [
					new NotBlank([
						'message' => "Renseignez obligatoirement la description de l'œuvre"
					]),
                ],
            ])
            ->add('genres', EntityType::class, [
                'class' => Genre::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offer::class,
        ]);
    }
}
