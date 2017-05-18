<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Cunningsoft\ChatBundle\Entity\Message;
use Eloboosted\GameinjectionBundle\Entity\Compte;
use Eloboosted\GameinjectionBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Jestillore\PhpOpenfireUserservice\PHPOpenfireUserservice;
use OpenFireUserService;

class CompteController extends Controller
{


    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function emailVerifAction(Request $request)
    {
        $email=$request->get('email');
        $em = $this->getDoctrine()->getManager();


        $res=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findOneBy(array('email'=>$email));
        if($res == null)
        {
            return new JsonResponse(array('data'=>'noexist'));
        }
        return new JsonResponse(array('data'=>'exist'));
    }

    public function SendInviteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $notification =new Notification();
        $compte=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($request->get('idCompte'));

        if ($request->isMethod('POST'))
        {

            $notification->setNotificationtitle('Invite request');
            $notification->setContenu('the user '.$this->get('security.token_storage')->getToken()->getUser()->getPseudo().' wants to add you to his friends list');
            $notification->setInvite($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());
            $notification->setDateNotification(new \DateTime('now'));
            $notification->setIdCompteNot($compte);
            $notification->setVue(0);

            $em = $this->getDoctrine()->getManager();

            $em->persist($notification);
            $em->flush();


        }
        return new JsonResponse(array('data'=>json_encode('success')));
    }



    public function userProfileAction(Request $request)
    {
        $currentCompte=$this->get('security.token_storage')->getToken()->getUser();
        if(count($this->get('security.token_storage')->getToken()->getRoles())==0)
        {
            return $this->redirectToRoute('eloboosted_login_homepage');
        };


        $em = $this->getDoctrine()->getManager();
        $userId=$request->get('id');


        if($userId == $currentCompte->getIdCompte())
        {
            return $this->redirectToRoute('myProfile');
        }

        $res1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($currentCompte->getIdCompte());
        $res2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($currentCompte->getIdCompte());
        $resultCurrentCompte=array_merge_recursive($res1, $res2);


        $res3=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($userId);
        $res4=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($userId);
        $resultFriendCompte=array_merge_recursive($res3, $res4);

        $dejaAmi=in_array($currentCompte,$resultFriendCompte,true);

        $forumActivity=$em->getRepository('EloboostedGameinjectionBundle:Post')->findBy(array('idComptePost'=>$userId));
        $CommentaireActivity=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(array('idCompteCp'=>$userId));

//
        $comments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();

        $activitiesTotal=array_merge_recursive($CommentaireActivity, $forumActivity);





        $userInfo=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findOneBy(array('idCompte'=>$userId));
        $attenteInvite=$em->getRepository('EloboostedGameinjectionBundle:Notification')->findOneBy(array('invite'=> $currentCompte->getIdCompte(),'idCompteNot'=>$userInfo));
        $verifInvite=Count($attenteInvite);

        $forumAll=$em->getRepository('EloboostedGameinjectionBundle:Post')->findAll();

        return $this->render('EloboostedFrontofficeBundle:Compte:userProfile.html.twig',array('userInfo'=>$userInfo,'CurrentCompteFriends'=>$resultCurrentCompte,'ProfileCompteFriends'=>$resultFriendCompte,'dejaAmi'=>$dejaAmi,'attenteInvite'=>$verifInvite,'activitiesTotal'=>$activitiesTotal,'comments'=>$comments,'posts'=>$forumAll));
    }

    public function myFriendsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $compte=$this->get('security.token_storage')->getToken()->getUser();

        $res1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($compte->getIdCompte());
        $res2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($compte->getIdCompte());

        $result=array_merge_recursive($res1, $res2);


        $forumAll=$em->getRepository('EloboostedGameinjectionBundle:Post')->findAll();

        $CommentaireAll=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();

        $mycomments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(array('idCompteCp'=>$compte));
        $myposts=$em->getRepository('EloboostedGameinjectionBundle:Post')->findBy(array('idComptePost'=>$compte));

        $AllActivities=array_merge_recursive($forumAll, $CommentaireAll);

        $comments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();

        return $this->render('EloboostedFrontofficeBundle:Compte:myFriends.html.twig',array('lstAmi'=>$result,'friendsActivities'=>$AllActivities,'comments'=>$comments,'myposts'=>$myposts,'mycomments'=>$mycomments,'posts'=>$forumAll));
    }

    public function myProfileAction()
    {
        if(count($this->get('security.token_storage')->getToken()->getRoles())==0)
        {
            return $this->redirectToRoute('eloboosted_login_homepage');
        };

        $em = $this->getDoctrine()->getManager();
        $compte=$this->get('security.token_storage')->getToken()->getUser();

        $res1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($compte->getIdCompte());
        $res2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($compte->getIdCompte());

        $result=array_merge_recursive($res1, $res2);


        $forumAll=$em->getRepository('EloboostedGameinjectionBundle:Post')->findAll();
        $CommentaireAll=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();

        $mycomments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(array('idCompteCp'=>$compte));
        $myposts=$em->getRepository('EloboostedGameinjectionBundle:Post')->findBy(array('idComptePost'=>$compte));

        $AllActivities=array_merge_recursive($forumAll, $CommentaireAll);

        $everyForum=$em->getRepository('EloboostedGameinjectionBundle:Post')->findBy(
            array(),
            array('date' => 'DESC')
        );

        $comments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();

        return $this->render('EloboostedFrontofficeBundle:Compte:myProfile.html.twig',array('lstAmi'=>$result,'friendsActivities'=>$AllActivities,'comments'=>$comments,'myposts'=>$myposts,'mycomments'=>$mycomments,'posts'=>$everyForum));
    }

    public function myInboxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $compte=$this->get('security.token_storage')->getToken()->getUser();

        $res1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($compte->getIdCompte());
        $res2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($compte->getIdCompte());

        $allmessages=$em->getRepository('EloboostedGameinjectionBundle:Message')->findBy(array('recepteurMsg'=>$compte->getIdCompte()));

        $result=array_merge_recursive($res1, $res2);

        $mycomments=$em->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(array('idCompteCp'=>$compte));
        $myposts=$em->getRepository('EloboostedGameinjectionBundle:Post')->findBy(array('idComptePost'=>$compte));
        $forumAll=$em->getRepository('EloboostedGameinjectionBundle:Post')->findAll();

        return $this->render('EloboostedFrontofficeBundle:Compte:myInbox.html.twig',array('lstAmi'=>$result,'myMsgs'=>$allmessages,'myposts'=>$myposts,'mycomments'=>$mycomments,'posts'=>$forumAll));
    }

    public function createAccountAction()
    {
        $compte = new Compte();
        /*$api = 'https://gdata.youtube.com/feeds/api/users/';
        $user = "user";
        $headers = get_headers($api . $user, true);
        if ($headers[0] == "HTTP/1.0 200 OK") {
            // its ok
        }*/

        return $this->render('EloboostedFrontofficeBundle:Compte:addCompte.html.twig');
    }

    public function editAccountAction()
    {
        $em = $this->getDoctrine()->getManager();
        $compte = new Compte();
        $compte=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());



        return $this->render('EloboostedFrontofficeBundle:Compte:editCompte.html.twig',array('userInfo'=>$compte));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $compte =new Compte();
        $compte=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());

        if ($request->isMethod('POST'))
        {
            $file=$request->files->get('image');
            //var_dump($request->get('DateDeNaissance'));
            $compte->setPrenom($request->get('Prenom'));
            $compte->setNom($request->get('Nom'));
            $compte->setPseudo($request->get('Pseudo'));
            $time = new \DateTime($request->get('DateDeNaissance'));
            $compte->setMotDePasse($request->get('MotDePasse'));
            $compte->setTelNum($request->get('TelNum'));
            $compte->setEmail($request->get('Email'));
            $compte->setDateDeNaissance($time);
            if($file != null)
            {
                $compte->setImage($request->files->get('image'));
            }
            $em = $this->getDoctrine()->getManager();

            $em->persist($compte);
            $em->flush();



            return($this->redirectToRoute("home"));
        }
        return $this->render('@EloboostedFrontofficeBundle:Compte:editCompte.html.twig');
    }

    public function accountcreationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $compte =new Compte();

        if ($request->isMethod('POST'))
        {
            $file=$request->files->get('image');
            //var_dump($request->get('DateDeNaissance'));
            $compte->setPrenom($request->get('Prenom'));
            $compte->setNom($request->get('Nom'));
            $compte->setPseudo($request->get('Pseudo'));
            $time = new \DateTime($request->get('DateDeNaissance'));
            $compte->setMotDePasse($request->get('MotDePasse'));
            $compte->setTelNum($request->get('TelNum'));
            $compte->setEmail($request->get('Email'));
            $compte->setEtat(0);
            $compte->setPoints(0);
            $compte->setArchive(0);
            $compte->setRank(0);
            $compte->setNombreDeSignalisation(0);
            $compte->setDateDeNaissance($time);
            $compte->setImage($request->files->get('image'));

            $em = $this->getDoctrine()->getManager();

            $em->persist($compte);
            $em->flush();

            $us = new PHPOpenfireUserservice;
            $us->setEndpoint('http://ketsueki.mshome.net:9090/plugins/userService');

            $us->setAuthType(PHPOpenfireUserservice::AUTH_SHARED_KEY)
                ->setSharedKey('3qT0TFN3')
                ->setUsername('admin')
                ->setPassword('admin');

            $user1 = array(
                'username' => $request->get('Pseudo'),
                'password' => 'gameinjection'
            );

            $res1 = $us->createUser($user1);

            if($res1->isSuccess()) {

                return($this->redirectToRoute("home"));
            }

            return new Response(var_dump($res1->getMessage()));

        }
        return $this->render('EloboostedFrontofficeBundle:Products:addProduct.html.twig');
    }

    public function listRenderAction()
    {
        $messages = $this->getDoctrine()->getRepository('CunningsoftChatBundle:Message')->findBy(
            array('channel' => 'default'),
            array('id' => 'desc'),
            $this->container->getParameter('cunningsoft_chat.number_of_messages')
        );

        return $this->render('@EloboostedFrontoffice/Compte/listMsg.twig',array('messages' => $messages));
    }

    public function postAction(Request $request)
    {
        $message = new Message();
        $user=new Compte();
        $user=$this->getDoctrine()->getManager()->getRepository('EloboostedGameinjectionBundle:Compte')->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());
        $message->setAuthor($user);
        $message->setChannel('default');
        $message->setMessage($request->get('message'));
        $message->setInsertDate(new \DateTime("now"));
        $this->getDoctrine()->getManager()->persist($message);
        $this->getDoctrine()->getManager()->flush();

        return new JsonResponse(array('data'=>'success'));

    }

    public function sendMailAction(Request $request)
    {
        $Code=$request->get('code');
        $mail=$request->get('mail');
        $message = \Swift_Message::newInstance()
            ->setSubject('GameInjection::Code Verification !!!')
            ->setFrom('rey199677@gmail.com')
            ->setTo($mail)
            ->setBody(
                '   <html>
                    <head>


                    </head>
                    <body>
                    <table width="800px" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>

                                      <tr>
                                        <td background="https://image.ibb.co/ffs4ov/emaillayout.png" bgcolor="#ddf3e9" width="800" height="600" valign="top" style="background-repeat: no-repeat;">
                                        <table>
                                          <tr style="height: 390px">
                                            <td>

                                            </td>
                                          </tr>

                                          <tr>
                                            <td width="350px">

                                            </td>
                                            <td>
                                              <div style="color : White;font-size: 40px;">'.$Code.'
                                              </div>
                                            </td>
                                          </tr>

                                        </table>


                                          <!--[if gte mso 9]>
                        </v:textbox>
                      </v:rect>
                      <![endif]-->

                                      </td>
                                      </tr>
                                    </tbody>
                                  </table>
                    </body>
                    </html>',
                'text/html'
            );

        $this->get('mailer')->send($message);
        return new JsonResponse(array('data'=>json_encode('success')));
    }
}
