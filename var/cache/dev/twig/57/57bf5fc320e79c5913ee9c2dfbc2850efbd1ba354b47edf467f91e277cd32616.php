<?php

/* EloboostedFrontofficeBundle:tournoi:index.html.twig */
class __TwigTemplate_decb96e5fab961c0db1d0fe6ff0d381e567cec33079437dfd7954cbc43362a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:index.html.twig", 1);
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
        $__internal_069cd684e2a9a19df066864f80bab79c16a775843499d1e4fa264dcd8b33080f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069cd684e2a9a19df066864f80bab79c16a775843499d1e4fa264dcd8b33080f->enter($__internal_069cd684e2a9a19df066864f80bab79c16a775843499d1e4fa264dcd8b33080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $__internal_8462e81394b5133654be3440b6fe43297274accbf3eed8308c9803abd8bccd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8462e81394b5133654be3440b6fe43297274accbf3eed8308c9803abd8bccd60->enter($__internal_8462e81394b5133654be3440b6fe43297274accbf3eed8308c9803abd8bccd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_069cd684e2a9a19df066864f80bab79c16a775843499d1e4fa264dcd8b33080f->leave($__internal_069cd684e2a9a19df066864f80bab79c16a775843499d1e4fa264dcd8b33080f_prof);

        
        $__internal_8462e81394b5133654be3440b6fe43297274accbf3eed8308c9803abd8bccd60->leave($__internal_8462e81394b5133654be3440b6fe43297274accbf3eed8308c9803abd8bccd60_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_ba33fdf70ba060a26724ceb3f5545b128c9b87b002c682dad10bef9c2db6d90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba33fdf70ba060a26724ceb3f5545b128c9b87b002c682dad10bef9c2db6d90b->enter($__internal_ba33fdf70ba060a26724ceb3f5545b128c9b87b002c682dad10bef9c2db6d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7834548c5848b2c1905fb304b8294b13d7e59f44e548db7193c529b93f99274a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7834548c5848b2c1905fb304b8294b13d7e59f44e548db7193c529b93f99274a->enter($__internal_7834548c5848b2c1905fb304b8294b13d7e59f44e548db7193c529b93f99274a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <section class=\"hero hero-games height-300\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo ");\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></div>
                <p>New battle mechanics, a fantastic storyline, and a gritty setting make The Witcher one of the most engrossing RPGs.</p>
            </div>
        </div>
    </section>


    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Tournaments</h4>
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
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournois"]) ? $context["tournois"] : $this->getContext($context, "tournois")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 64
            echo "                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\"><img
                                            src=\"data:image/png;base64,";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "imageTournoi", array()), "html", null, true);
            echo "\" alt=\"\"
                                            style=\"height: 200px; background-color: #4B5F71\"></a>
                                <div class=\"category\"><span
                                            class=\"label label-success\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournoi"], "idCompteTrn", array()), "nom", array()), "html", null, true);
            echo "</span></div>
                                <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-child\"></i>6</a></div>
                            </div>

                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a
                                            href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "nom", array()), "html", null, true);
            echo "</a>
                                </h3>
                                <ul>
                                    <li>Coming ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournoi"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</li>
                                </ul>
                                <p>
                                <div id=\"clock";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\"></div>
                                </p>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo " = new Date(\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournoi"], "startDate", array())), "html", null, true);
            echo "\").getTime();

                                    // Update the count down every 1 second
                                    var x = setInterval(function () {

                                        // Get todays date and time
                                        var now = new Date().getTime();

                                        // Find the distance between now an the count down date
                                        var distance = countDownDate";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo " - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Output the result in an element with id=\"demo\"
                                        document.getElementById(\"clock";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = days + \"d \" + hours + \"h \"
                                            + minutes + \"m \" + seconds + \"s \";

                                        // If the count down is over, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById(\"clock";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = \"EXPIRED\";
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
            </div>

            <ul class=\"pagination margin-top-20\">
                <li class=\"disabled\"><a href=\"games.html#\">Previous</a></li>
                
                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            echo "
                    <li ";
            // line 128
            echo (((1 == $context["i"])) ? ("class=\"disabled\"") : (""));
            echo ">
                        <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                <li><a href=\"games.html#\">Next</a></li>
            </ul>
        </div>
        <ul>
            <li>
                <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
        echo "\">Create a new tournoi</a>
            </li>
        </ul>
    </section>
";
        
        $__internal_7834548c5848b2c1905fb304b8294b13d7e59f44e548db7193c529b93f99274a->leave($__internal_7834548c5848b2c1905fb304b8294b13d7e59f44e548db7193c529b93f99274a_prof);

        
        $__internal_ba33fdf70ba060a26724ceb3f5545b128c9b87b002c682dad10bef9c2db6d90b->leave($__internal_ba33fdf70ba060a26724ceb3f5545b128c9b87b002c682dad10bef9c2db6d90b_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 137,  242 => 132,  231 => 129,  227 => 128,  224 => 127,  220 => 126,  212 => 120,  197 => 111,  188 => 105,  176 => 96,  162 => 87,  155 => 83,  149 => 80,  141 => 77,  132 => 71,  126 => 68,  122 => 67,  117 => 64,  113 => 63,  49 => 3,  40 => 2,  11 => 1,);
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
    <section class=\"hero hero-games height-300\" style=\"background-image: url({{ asset('img/cover/cover-game.jpg') }});\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">The Witcher 3: Wild Hunt</a></div>
                <p>New battle mechanics, a fantastic storyline, and a gritty setting make The Witcher one of the most engrossing RPGs.</p>
            </div>
        </div>
    </section>


    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Tournaments</h4>
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
                {% for tournoi in tournois %}
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"{{ path('tournoi_show', { 'id': tournoi.idTournoi }) }}\"><img
                                            src=\"data:image/png;base64,{{ tournoi.imageTournoi }}\" alt=\"\"
                                            style=\"height: 200px; background-color: #4B5F71\"></a>
                                <div class=\"category\"><span
                                            class=\"label label-success\">{{ tournoi.idCompteTrn.nom }}</span></div>
                                <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-child\"></i>6</a></div>
                            </div>

                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a
                                            href=\"{{ path('tournoi_show', { 'id': tournoi.idTournoi }) }}\">{{ tournoi.nom }}</a>
                                </h3>
                                <ul>
                                    <li>Coming {{ tournoi.startDate | date('Y-m-d H:i:s') }}</li>
                                </ul>
                                <p>
                                <div id=\"clock{{ tournoi.idTournoi }}\"></div>
                                </p>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate{{ tournoi.idTournoi }} = new Date(\"{{ tournoi.startDate |date }}\").getTime();

                                    // Update the count down every 1 second
                                    var x = setInterval(function () {

                                        // Get todays date and time
                                        var now = new Date().getTime();

                                        // Find the distance between now an the count down date
                                        var distance = countDownDate{{ tournoi.idTournoi }} - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Output the result in an element with id=\"demo\"
                                        document.getElementById(\"clock{{ tournoi.idTournoi }}\").innerHTML = days + \"d \" + hours + \"h \"
                                            + minutes + \"m \" + seconds + \"s \";

                                        // If the count down is over, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById(\"clock{{ tournoi.idTournoi }}\").innerHTML = \"EXPIRED\";
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                {% endfor %}

            </div>

            <ul class=\"pagination margin-top-20\">
                <li class=\"disabled\"><a href=\"games.html#\">Previous</a></li>
                
                {% for i in 1..pages %}

                    <li {{ 1 == i ? 'class=\"disabled\"' }}>
                        <a href=\"{{ path('tournoi_index', {'p': i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
                <li><a href=\"games.html#\">Next</a></li>
            </ul>
        </div>
        <ul>
            <li>
                <a href=\"{{ path('tournoi_new') }}\">Create a new tournoi</a>
            </li>
        </ul>
    </section>
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:index.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/FrontofficeBundle/Resources/views/tournoi/index.html.twig");
    }
}
