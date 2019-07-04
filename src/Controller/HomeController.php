<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Campaign;
use App\Entity\Participant;
use App\Entity\Payment;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        // Get last 5 campaigns
        $campaign_rep = $this->getDoctrine()->getRepository(Campaign::class);
        $campaigns = $campaign_rep->findBy([], null, 5);

        // Get participants for each campaign and goal percentages
        $participant_rep = $this->getDoctrine()->getRepository(Participant::class);
        $payment_rep = $this->getDoctrine()->getRepository(Payment::class);

        $participants = [];
        $percentages = [];
        

        foreach ($campaigns as $campaign) { 
            $amount = 0;

            $campaignId = $campaign->getId();
            $campaignParticipants = $participant_rep->findBy([
                'campaign'    =>  $campaignId,
            ]);

            foreach ($campaignParticipants as $participant) {
                if ($participant) {
                    $participantId = $participant->getId();
                    $payment = $payment_rep->findOneBy([
                        'participant'    =>  $participantId,
                    ]);
                    $amount += $payment->getAmount();
                }
            }

            $participants[$campaignId] = $campaignParticipants;

            $percentages[$campaignId] = round($amount / $campaign->getGoal() * 100);
            
        }

        return $this->render('home/index.html.twig', [
            'controller_name'   =>  'HomeController',
            'campaigns'         =>  $campaigns,
            'participants'      =>  $participants,
            'percentages'       =>  $percentages,
        ]);
    }
}
