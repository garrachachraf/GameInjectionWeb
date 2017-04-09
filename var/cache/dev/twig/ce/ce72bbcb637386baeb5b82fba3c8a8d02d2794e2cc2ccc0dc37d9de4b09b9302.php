<?php

/* EloboostedFrontofficeBundle:games:index.html.twig */
class __TwigTemplate_95cf2ee8e35bd231609f8e76dfa9e749318536dcd1f2a835726b89974e41056f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:games:index.html.twig", 1);
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
        $__internal_dfd136916ebb45ecae8985f8ef9fd33fbdf21782f2647e8f868dd56cad12cd42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd136916ebb45ecae8985f8ef9fd33fbdf21782f2647e8f868dd56cad12cd42->enter($__internal_dfd136916ebb45ecae8985f8ef9fd33fbdf21782f2647e8f868dd56cad12cd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:index.html.twig"));

        $__internal_8c6ad9249b78c0c10c29c119ee0ee9abe8ad57f126a45de3961196c3932f9850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6ad9249b78c0c10c29c119ee0ee9abe8ad57f126a45de3961196c3932f9850->enter($__internal_8c6ad9249b78c0c10c29c119ee0ee9abe8ad57f126a45de3961196c3932f9850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd136916ebb45ecae8985f8ef9fd33fbdf21782f2647e8f868dd56cad12cd42->leave($__internal_dfd136916ebb45ecae8985f8ef9fd33fbdf21782f2647e8f868dd56cad12cd42_prof);

        
        $__internal_8c6ad9249b78c0c10c29c119ee0ee9abe8ad57f126a45de3961196c3932f9850->leave($__internal_8c6ad9249b78c0c10c29c119ee0ee9abe8ad57f126a45de3961196c3932f9850_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_3de83d9189ccd13be130767d1016d98ec97620c3197ffd7d37fbd97d5346d06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de83d9189ccd13be130767d1016d98ec97620c3197ffd7d37fbd97d5346d06c->enter($__internal_3de83d9189ccd13be130767d1016d98ec97620c3197ffd7d37fbd97d5346d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_afa0615aa9c5dc8093491f0e435429a8fe2d23938f0946adbe57f7dfb67a9ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa0615aa9c5dc8093491f0e435429a8fe2d23938f0946adbe57f7dfb67a9ced->enter($__internal_afa0615aa9c5dc8093491f0e435429a8fe2d23938f0946adbe57f7dfb67a9ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                        <li class=\"active\">Game List</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Games</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>

                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\">

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Date</a></li>
                        <li><a href=\"games.html#\">Score</a></li>
                        <li><a href=\"games.html#\">A-Z</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Playstation 4</a></li>
                        <li><a href=\"games.html#\">Steam</a></li>
                        <li><a href=\"games.html#\">Xbox One</a></li>
                        <li><a href=\"games.html#\">PC</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar-o\"></i> Release Date <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Released</a></li>
                        <li><a href=\"games.html#\">Unreleased</a></li>
                        <li><a href=\"games.html#\">2016</a></li>
                        <li><a href=\"games.html#\">2015</a></li>
                        <li><a href=\"games.html#\">2014</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
<section class=\"bg-grey-50\">
    <div class=\"container\">
        <div class=\"row\">

            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) ? $context["games"] : $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 74
            echo "
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"card\">
                    <div class=\"card-img\">

                        <a href= \"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\" >
                            <img src=\"data:image/png;base64,";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "imageGames", array()), "html", null, true);
            echo "\" style=\"height: 365px\" alt=\"\"></a>

                        <div class=\"category\"><span class=\"label label-success\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "supported", array()), "html", null, true);
            echo "</span></div>
                        <div class=\"meta\"><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                    </div>
                    <div class=\"caption\">
                        <h3 class=\"card-title\"><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_show", array("id" => $this->getAttribute($context["game"], "idGames", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "nomGames", array()), "html", null, true);
            echo "</a></h3>
                        <ul><li>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["game"], "idCathegorieg", array()), "nom", array()), "html", null, true);
            echo "</li></ul>
                        <p>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </div>


            <ul class=\"pagination margin-top-20\">
                <li class=\"disabled\"><a href=\"games.html#\">Previous</a></li>
                <li class=\"disabled\"><a href=\"games.html#\">1</a></li>
                <li><a href=\"games.html#\">2</a></li>
                <li><a href=\"games.html#\">...</a></li>
                <li><a href=\"games.html#\">Next</a></li>
            </ul>
    </div>

</section>
    </div>




    <ul>
        <li>
            <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_new");
        echo "\">Create a new game</a>
        </li>
    </ul>
";
        
        $__internal_afa0615aa9c5dc8093491f0e435429a8fe2d23938f0946adbe57f7dfb67a9ced->leave($__internal_afa0615aa9c5dc8093491f0e435429a8fe2d23938f0946adbe57f7dfb67a9ced_prof);

        
        $__internal_3de83d9189ccd13be130767d1016d98ec97620c3197ffd7d37fbd97d5346d06c->leave($__internal_3de83d9189ccd13be130767d1016d98ec97620c3197ffd7d37fbd97d5346d06c_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 113,  175 => 93,  164 => 88,  160 => 87,  154 => 86,  148 => 83,  144 => 82,  139 => 80,  135 => 79,  128 => 74,  124 => 73,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
                        <li class=\"active\">Game List</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Games</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"games.html#\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>

                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\">

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Date</a></li>
                        <li><a href=\"games.html#\">Score</a></li>
                        <li><a href=\"games.html#\">A-Z</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Playstation 4</a></li>
                        <li><a href=\"games.html#\">Steam</a></li>
                        <li><a href=\"games.html#\">Xbox One</a></li>
                        <li><a href=\"games.html#\">PC</a></li>
                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-calendar-o\"></i> Release Date <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"games.html#\">Released</a></li>
                        <li><a href=\"games.html#\">Unreleased</a></li>
                        <li><a href=\"games.html#\">2016</a></li>
                        <li><a href=\"games.html#\">2015</a></li>
                        <li><a href=\"games.html#\">2014</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
<section class=\"bg-grey-50\">
    <div class=\"container\">
        <div class=\"row\">

            {% for game in games %}

            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"card\">
                    <div class=\"card-img\">

                        <a href= \"{{ path('yes_show',{ 'id':game.idGames  }) }}\" >
                            <img src=\"data:image/png;base64,{{ game.imageGames  }}\" style=\"height: 365px\" alt=\"\"></a>

                        <div class=\"category\"><span class=\"label label-success\">{{ game.supported }}</span></div>
                        <div class=\"meta\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\"><i class=\"fa fa-heart-o\"></i> <span>15</span></a></div>
                    </div>
                    <div class=\"caption\">
                        <h3 class=\"card-title\"><a href=\"{{ path('yes_show',{ 'id':game.idGames  })}}\">{{ game.nomGames }}</a></h3>
                        <ul><li>{{ game.idCathegorieg.nom }}</li></ul>
                        <p>{{ game.description }}</p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>


            <ul class=\"pagination margin-top-20\">
                <li class=\"disabled\"><a href=\"games.html#\">Previous</a></li>
                <li class=\"disabled\"><a href=\"games.html#\">1</a></li>
                <li><a href=\"games.html#\">2</a></li>
                <li><a href=\"games.html#\">...</a></li>
                <li><a href=\"games.html#\">Next</a></li>
            </ul>
    </div>

</section>
    </div>




    <ul>
        <li>
            <a href=\"{{ path('yes_new') }}\">Create a new game</a>
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:games:index.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/games/index.html.twig");
    }
}
