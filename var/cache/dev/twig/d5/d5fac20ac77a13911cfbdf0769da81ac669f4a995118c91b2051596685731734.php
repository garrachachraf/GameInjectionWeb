<?php

/* EloboostedFrontofficeBundle:tournoi:index.html.twig */
class __TwigTemplate_746bbd6355d4d80103606d24278c0f69a293e63a0321336da34aa640def895f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:index.html.twig", 2);
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
        $__internal_525542024d5fb3ddd7c627f8a14935bc4bf958877bea025fe9d5920d70994f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525542024d5fb3ddd7c627f8a14935bc4bf958877bea025fe9d5920d70994f87->enter($__internal_525542024d5fb3ddd7c627f8a14935bc4bf958877bea025fe9d5920d70994f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $__internal_07abcf24f9d5e8bfe2494ef223fddc64079dac9a34a44e7a175eec846d89b408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07abcf24f9d5e8bfe2494ef223fddc64079dac9a34a44e7a175eec846d89b408->enter($__internal_07abcf24f9d5e8bfe2494ef223fddc64079dac9a34a44e7a175eec846d89b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525542024d5fb3ddd7c627f8a14935bc4bf958877bea025fe9d5920d70994f87->leave($__internal_525542024d5fb3ddd7c627f8a14935bc4bf958877bea025fe9d5920d70994f87_prof);

        
        $__internal_07abcf24f9d5e8bfe2494ef223fddc64079dac9a34a44e7a175eec846d89b408->leave($__internal_07abcf24f9d5e8bfe2494ef223fddc64079dac9a34a44e7a175eec846d89b408_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_f29da494fedce2e6a540c32d5833c89fb1864c72463610ff6cdea316f658d504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29da494fedce2e6a540c32d5833c89fb1864c72463610ff6cdea316f658d504->enter($__internal_f29da494fedce2e6a540c32d5833c89fb1864c72463610ff6cdea316f658d504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a316bd959f371a7e1b8ad75de537d2dc7954d636ca9c214c8169ccb3ff1ca9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a316bd959f371a7e1b8ad75de537d2dc7954d636ca9c214c8169ccb3ff1ca9b4->enter($__internal_a316bd959f371a7e1b8ad75de537d2dc7954d636ca9c214c8169ccb3ff1ca9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <script>
        function showHint(str) {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"tournoisaff\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Search_tournament");
        echo "?word=\" + str, true);
                xmlhttp.send();

        }
    </script>
    <section class=\"hero hero-games height-300\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo ");\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">Game INjection: Tournaments</a></div>
                <p>Get a complete overview of all tournaments which are available on Game Injection. Secure a place for you in a tournament!</p>
            </div>
        </div>
    </section>


    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Tournaments</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_new");
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>

                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\" onkeyup=\"showHint(this.value)\">

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?sortedBy=Date\">Date</a></li>
                        <li><a href=\"?sortedBy=Name\">Name</a></li>
                        <li><a href=\"?sortedBy=Fees\">Fees</a></li>

                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">ALL</a></li>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["games"] ?? $this->getContext($context, "games")));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 56
            echo "                        <li><a href=\"?games=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "idGame", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["game"], "name", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </ul>
                </div>


            </div>
        </div>
    </section>


    <section class=\"bg-grey-50\">
        <div class=\"container\" >

            <div class=\"row\" name=\"tournoisaff\" id=\"tournoisaff\">
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tournois"] ?? $this->getContext($context, "tournois")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 72
            echo "                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\"><img
                                            src=\"data:image/png;base64,";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "imageTournoi", array()), "html", null, true);
            echo "\" alt=\"\"
                                            style=\"height: 200px; background-color: #4B5F71\"></a>
                                <div class=\"category\"><span
                                            class=\"label label-success\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournoi"], "idCompteTrn", array()), "nom", array()), "html", null, true);
            echo "</span></div>
                                <div class=\"meta\"><a ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-child\"></i></a></div>
                            </div>

                            <div class=\"caption\">
                                <h3 class=\"card-title\"><a
                                            href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "nom", array()), "html", null, true);
            echo "</a>
                                </h3>
                                <ul>
                                    <li>Coming ";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournoi"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</li>
                                </ul>
                                <p>
                                <div id=\"clock";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\"></div>
                                <!--<img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeUrlFunction("dsds", array("extension" => "png")), "html", null, true);
            echo "\" />-->
                                </p>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate";
            // line 96
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
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo " - now;

                                        // Time calculations for days, hours, minutes and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        // Output the result in an element with id=\"demo\"
                                        document.getElementById(\"clock";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = days + \"d \" + hours + \"h \"
                                            + minutes + \"m \" + seconds + \"s \";

                                        // If the count down is over, write some text
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById(\"clock";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = \"Started\";
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
        // line 129
        echo "
            </div>

            <ul class=\"pagination margin-top-20\">
                <li ";
        // line 133
        if ((($context["p"] ?? $this->getContext($context, "p")) == 1)) {
            echo "class=\"disabled\"";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => (($context["p"] ?? $this->getContext($context, "p")) - 1))), "html", null, true);
        echo "\">Previous</a></li>
                
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["pages"] ?? $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 136
            echo "
                    <li ";
            // line 137
            if ((($context["p"] ?? $this->getContext($context, "p")) == $context["i"])) {
                echo "class=\"disabled\"";
            }
            echo ">
                        <a href=\"";
            // line 138
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
        // line 141
        echo "                <li";
        if (((($context["p"] ?? $this->getContext($context, "p")) + 1) > twig_length_filter($this->env, ($context["pages"] ?? $this->getContext($context, "pages"))))) {
            echo " class=\"disabled\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index", array("p" => (($context["p"] ?? $this->getContext($context, "p")) + 1))), "html", null, true);
        echo "\">Next</a></li>
            </ul>
        </div>

    </section>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>


    </section>
";
        
        $__internal_a316bd959f371a7e1b8ad75de537d2dc7954d636ca9c214c8169ccb3ff1ca9b4->leave($__internal_a316bd959f371a7e1b8ad75de537d2dc7954d636ca9c214c8169ccb3ff1ca9b4_prof);

        
        $__internal_f29da494fedce2e6a540c32d5833c89fb1864c72463610ff6cdea316f658d504->leave($__internal_f29da494fedce2e6a540c32d5833c89fb1864c72463610ff6cdea316f658d504_prof);

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
        return array (  310 => 148,  305 => 146,  292 => 141,  281 => 138,  275 => 137,  272 => 136,  268 => 135,  259 => 133,  253 => 129,  238 => 120,  229 => 114,  217 => 105,  203 => 96,  196 => 92,  192 => 91,  186 => 88,  178 => 85,  170 => 80,  166 => 79,  160 => 76,  156 => 75,  151 => 72,  147 => 71,  132 => 58,  121 => 56,  117 => 55,  113 => 54,  92 => 36,  88 => 35,  69 => 19,  61 => 14,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}
{% block main %}

    <script>
        function showHint(str) {

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(\"tournoisaff\").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open(\"GET\", \"{{ path('Search_tournament') }}?word=\" + str, true);
                xmlhttp.send();

        }
    </script>
    <section class=\"hero hero-games height-300\" style=\"background-image: url({{ asset('img/cover/cover-game.jpg') }});\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title bold\"><a href=\"games-single.html\">Game INjection: Tournaments</a></div>
                <p>Get a complete overview of all tournaments which are available on Game Injection. Secure a place for you in a tournament!</p>
            </div>
        </div>
    </section>


    <section class=\"padding-top-25 no-padding-bottom border-bottom-1 border-grey-300\">
        <div class=\"container\">
            <div class=\"headline\">
                <h4>Recent Tournaments</h4>
                <div class=\"btn-group pull-right\">
                    <a href=\"{{ path('tournoi_new') }}\" class=\"btn btn-default\"><i class=\"fa fa-th-large no-margin\"></i></a>
                    <a href=\"{{ path('tournoi_new') }}\" class=\"btn btn-default\"><i class=\"fa fa-bars no-margin\"></i></a>
                </div>

                <input type=\"text\" class=\"form-control hidden-xs\" placeholder=\"Search Game...\" onkeyup=\"showHint(this.value)\">

                <div class=\"dropdown\">
                    <a href=\"games.html#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-sort-amount-desc\"></i> Sort by <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"?sortedBy=Date\">Date</a></li>
                        <li><a href=\"?sortedBy=Name\">Name</a></li>
                        <li><a href=\"?sortedBy=Fees\">Fees</a></li>

                    </ul>
                </div>

                <div class=\"dropdown\">
                    <a href=\"#\" class=\"btn btn-default btn-icon-left btn-icon-right dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-gamepad\"></i> Platform <i class=\"fa fa-caret-down\"></i></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('tournoi_index') }}\">ALL</a></li>
                        {% for game in games %}
                        <li><a href=\"?games={{ game.idGame }}\">{{ game.name }}</a></li>
                        {% endfor %}
                    </ul>
                </div>


            </div>
        </div>
    </section>


    <section class=\"bg-grey-50\">
        <div class=\"container\" >

            <div class=\"row\" name=\"tournoisaff\" id=\"tournoisaff\">
                {% for tournoi in tournois %}
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"card\">
                            <div class=\"card-img\">
                                <a href=\"{{ path('tournoi_show', { 'id': tournoi.idTournoi }) }}\"><img
                                            src=\"data:image/png;base64,{{ tournoi.imageTournoi }}\" alt=\"\"
                                            style=\"height: 200px; background-color: #4B5F71\"></a>
                                <div class=\"category\"><span
                                            class=\"label label-success\">{{ tournoi.idCompteTrn.nom }}</span></div>
                                <div class=\"meta\"><a {{ path('tournoi_show', { 'id': tournoi.idTournoi }) }}\"><i class=\"fa fa-child\"></i></a></div>
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
                                <!--<img src=\"{{ qrcode_url(\"dsds\", { extension: 'png' }) }}\" />-->
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
                                            document.getElementById(\"clock{{ tournoi.idTournoi }}\").innerHTML = \"Started\";
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                    </div>
                {% endfor %}

            </div>

            <ul class=\"pagination margin-top-20\">
                <li {% if p==1 %}{{  'class=\"disabled\"' }}{% endif %} ><a href=\"{{ path('tournoi_index', {'p': p-1}) }}\">Previous</a></li>
                
                {% for i in 1..pages %}

                    <li {% if p == i %}{{  'class=\"disabled\"' }}{% endif %}>
                        <a href=\"{{ path('tournoi_index', {'p': i}) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
                <li{% if (p+1) > (pages | length) %} class=\"disabled\" {% endif %}><a href=\"{{ path('tournoi_index', {'p': p+1}) }}\">Next</a></li>
            </ul>
        </div>

    </section>
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>


    </section>
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tournoi/index.html.twig");
    }
}
