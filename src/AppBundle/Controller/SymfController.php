<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Stadium;
use AppBundle\Entity\Team;
use AppBundle\Entity\Game;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Utils\Adder;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SymfController extends Controller
{
    /**
     * @Route("/", name="symf_list")
     */
    public function listAction(){
        $stadiums = $this->getDoctrine()
        ->getRepository('AppBundle:Stadium')
        ->findAll();
        return $this->render('symf/index.html.twig', array( 
        'stadiums'=> $stadiums
        ));
    }
    /**
     * @Route("symf/create", name="symf_create")
     */
    public function createAction(Request $request){
        $stadium = new Stadium;
        
        $form = $this->createFormBuilder($stadium)
          ->add('name', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('surface', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('season', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('week', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScore', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreTwo', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreThree', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreFour', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreFive', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreSix', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreSeven', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('calculatedScore', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('Save', SubmitType::class, array('label' => 'Create Stadium', 'attr' => array('class' => 'btn btn-primary' ,'style' => 'margin-bottom:15px')))
          ->getForm();
          
          $form ->handleRequest($request);
          
          if ($form->isSubmitted() && $form->isValid()){
              $name = $form['name']->getData();
              $surface = $form['surface']->getData();
              $season = $form['season']->getData();
              $week = $form['week']->getData();
              $imp_sco = $form['importedScore']->getData();
              $imp_sco2 = $form['importedScoreTwo']->getData();
              $imp_sco3 = $form['importedScoreThree']->getData();
              $imp_sco4 = $form['importedScoreFour']->getData();
              $imp_sco5 = $form['importedScoreFive']->getData();
              $imp_sco6 = $form['importedScoreSix']->getData();
              $imp_sco7 = $form['importedScoreSeven']->getData();
              $calc_sco = $form['calculatedScore']->getData();
              
              $stadium->setName($name);
              $stadium->setSurface($surface);
              $stadium->setSeason($season);
              $stadium->setWeek($week);
              $stadium->setImportedScore($imp_sco);
              $stadium->setImportedScoreTwo($imp_sco2);
              $stadium->setImportedScoreThree($imp_sco3);
              $stadium->setImportedScoreFour($imp_sco4);
              $stadium->setImportedScoreFive($imp_sco5);
              $stadium->setImportedScoreSix($imp_sco6);
              $stadium->setImportedScoreSeven($imp_sco7);
              
              $stadium->setImportedScore($imp_sco);
              $stadium->setCalculatedScore($calc_sco);
              
              $em = $this->getDoctrine()->getManager();
              
              $em->persist($stadium);
              $em->flush();
              
              $this->addFlash(
                  'notice',
                  'Added Stadium'
            );
              return $this->redirectToRoute('symf_list');
          }
          
        return $this->render('symf/create.html.twig', array(
            'form' => $form->createView()
            ));
    }
    /**
     * @Route("symf/edit/{id}", name="symf_edit")
     */
    public function editAction($id, Request $request, Adder $adder){
     $stadium = $this->getDoctrine()
        ->getRepository('AppBundle:Stadium')
        ->find($id);
        
              $stadium->setName($stadium->getName());
              $stadium->setSurface($stadium->getSurface());
              $stadium->setSeason($stadium->getSeason());
              $stadium->setWeek($stadium->getWeek());
              $stadium->setImportedScore($stadium->getImportedScore());
              $stadium->setCalculatedScore($stadium->getCalculatedScore());
        
        $form = $this->createFormBuilder($stadium)
          ->add('name', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('surface', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('season', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('week', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))->add('importedScore', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreTwo', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreThree', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreFour', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreFive', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreSix', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('importedScoreSeven', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('calculatedScore', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('Save', SubmitType::class, array('label' => 'Edit Stadium', 'attr' => array('class' => 'btn btn-primary' ,'style' => 'margin-bottom:15px')))
          ->getForm();
          
          $form ->handleRequest($request);
          
          if ($form->isSubmitted() && $form->isValid()){
              $name = $form['name']->getData();
              $surface = $form['surface']->getData();
              $season = $form['season']->getData();
              $week = $form['week']->getData();
              $imp_sco = $form['importedScore']->getData();
              $imp_sco2 = $form['importedScoreTwo']->getData();
              $imp_sco3 = $form['importedScoreThree']->getData();
              $imp_sco4 = $form['importedScoreFour']->getData();
              $imp_sco5 = $form['importedScoreFive']->getData();
              $imp_sco6 = $form['importedScoreSix']->getData();
              $imp_sco7 = $form['importedScoreSeven']->getData();                                                                                                 $imp_sco = $form['importedScore']->getData();
              $calc_sco = $form['calculatedScore']->getData();
              
              $em = $this->getDoctrine()->getManager();
              $stadium = $em->getRepository('AppBundle:Stadium')->find($id);
              
              $stadium->setName($name);
              $stadium->setSurface($surface);
              $stadium->setSeason($season);
              $stadium->setWeek($week);
              $stadium->setImportedScore($imp_sco);
              $stadium->setImportedScoreTwo($imp_sco2);
              $stadium->setImportedScoreThree($imp_sco3);
              $stadium->setImportedScoreFour($imp_sco4);
              $stadium->setImportedScoreFive($imp_sco5);
              $stadium->setImportedScoreSix($imp_sco6);
              $stadium->setImportedScoreSeven($imp_sco7);
            //  $stadium->setCalculatedScore($calc_sco);
              
              $slug = $this->get('adder')->addScore($imp_sco);
              $slug2 = $this->get('adder')->addScore($imp_sco2);
              $slug3 = $this->get('adder')->addScore($imp_sco3);
              $slug4 = $this->get('adder')->addScore($imp_sco4);
              $slug5 = $this->get('adder')->addScore($imp_sco5);
              $slug6 = $this->get('adder')->addScore($imp_sco6);
              $slug7 = $this->get('adder')->addScore($imp_sco7);
              $slugs = $slug + $slug2 + $slug3 + $slug4  + $slug5  + $slug6 + $slug7;
              dump($slugs);
              $stadium->setCalculatedScore($slugs);
              
              $em->flush();
              
              $this->addFlash(
                  'notice',
                  'Updated Stadium'
            );
              return $this->redirectToRoute('symf_list');
          }
        return $this->render('symf/edit.html.twig', array( 
        'stadium'=> $stadium,
        'form'=> $form->createView()
        ));
    }
    /**
     * @Route("symf/details/{id}", name="symf_details")
     */
    public function detailsAction($id){
      $stadium = $this->getDoctrine()
        ->getRepository('AppBundle:Stadium')
        ->find($id);
        return $this->render('symf/details.html.twig', array( 
        'stadium'=> $stadium,
        ));
    }

    /**
     * @Route("symf/delete/{id}", name="symf_delete")
     */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $stadium = $em->getRepository('AppBundle:Stadium')->find($id);
        
        $em->remove($stadium);
        $em->flush();
              
        $this->addFlash(
            'notice',
            'Stadium Removed'
            );
            
        return $this->redirectToRoute('symf_list');
    }
     /**
     * @Route("symf/team", name="symf_team")
     */
    public function createTeam(Request $request){
        $team = new Team;
        
        $form = $this->createFormBuilder($team)
          ->add('name', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('Save', SubmitType::class, array('label' => 'Create Team', 'attr' => array('class' => 'btn btn-primary' ,'style' => 'margin-bottom:15px')))
          ->getForm();
          
          $form ->handleRequest($request);
          
          if ($form->isSubmitted() && $form->isValid()){
              $name = $form['name']->getData();
              $team->setName($name);
              
              $em = $this->getDoctrine()->getManager();
              
              $em->persist($team);
              $em->flush();
              
              $this->addFlash(
                  'notice',
                  'Added Team'
            );
              return $this->redirectToRoute('symf_list');
          }
          
        return $this->render('symf/team.html.twig', array(
            'form' => $form->createView()
            ));
    }
     /**
     * @Route("symf/game", name="symf_game")
     */
    public function createGame(Request $request){
        $game = new Game;
        
        $form = $this->createFormBuilder($game)
          ->add('name', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('stadium', EntityType::class, array(
                'class' => 'AppBundle:Stadium',
                'choice_label' => 'name',
            ))
          ->add('away_team', EntityType::class, array(
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
            ))
           ->add('home_team', EntityType::class, array(
                'class' => 'AppBundle:Team',
                'choice_label' => 'name',
            ))
          ->add('away_score', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('state', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('total_scored', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('home_score', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('line', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('total', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('favorite', TextType::class, array('attr' => array('class' => 'form-control','style' => 'margin-bottom:15px')))
          ->add('Save', SubmitType::class, array('label' => 'Create Game', 'attr' => array('class' => 'btn btn-primary' ,'style' => 'margin-bottom:15px')))
          ->getForm();
          
          $form ->handleRequest($request);
          
          if ($form->isSubmitted() && $form->isValid()){
              $name = $form['name']->getData();
              $asco = $form['away_score']->getData();
              $hsco = $form['home_score']->getData();
              $line = $form['line']->getData();
              $total = $form['total']->getData();
              $fav = $form['favorite']->getData();
              $staid = $form['stadium']->getData();
              $aid = $form['away_team']->getData();
              $hid = $form['home_team']->getData();
              $state = $form['state']->getData();
              $tscrd = $form['total_scored']->getData();
              
              dump($form);
              
              $game->setName($name);
              $game->setAwayScore($asco);
              $game->setHomeScore($hsco);
              $game->setLine($line);
              $game->setTotal($total);
              $game->setFavorite($fav);
              $game->setStadium($staid);
              $game->setAwayTeam($aid);
              $game->setHomeTeam($hid);
              $game->setState($state);
              $game->setTotalScored($tscrd);
              
              
              $em = $this->getDoctrine()->getManager();
              $em->persist($game);
              $em->flush();
              
              $this->addFlash(
                  'notice',
                  'Added Game'
            );
           //   return $this->redirectToRoute('symf_list');
          }
          
        return $this->render('symf/game.html.twig', array(
            'form' => $form->createView()
            ));
    }
    
}
