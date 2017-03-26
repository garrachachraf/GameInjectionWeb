<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompteController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function myProfileAction()
    {
        $em = $this->getDoctrine()->getManager();
        $compte=$this->get('security.token_storage')->getToken()->getUser();

        $res1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun1($compte->getIdCompte());
        $res2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->findByAmiCommun2($compte->getIdCompte());

        $result=array_merge_recursive($res1, $res2);
        return $this->render('EloboostedFrontofficeBundle:Compte:myProfile.html.twig',array('lstAmi'=>$result));
    }

    public function createAccountAction()
    {
        $compte = new Compte();


        return $this->render('EloboostedFrontofficeBundle:Compte:addCompte.html.twig');
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
            $compte->setTelNum(0);
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



            return($this->redirectToRoute("showAllPosts"));
        }
        return $this->render('@EloboostedFrontofficeBundle:Products:addProduct.html.twig');
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
