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

        // eloboosted_gameinjection_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eloboosted_gameinjection_homepage');
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::streamAction',  '_route' => 'eloboosted_gameinjection_homepage',);
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
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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

                // tcategorie_index
                if ($pathinfo === '/admin/cat') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tcategorie_index;
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TCategorieController::indexAction',  '_route' => 'tcategorie_index',);
                }
                not_tcategorie_index:

                // tcategorie_show
                if (preg_match('#^/admin/(?P<id>[^/]++)/showcat$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tcategorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcategorie_show')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TCategorieController::showAction',));
                }
                not_tcategorie_show:

                // tcategorie_new
                if ($pathinfo === '/admin/newcat') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tcategorie_new;
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TCategorieController::newAction',  '_route' => 'tcategorie_new',);
                }
                not_tcategorie_new:

                // tcategorie_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/editcat$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tcategorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcategorie_edit')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TCategorieController::editAction',));
                }
                not_tcategorie_edit:

                // tcategorie_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/deletecat$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tcategorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tcategorie_delete')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TCategorieController::deleteAction',));
                }
                not_tcategorie_delete:

                // tevenement_index
                if ($pathinfo === '/admin/events') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tevenement_index;
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TEvenementController::indexAction',  '_route' => 'tevenement_index',);
                }
                not_tevenement_index:

                // tevenement_new
                if ($pathinfo === '/admin/newevent') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tevenement_new;
                    }

                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TEvenementController::newAction',  '_route' => 'tevenement_new',);
                }
                not_tevenement_new:

                // tevenement_edit
                if (preg_match('#^/admin/(?P<id>[^/]++)/editevent$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tevenement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tevenement_edit')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TEvenementController::editAction',));
                }
                not_tevenement_edit:

                // tevenement_delete
                if (preg_match('#^/admin/(?P<id>[^/]++)/deleteevent$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tevenement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tevenement_delete')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TEvenementController::deleteAction',));
                }
                not_tevenement_delete:

                if (0 === strpos($pathinfo, '/admin/gamelist')) {
                    // eloboosted_gamelist_index
                    if ($pathinfo === '/admin/gamelist') {
                        return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamelistController::indexAction',  '_route' => 'eloboosted_gamelist_index',);
                    }

                    // eloboosted_gamelist_new
                    if ($pathinfo === '/admin/gamelistnew') {
                        return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamelistController::newGamelistAction',  '_route' => 'eloboosted_gamelist_new',);
                    }

                    // eloboosted_gamelist_delete
                    if (0 === strpos($pathinfo, '/admin/gamelistdel') && preg_match('#^/admin/gamelistdel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_gamelist_delete')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamelistController::deleteAction',));
                    }

                }

                // eloboosted_backoffice_NewGame
                if ($pathinfo === '/admin/NewGame') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamesController::NewGameAction',  '_route' => 'eloboosted_backoffice_NewGame',);
                }

                // eloboosted_backoffice_DeleteGame
                if (0 === strpos($pathinfo, '/admin/DeleteGame') && preg_match('#^/admin/DeleteGame/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_DeleteGame')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamesController::DeleteGameAction',));
                }

                // eloboosted_backoffice_EditGame
                if (preg_match('#^/admin/(?P<id>[^/]++)/EditGame$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_eloboosted_backoffice_EditGame;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_EditGame')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamesController::EditGameAction',));
                }
                not_eloboosted_backoffice_EditGame:

                // eloboosted_backoffice_addCathegorie
                if ($pathinfo === '/admin/addCathegorie') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CathegorieController::addCathegorieAction',  '_route' => 'eloboosted_backoffice_addCathegorie',);
                }

                // eloboosted_backoffice_cathegorieList
                if ($pathinfo === '/admin/cathegorieList') {
                    return array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CathegorieController::cathegorieListAction',  '_route' => 'eloboosted_backoffice_cathegorieList',);
                }

                // eloboosted_backoffice_deleteCath
                if (0 === strpos($pathinfo, '/admin/deleteCath') && preg_match('#^/admin/deleteCath/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_deleteCath')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CathegorieController::deleteCathAction',));
                }

                // eloboosted_backoffice_EditCath
                if (0 === strpos($pathinfo, '/admin/EditCath') && preg_match('#^/admin/EditCath/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_EditCath')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CathegorieController::EditCathAction',));
                }

                // eloboosted_backoffice_accepted
                if (0 === strpos($pathinfo, '/admin/accepted') && preg_match('#^/admin/accepted/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eloboosted_backoffice_accepted')), array (  '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\GamesController::accecptedAction',));
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

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::streamAction',  '_route' => 'frontoffice_index',);
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
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
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
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::streamAction',  '_route' => 'home',);
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

        // emailVerif
        if ($pathinfo === '/emailVerif') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::emailVerifAction',  '_route' => 'emailVerif',);
        }

        // myFriends
        if ($pathinfo === '/myFriends') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::myFriendsAction',  '_route' => 'myFriends',);
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

        // postmsg
        if ($pathinfo === '/post') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::postAction',  '_route' => 'postmsg',);
        }

        // lstmsg
        if ($pathinfo === '/lst') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::listRenderAction',  '_route' => 'lstmsg',);
        }

        // myInboxFromNotif
        if ($pathinfo === '/myInboxFromNotif') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\NotificationController::myInboxFromNotifAction',  '_route' => 'myInboxFromNotif',);
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

        // tproduit_index
        if (0 === strpos($pathinfo, '/Products') && preg_match('#^/Products(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_tproduit_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tproduit_index')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::indexAction',  'page' => 1,));
        }
        not_tproduit_index:

        // tproduit_show
        if (preg_match('#^/(?P<id>[^/]++)/showProd$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_tproduit_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tproduit_show')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::showAction',));
        }
        not_tproduit_show:

        // tproduit_new
        if ($pathinfo === '/newProd') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_tproduit_new;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::newAction',  '_route' => 'tproduit_new',);
        }
        not_tproduit_new:

        // tproduit_search
        if ($pathinfo === '/searchprod') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_tproduit_search;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::SearchProductAction',  '_route' => 'tproduit_search',);
        }
        not_tproduit_search:

        // tproduit_edit
        if (0 === strpos($pathinfo, '/editProd') && preg_match('#^/editProd/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_tproduit_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tproduit_edit')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::editAction',));
        }
        not_tproduit_edit:

        // tproduit_delete
        if (0 === strpos($pathinfo, '/deleteProd') && preg_match('#^/deleteProd/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_tproduit_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tproduit_delete')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::deleteAction',));
        }
        not_tproduit_delete:

        // tevenement_index_front
        if (0 === strpos($pathinfo, '/eventsfront') && preg_match('#^/eventsfront(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_tevenement_index_front;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tevenement_index_front')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::eventsAction',  'page' => 1,));
        }
        not_tevenement_index_front:

        // vote_prod
        if (0 === strpos($pathinfo, '/voteprod') && preg_match('#^/voteprod/(?P<idprod>[^/]++)/(?P<nbrevote>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vote_prod')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\VoteProductController::newVoteAction',));
        }

        // tevenement_show
        if (preg_match('#^/(?P<id>[^/]++)/showevent$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_tevenement_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tevenement_show')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::showAction',));
        }
        not_tevenement_show:

        // calender
        if ($pathinfo === '/calender') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_calender;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TProduitController::CalenderAction',  '_route' => 'calender',);
        }
        not_calender:

        // streaming_all
        if ($pathinfo === '/streaming') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_streaming_all;
            }

            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TEvenementController::streamAction',  '_route' => 'streaming_all',);
        }
        not_streaming_all:

        // get_product_img
        if (0 === strpos($pathinfo, '/productimg') && preg_match('#^/productimg/(?P<id>[^/]++)(?:/(?P<nb>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_product_img')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ImagesController::ProductsimgAction',  'nb' => 1,));
        }

        // get_event_img
        if (0 === strpos($pathinfo, '/eventimg') && preg_match('#^/eventimg/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_event_img')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ImagesController::EventsimgAction',));
        }

        // tournamet_participation_winners
        if (0 === strpos($pathinfo, '/SelectWinners') && preg_match('#^/SelectWinners/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tournamet_participation_winners')), array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ParticipationController::setwinnersAction',));
        }

        // searchGames
        if ($pathinfo === '/searchGames') {
            return array (  '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\GamesController::searchGamesAction',  '_route' => 'searchGames',);
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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // fullcalendar_loader
        if ($pathinfo === '/fc-load-events') {
            return array (  '_controller' => 'ADesigns\\CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'fullcalendar_loader',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
