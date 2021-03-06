<?php

/* EloboostedFrontofficeBundle:games:show.html.twig */
class __TwigTemplate_ff8d769044a4eaecb2d867b178f009d1f32714d761f3f35e2b1475b501eb9bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:games:show.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6848eb7613e3740f927aa83e0fb7c31f698bfe7031f3c3d8e3e7d88e67298afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6848eb7613e3740f927aa83e0fb7c31f698bfe7031f3c3d8e3e7d88e67298afc->enter($__internal_6848eb7613e3740f927aa83e0fb7c31f698bfe7031f3c3d8e3e7d88e67298afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:show.html.twig"));

        $__internal_932d55ceb9b653c061257310ad2d29f6f75a44bdaa3bc083339800b6a9d5d81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932d55ceb9b653c061257310ad2d29f6f75a44bdaa3bc083339800b6a9d5d81d->enter($__internal_932d55ceb9b653c061257310ad2d29f6f75a44bdaa3bc083339800b6a9d5d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6848eb7613e3740f927aa83e0fb7c31f698bfe7031f3c3d8e3e7d88e67298afc->leave($__internal_6848eb7613e3740f927aa83e0fb7c31f698bfe7031f3c3d8e3e7d88e67298afc_prof);

        
        $__internal_932d55ceb9b653c061257310ad2d29f6f75a44bdaa3bc083339800b6a9d5d81d->leave($__internal_932d55ceb9b653c061257310ad2d29f6f75a44bdaa3bc083339800b6a9d5d81d_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_e5ceaa3ef2fdbdb92d7e9c33a13aef03711a47b9843752c89a8f8c97992fcdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ceaa3ef2fdbdb92d7e9c33a13aef03711a47b9843752c89a8f8c97992fcdbf->enter($__internal_e5ceaa3ef2fdbdb92d7e9c33a13aef03711a47b9843752c89a8f8c97992fcdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4f0e9602ae97b2496eeb47c0618f840517d5754a5911059da5929b5a30180d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0e9602ae97b2496eeb47c0618f840517d5754a5911059da5929b5a30180d98->enter($__internal_4f0e9602ae97b2496eeb47c0618f840517d5754a5911059da5929b5a30180d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "
    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover.jpg"), "html", null, true);
        echo ");\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li><a href=\"#\">Game List</a></li>
                        <li class=\"active\">Game Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-white no-padding hidden-xs border-bottom-1 border-grey-300\" style=\"height: 54px\">
        <div class=\"tab-select text-center sticky\">

            <div class=\"container\">

                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"games-single.html#\">The Witcher 3: Wild Hunt</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-star\"></i> Review</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-pencil\"></i> News</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-image\"></i> Images</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-video-camera\"></i> Videos</a></li>
                    <li><a href=\"games-single-shop.html\"><i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;Buy game</a></li>
                </ul>
            </div>
        </div>


    </section>

    <section class=\"bg-grey-50 padding-top-30 \">


        <div class=\"container col-md-offset-2\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"games-single.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "idCathegorieg", array()), "nom", array()), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/") . $this->getAttribute($this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "idCathegorieg", array()), "nom", array())) . ".png"), "html", null, true);
        echo "\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a href=\"games-single.html#\">";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "nomGames", array()), "html", null, true);
        echo "</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><span class=\"label label-info\">";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "supported", array())), "html", null, true);
        echo "</span> </li>
                                            <li><a href=\"games-single.html#\"><i class=\"fa fa-comments\"></i> 0 <span class=\"hidden-xs\">Comments</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <img src=\"data:image/png;base64,";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "imageGames", array()), "html", null, true);
        echo "\" style=\"height: 500px\" alt=\"\"></a>

                                </div>
                                <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["game"]) ? $context["game"] : $this->getContext($context, "game")), "description", array()), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <ul class=\"post-action\">
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
                            </ul>
                        </div>
                    </div>

                    <h2><span>Follows this game (202)</span></h2>
                    <div class=\"content-padding\">
                        <ul class=\"profile-friends-list\">
                            <li>
                                <a href=\"user-single.html\" class=\"avatar online user-tooltip\">
                                    <img src=\"images/photos/avatar-1.jpg\" class=\"setborder\" title=\"\" alt=\"\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"user-single.html\" class=\"avatar online user-tooltip\">
                                    <img src=\"images/photos/avatar-2.jpg\" class=\"setborder\" title=\"\" alt=\"\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"users-more\">+160</a>
                            </li>
                        </ul>
                        <div class=\"clear-float\"></div>
                    </div>

                </div>
            </div>
        </div>



    </section>
";
        
        $__internal_4f0e9602ae97b2496eeb47c0618f840517d5754a5911059da5929b5a30180d98->leave($__internal_4f0e9602ae97b2496eeb47c0618f840517d5754a5911059da5929b5a30180d98_prof);

        
        $__internal_e5ceaa3ef2fdbdb92d7e9c33a13aef03711a47b9843752c89a8f8c97992fcdbf->leave($__internal_e5ceaa3ef2fdbdb92d7e9c33a13aef03711a47b9843752c89a8f8c97992fcdbf_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 70,  129 => 67,  119 => 60,  114 => 58,  107 => 56,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}

    <section class=\"bg-transparent\" style=\"padding: 0%\">
        <div class=\"background-image\" style=\"background-image: url({{ asset('img/cover/cover.jpg') }});\">
            <span class=\"background-overlay\"></span>
            <div class=\"container\">
                <h3 class=\"color-white font-weight-300\"></h3>
            </div>
        </div>
    </section>
    <section class=\"border-bottom-1 border-grey-300 padding-top-10 padding-bottom-10\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"/\">Home</a></li>
                        <li><a href=\"#\">Games</a></li>
                        <li><a href=\"#\">Game List</a></li>
                        <li class=\"active\">Game Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class=\"bg-white no-padding hidden-xs border-bottom-1 border-grey-300\" style=\"height: 54px\">
        <div class=\"tab-select text-center sticky\">

            <div class=\"container\">

                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"games-single.html#\">The Witcher 3: Wild Hunt</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-star\"></i> Review</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-pencil\"></i> News</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-image\"></i> Images</a></li>
                    <li><a href=\"games-single.html#\"><i class=\"fa fa-video-camera\"></i> Videos</a></li>
                    <li><a href=\"games-single-shop.html\"><i class=\"fa fa-shopping-cart\"></i>&nbsp;&nbsp;Buy game</a></li>
                </ul>
            </div>
        </div>


    </section>

    <section class=\"bg-grey-50 padding-top-30 \">


        <div class=\"container col-md-offset-2\">
            <div class=\"row\">
                <div class=\"col-md-8 padding-right-20\">
                    <div class=\"panel panel-default panel-post\">
                        <div class=\"panel-body\">
                            <div class=\"post\">
                                <div class=\"post-header post-author\">
                                    <a href=\"games-single.html#\" class=\"author\" data-toggle=\"tooltip\" title=\"{{ game.idCathegorieg.nom }}\"><img src=\"{{ asset(\"img/\" ) ~ game.idCathegorieg.nom  ~\".png\"}}\" alt=\"\"></a>
                                    <div class=\"post-title\">
                                        <h3><a href=\"games-single.html#\">{{ game.nomGames }}</a></h3>
                                        <ul class=\"post-meta\">
                                            <li><span class=\"label label-info\">{{ game.supported | upper }}</span> </li>
                                            <li><a href=\"games-single.html#\"><i class=\"fa fa-comments\"></i> 0 <span class=\"hidden-xs\">Comments</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"embed-responsive embed-responsive-16by9 post-thumbnail\">
                                    <img src=\"data:image/png;base64,{{ game.imageGames  }}\" style=\"height: 500px\" alt=\"\"></a>

                                </div>
                                <p>{{ game.description }}</p>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <ul class=\"post-action\">
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-heart\"></i> like (5)</a></li>
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-comments\"></i> Comments</a></li>
                                <li><a href=\"games-single.html#\"><i class=\"fa fa-reply\"></i> share</a></li>
                            </ul>
                        </div>
                    </div>

                    <h2><span>Follows this game (202)</span></h2>
                    <div class=\"content-padding\">
                        <ul class=\"profile-friends-list\">
                            <li>
                                <a href=\"user-single.html\" class=\"avatar online user-tooltip\">
                                    <img src=\"images/photos/avatar-1.jpg\" class=\"setborder\" title=\"\" alt=\"\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"user-single.html\" class=\"avatar online user-tooltip\">
                                    <img src=\"images/photos/avatar-2.jpg\" class=\"setborder\" title=\"\" alt=\"\" />
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"users-more\">+160</a>
                            </li>
                        </ul>
                        <div class=\"clear-float\"></div>
                    </div>

                </div>
            </div>
        </div>



    </section>
{% endblock %}
", "EloboostedFrontofficeBundle:games:show.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/games/show.html.twig");
    }
}
