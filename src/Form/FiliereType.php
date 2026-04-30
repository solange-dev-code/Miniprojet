<?php

namespace App\Form;

use App\Entity\Etablissement;
use App\Entity\Filiere;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FiliereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // On remplace 'libelle' par 'nom' pour coller à ton tableau
            ->add('nom', TextType::class, [
                'label' => 'Nom de la filière',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Génie Logiciel']
            ])
            // Ajout du champ CODE pour les badges (GL, WIM, etc.)
            ->add('code', TextType::class, [
                'label' => 'Code de la filière',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: GL']
            ])
            // Ajout du NIVEAU
            ->add('niveau', TextType::class, [
                'label' => 'Niveau (ex: Licence - Master)',
                'attr' => ['class' => 'form-control']
            ])
            // Amélioration de la liste des établissements
            ->add('etablissement', EntityType::class, [
                'class' => Etablissement::class,
                'choice_label' => 'nom', // Affiche le NOM au lieu de l'ID, c'est plus clair !
                'label' => 'Établissement rattaché',
                'attr' => ['class' => 'form-select']
            ])
            // Ajout du STATUT (Actif/Inactif)
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut de la filière',
                'choices'  => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                ],
                'attr' => ['class' => 'form-select']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Filiere::class,
        ]);
    }
}