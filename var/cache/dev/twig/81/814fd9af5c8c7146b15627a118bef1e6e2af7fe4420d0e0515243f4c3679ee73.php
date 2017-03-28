<?php

/* EloboostedFrontofficeBundle:tournoi:index.html.twig */
class __TwigTemplate_0718ffee90b4d50ca64e60b0247d85b3c4738e51229b98dbc16744c02dad3f03 extends Twig_Template
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
        $__internal_20bc559da863f1805b456f9145fe6af60005876b70dfc745aab8bbc7518652b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bc559da863f1805b456f9145fe6af60005876b70dfc745aab8bbc7518652b8->enter($__internal_20bc559da863f1805b456f9145fe6af60005876b70dfc745aab8bbc7518652b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $__internal_a4d8b5982b80c6ac1163061b0ecf264cbb10bb3f8365444caa7337be080fab0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d8b5982b80c6ac1163061b0ecf264cbb10bb3f8365444caa7337be080fab0c->enter($__internal_a4d8b5982b80c6ac1163061b0ecf264cbb10bb3f8365444caa7337be080fab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20bc559da863f1805b456f9145fe6af60005876b70dfc745aab8bbc7518652b8->leave($__internal_20bc559da863f1805b456f9145fe6af60005876b70dfc745aab8bbc7518652b8_prof);

        
        $__internal_a4d8b5982b80c6ac1163061b0ecf264cbb10bb3f8365444caa7337be080fab0c->leave($__internal_a4d8b5982b80c6ac1163061b0ecf264cbb10bb3f8365444caa7337be080fab0c_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_97d44c1fbe5b8a2bc9deefbb915597583269b9fe12348d62ce2d42e3f0b6ff38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d44c1fbe5b8a2bc9deefbb915597583269b9fe12348d62ce2d42e3f0b6ff38->enter($__internal_97d44c1fbe5b8a2bc9deefbb915597583269b9fe12348d62ce2d42e3f0b6ff38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_61bcff472b575d83364ec3bec38c9e4fb48f40c807b25f5e05e5a2cef6975f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bcff472b575d83364ec3bec38c9e4fb48f40c807b25f5e05e5a2cef6975f17->enter($__internal_61bcff472b575d83364ec3bec38c9e4fb48f40c807b25f5e05e5a2cef6975f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
                                <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeUrlFunction("dsds", array("extension" => "png")), "html", null, true);
            echo "\" />
                                </p>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate";
            // line 88
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
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo " - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Output the result in an element with id=\"demo\"
                                        document.getElementById(\"clock";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = days + \"d \" + hours + \"h \"
                                            + minutes + \"m \" + seconds + \"s \";

                                        // If the count down is over, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById(\"clock";
            // line 112
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
        // line 121
        echo "
            </div>

            <ul class=\"pagination margin-top-20\">
                <li class=\"disabled\"><a href=\"games.html#\">Previous</a></li>
                
                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 128
            echo "
                    <li ";
            // line 129
            echo (((1 == $context["i"])) ? ("class=\"disabled\"") : (""));
            echo ">
                        <a href=\"";
            // line 130
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
        // line 133
        echo "                <li><a href=\"games.html#\">Next</a></li>
            </ul>
        </div>
        <ul>
            <li>
                <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
        echo "\">Create a new tournoi</a>
            </li>
        </ul>
    </section>
";
        
        $__internal_61bcff472b575d83364ec3bec38c9e4fb48f40c807b25f5e05e5a2cef6975f17->leave($__internal_61bcff472b575d83364ec3bec38c9e4fb48f40c807b25f5e05e5a2cef6975f17_prof);

        
        $__internal_97d44c1fbe5b8a2bc9deefbb915597583269b9fe12348d62ce2d42e3f0b6ff38->leave($__internal_97d44c1fbe5b8a2bc9deefbb915597583269b9fe12348d62ce2d42e3f0b6ff38_prof);

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
        return array (  253 => 138,  246 => 133,  235 => 130,  231 => 129,  228 => 128,  224 => 127,  216 => 121,  201 => 112,  192 => 106,  180 => 97,  166 => 88,  159 => 84,  155 => 83,  149 => 80,  141 => 77,  132 => 71,  126 => 68,  122 => 67,  117 => 64,  113 => 63,  49 => 3,  40 => 2,  11 => 1,);
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
                                <img src=\"{{ qrcode_url(\"dsds\", { extension: 'png' }) }}\" />
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
", "EloboostedFrontofficeBundle:tournoi:index.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/index.html.twig");
    }
}
