<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eloboosted_backoffice_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eloboosted_backoffice_tournoi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\TournoiController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Tournaments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AccountReports' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\CompteController::AccountReportsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/AccountReports',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'WarnTarget' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\SignalisationController::WarnTargetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/WarnTarget',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'WarnSender' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\BackofficeBundle\\Controller\\SignalisationController::WarnSenderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/WarnSender',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AddProduct_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ProductsController::AddProductAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addProd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'frontoffice_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tournoi_index' => array (  0 =>   array (    0 => 'p',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::indexAction',    'p' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'p',    ),    1 =>     array (      0 => 'text',      1 => '/Tournaments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tournoi_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showTournament',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tournoi_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newTournament',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tournoi_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editTournament',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tournoi_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournoiController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteTournament',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trournoi_commentaire_new' => array (  0 =>   array (    0 => 'tournoi',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\TournamentsCommentsController::NewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newcommenttr',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tournoi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_user_img' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\ImagesController::imgAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AddPost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::addPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/addPost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showAllPosts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::showAllPostsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/showAllPosts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'readPost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::readPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/readPost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'removePost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::removePostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/removePost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'like' => array (  0 =>   array (    0 => 'id',    1 => 'post',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::likeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'post',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/like',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentaire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::commentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/commentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Addcommentaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::AddcommentaireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Addcommentaire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'report' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::reportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/report',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reportcomment' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\PostController::reportcommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reportcomment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'myProfile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::myProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/myProfile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'createAccount' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::createAccountAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/createAccount',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accountcreation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::accountcreationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accountcreation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SendMail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\FrontofficeBundle\\Controller\\CompteController::sendMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SendMail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'eloboosted_login_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'check_logins' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/checklogin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\GameinjectionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'userpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\GameinjectionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SignOut' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Eloboosted\\LoginBundle\\Controller\\DefaultController::SignOutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/SignOut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'endroid_qrcode' => array (  0 =>   array (    0 => 'text',    1 => 'extension',  ),  1 =>   array (    '_controller' => 'Endroid\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',  ),  2 =>   array (    'text' => '[\\w\\W]+',    'extension' => 'jpg|png|gif',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'jpg|png|gif',      3 => 'extension',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[\\w\\W]+',      3 => 'text',    ),    2 =>     array (      0 => 'text',      1 => '/qrcode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
