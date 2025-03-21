<?php

namespace App\Form;

use App\Model\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Email;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Firstname is required'
					]),
					new Length([
						'min' => 2,
						'max' => 50,
						'minMessage' => 'Firstname is too short',
						'maxMessage' => 'Firstname is too long',
					]),
				],
			])
            ->add('lastname', TextType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Lastname is required'
					]),
					new Length([
						'min' => 2,
						'max' => 50,
						'minMessage' => 'Lastname is too short',
						'maxMessage' => 'Lastname is too long',
					]),
				],
			])
            ->add('email', EmailType::class,[
				'constraints' => [
					new NotBlank([
						'message' => 'Email is required'
					]),
					new Email([
						'message' => 'Email format is wrong'
					])
				],
			])
            // ->add('phone',TextType::class, [
			// 	'constraints' => [
            //         new Length([
            //             'min' => 10,
            //             'max' => 50,
            //             'minMessage' => 'Phone Number is too short',
            //             'maxMessage' => 'Phone Number is too long',
            //         ]),
            //     ],
            // ])
            ->add('message', TextareaType::class, [
				'constraints' => [
					new NotBlank([
						'message' => 'Message is required'
					]),
				],
			]);
			// si j'ajoute une contrainte de longueur, il faudra que je la teste dasn le deuxième test de ContactTypeTest
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
