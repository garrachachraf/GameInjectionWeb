<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // eloboosted_gameinjection_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eloboosted_gameinjection_homepage');
            }

            return array (  '_controller' => 'Eloboosted\\GameinjectionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eloboosted_gameinjection_homepage',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // eloboosted_backoffice_homepage
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'eloboosted_backoffice_homepage');
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eloboosted_backoffice_homepage',);
                }

                // eloboosted_backoffice_tournoi
                if ($pathinfo === '/admin/Tournaments') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::indexAction',  '_route' => 'eloboosted_backoffice_tournoi',);
                }

                // eloboosted_backoffice_updatetournoi
                if ($pathinfo === '/admin/updatet') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::upAction',  '_route' => 'eloboosted_backoffice_updatetournoi',);
                }

                // eloboosted_backoffice_tournoi_show
                if (preg_match('#^/admin/(?P<id>[^/]++)/showTournament$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_eloboosted_backoffice_tournoi_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_tournoi_show')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::showAction',));
                }
                not_eloboosted_backoffice_tournoi_show:

                // eloboosted_backoffice_tournoi_new
                if ($pathinfo === '/admin/newTournament') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eloboosted_backoffice_tournoi_new;
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::newAction',  '_route' => 'eloboosted_backoffice_tournoi_new',);
                }
                not_eloboosted_backoffice_tournoi_new:

                // eloboosted_backoffice_tournoi_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/editTournament$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eloboosted_backoffice_tournoi_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_tournoi_edit')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::editAction',));
                }
                not_eloboosted_backoffice_tournoi_edit:

                // eloboosted_backoffice_tournoi_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/deleteTournament$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_eloboosted_backoffice_tournoi_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_tournoi_delete')), array (  '_controller' => 'EloboostedBacktofficeBundle:Tournoi:delete',));
                }
                not_eloboosted_backoffice_tournoi_delete:

                // AccountReports
                if ($pathinfo === '/admin/AccountReports') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CompteController::AccountReportsAction',  '_route' => 'AccountReports',);
                }

                if (0 === strpos($pathinfo, '/admin/Warn')) {
                    // WarnTarget
                    if ($pathinfo === '/admin/WarnTarget') {
                        return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\SignalisationController::WarnTargetAction',  '_route' => 'WarnTarget',);
                    }

                    // WarnSender
                    if ($pathinfo === '/admin/WarnSender') {
                        return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\SignalisationController::WarnSenderAction',  '_route' => 'WarnSender',);
                    }

                }

                // eloboosted_backoffice_games
                if ($pathinfo === '/admin/games') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamesController::indexAction',  '_route' => 'eloboosted_backoffice_games',);
                }

                // addcategorypost
                if ($pathinfo === '/admin/addcategorypost') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\PostController::addcategorypostAction',  '_route' => 'addcategorypost',);
                }

            }

            // AddProduct_page
            if ($pathinfo === '/addProd') {
                return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ProductsController::AddProductAction',  '_route' => 'AddProduct_page',);
            }

        }

        // frontoffice_index
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_frontoffice_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontoffice_index');
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontoffice_index',);
        }
        not_frontoffice_index:

        // tournoi_index
        if (0 === strpos($pathinfo, '/Tournaments') && preg_match('#^/Tournaments(?:/(?P<p>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_index')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::indexAction',  'p' => 1,));
        }

        // tournoi_show
        if (preg_match('#^/(?P<id>[^/]++)/showTournament$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_tournoi_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_show')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::showAction',));
        }
        not_tournoi_show:

        // tournoi_new
        if ($pathinfo === '/newTournament') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_tournoi_new;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::newAction',  '_route' => 'tournoi_new',);
        }
        not_tournoi_new:

        // tournoi_edit
        if (preg_match('#^/(?P<id>[^/]++)/editTournament$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_tournoi_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_edit')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::editAction',));
        }
        not_tournoi_edit:

        // tournoi_delete
        if (preg_match('#^/(?P<id>[^/]++)/deleteTournament$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_tournoi_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournoi_delete')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::deleteAction',));
        }
        not_tournoi_delete:

        // trournoi_commentaire_new
        if (preg_match('#^/(?P<tournoi>[^/]++)/newcommenttr$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'trournoi_commentaire_new')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournamentsCommentsController::NewAction',));
        }

        // get_user_img
        if (0 === strpos($pathinfo, '/image') && preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_img')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ImagesController::imgAction',));
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // AddPost
        if ($pathinfo === '/addPost') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::addPostAction',  '_route' => 'AddPost',);
        }

        // showAllPosts
        if ($pathinfo === '/showAllPosts') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::showAllPostsAction',  '_route' => 'showAllPosts',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            // readPost
            if ($pathinfo === '/readPost') {
                return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::readPostAction',  '_route' => 'readPost',);
            }

            // removePost
            if ($pathinfo === '/removePost') {
                return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::removePostAction',  '_route' => 'removePost',);
            }

        }

        // like
        if (0 === strpos($pathinfo, '/like') && preg_match('#^/like/(?P<id>[^/]++)/(?P<post>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'like')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::likeAction',));
        }

        // commentaire
        if (0 === strpos($pathinfo, '/commentaire') && preg_match('#^/commentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::commentaireAction',));
        }

        // Addcommentaire
        if ($pathinfo === '/Addcommentaire') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::AddcommentaireAction',  '_route' => 'Addcommentaire',);
        }

        if (0 === strpos($pathinfo, '/report')) {
            // report
            if (preg_match('#^/report/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'report')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::reportAction',));
            }

            // reportcomment
            if (0 === strpos($pathinfo, '/reportcomment') && preg_match('#^/reportcomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reportcomment')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::reportcommentAction',));
            }

        }

        // myProfile
        if ($pathinfo === '/myProfile') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::myProfileAction',  '_route' => 'myProfile',);
        }

        // createAccount
        if ($pathinfo === '/createAccount') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::createAccountAction',  '_route' => 'createAccount',);
        }

        // accountcreation
        if ($pathinfo === '/accountcreation') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::accountcreationAction',  '_route' => 'accountcreation',);
        }

        // lstnots
        if ($pathinfo === '/lstNot') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\NotificationController::NotificationlistRenderAction',  '_route' => 'lstnots',);
        }

        if (0 === strpos($pathinfo, '/Send')) {
            // SendMail
            if ($pathinfo === '/SendMail') {
                return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::sendMailAction',  '_route' => 'SendMail',);
            }

            // SendInvite
            if ($pathinfo === '/SendInvite') {
                return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::SendInviteAction',  '_route' => 'SendInvite',);
            }

        }

        // acceptInvFromNot
        if ($pathinfo === '/acceptInvFromNot') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\NotificationController::acceptInvFromNotAction',  '_route' => 'acceptInvFromNot',);
        }

        // RefuseInvFromNot
        if ($pathinfo === '/RefuseInvFromNot') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\NotificationController::RefuseInvFromNotAction',  '_route' => 'RefuseInvFromNot',);
        }

        // myInbox
        if ($pathinfo === '/myInbox') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::myInboxAction',  '_route' => 'myInbox',);
        }

        // editAccount
        if ($pathinfo === '/editAccount') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::editAccountAction',  '_route' => 'editAccount',);
        }

        // accountEdit
        if ($pathinfo === '/accountEdit') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::editAction',  '_route' => 'accountEdit',);
        }

        // sendMessage
        if ($pathinfo === '/sendMessage') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\MessageController::sendMessageAction',  '_route' => 'sendMessage',);
        }

        // userProfile
        if (0 === strpos($pathinfo, '/userProfile') && preg_match('#^/userProfile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'userProfile')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::userProfileAction',));
        }

        // yes_index
        if ($pathinfo === '/games') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_yes_index;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::indexAction',  '_route' => 'yes_index',);
        }
        not_yes_index:

        // yes_show
        if (preg_match('#^/(?P<id>[^/]++)/showGames$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_yes_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_show')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::showAction',));
        }
        not_yes_show:

        // yes_new
        if ($pathinfo === '/newGames') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_yes_new;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::newAction',  '_route' => 'yes_new',);
        }
        not_yes_new:

        // yes_edit
        if (preg_match('#^/(?P<id>[^/]++)/editGames$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_yes_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_edit')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::editAction',));
        }
        not_yes_edit:

        // yes_delete
        if (preg_match('#^/(?P<id>[^/]++)/deleteGames$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_yes_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_delete')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::deleteAction',));
        }
        not_yes_delete:

        // Search_tournament
        if ($pathinfo === '/Searchtournament') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::serachtournamentAction',  '_route' => 'Search_tournament',);
        }

        // participation_new
        if (0 === strpos($pathinfo, '/Participate') && preg_match('#^/Participate/(?P<tournament>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'participation_new')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ParticipationController::newParticipationAction',));
        }

        if (0 === strpos($pathinfo, '/Ticket')) {
            // participation_tiket
            if (preg_match('#^/Ticket/(?P<participation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participation_tiket')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ParticipationController::ticketAction',));
            }

            // participation_tikethtml
            if (0 === strpos($pathinfo, '/Tickethtml') && preg_match('#^/Tickethtml/(?P<participation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participation_tikethtml')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ParticipationController::tickethtmlAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // eloboosted_login_homepage
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eloboosted_login_homepage');
                }

                return array (  '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eloboosted_login_homepage',);
            }

            // check_logins
            if ($pathinfo === '/login/checklogin') {
                return array (  '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'check_logins',);
            }

            // adminpage
            if ($pathinfo === '/login/admin') {
                return array (  '_controller' => 'Eloboosted\\GameinjectionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'adminpage',);
            }

            // userpage
            if ($pathinfo === '/login/user') {
                return array (  '_controller' => 'Eloboosted\\GameinjectionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'userpage',);
            }

            // SignOut
            if ($pathinfo === '/login/SignOut') {
                return array (  '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::SignOutAction',  '_route' => 'SignOut',);
            }

        }

        // endroid_qrcode
        if (0 === strpos($pathinfo, '/qrcode') && preg_match('#^/qrcode/(?P<text>[\\w\\W]+)\\.(?P<extension>jpg|png|gif)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'endroid_qrcode')), array (  '_controller' => 'Endroid\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
