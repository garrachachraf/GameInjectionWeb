<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/ad')) {
            // eloboosted_backoffice_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'eloboosted_backoffice_homepage');
                }

                return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'eloboosted_backoffice_homepage',);
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
        if ($pathinfo === '/like') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::likeAction',  '_route' => 'like',);
        }

        // commentaire
        if (0 === strpos($pathinfo, '/commentaire') && preg_match('#^/commentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::commentaireAction',));
        }

        // Addcommentaire
        if (0 === strpos($pathinfo, '/Addcommentaire') && preg_match('#^/Addcommentaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Addcommentaire')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::AddcommentaireAction',));
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
