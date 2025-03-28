<?php

namespace App\Form;

use App\Entity\Member;
use App\Entity\Interest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EditMyProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
					new NotBlank([
						'message' => 'Saisissez obligatoirement votre email'
					]),
					new Email([
						'message' => "Le format de l'email est erroné"
					])
				],
            ])
            ->add('firstname', TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Renseignez obligatoirement votre prénom'
					]),
					new Length([
						'min' => 2,
						'max' => 125,
						'minMessage' => 'Le prénom est trop court',
						'maxMessage' => 'Le prénom est trop long',
					]),
                ],
			])
            ->add('lastname',  TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Renseignez obligatoirement votre nom'
					]),
					new Length([
						'min' => 2,
						'max' => 125,
						'minMessage' => 'Le nom est trop court',
						'maxMessage' => 'Le nom est trop long',
					]),
                ],
			])
            // ->add('birth_at', DateType::class, [
            //     'widget' => 'single_text',
	        //     'format' => 'dd/mm/yyyy',
            //     'html5' => false,
	        //     'input' => 'datetime_immutable',
            //     'constraints' => [
            //         new Date([
            //             'message' => "Le format de la date de naissance est erroné"
            //         ]),
            //     ],
            // ])
// TextType et type string dans Member.php en attendant de régler le probème de la saisie d'une date alors que le formulaire me met un message d'erreur : doit être de type string
            ->add('birth_at',  TextType::class)


            ->add('contact_network',  TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Renseignez obligatoirement votre/vos identifiant(s) et leur réseau social associé'
					]),
					new Length([
						'min' => 2,
						'max' => 255,
						'minMessage' => 'Les identifiants sont trop courts',
						'maxMessage' => 'Les identifiants sont trop longs',
					]),
                ],
			])
            ->add('phone',  TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\+?[0-9]{10,14}$/',
                        'message' => ' Le format du numéro de téléphone est erroné',
                    ])
                ],
            ])
            ->add('is_published', CheckboxType::class)
            ->add('is_self_published', CheckboxType::class)
            ->add('artwork_type', ChoiceType::class, [
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
            ->add('genres',  ChoiceType::class, [
                'multiple' => true,
                'expanded' => true,
                'choices' => [
                    'Comédie' => 'Comédie',
                    'Drame' => 'Drame',
                    'Polar' => 'Polar',
                    'Thriller' => 'Thriller',
                    'Feel Good' =>'Feel Good',
                    'Cosy Mystery' => 'Cosy Mystery',
                    'Romance' => 'Romance',
                    'Historique' => 'Historique',
                    '(Auto)biographie' => '(Auto)biographie',
                    'Fantasy' =>'Fantasy',
                    'Récit de voyage' => 'Récit de voyage',
                    'Non-fiction' => 'Non-fiction',
                    'SF/Anticipation' => 'SF/Anticipation',
                    'Autre' => 'Autre'],
                // 'choice_attr' => [
                //     'Feel Good' =>['style'=>'font-style: italic'],
                //     'Cosy Mystery' => ['style'=>'font-style: italic'],
                //     'Fantasy' =>['style'=>'font-style: italic']],        
            // Ne fonctionne pas 
            ])
            
            ->add('interests', EntityType::class, [
                'class' => Interest::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Member::class,
        ]);
    }
}
