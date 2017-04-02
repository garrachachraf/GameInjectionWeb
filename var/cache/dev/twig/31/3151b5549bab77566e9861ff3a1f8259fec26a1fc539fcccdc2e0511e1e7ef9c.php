<?php

/* @EloboostedFrontoffice/tournoi/SearchTournament.html.twig */
class __TwigTemplate_b92504712db3ffbcb73e8658fb198991005d5c84f8fd6524866b3ef84a33c5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c81159380a5b698d21a1f9f062eb8354e56bb35af41b2c36c31051ec883bfe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81159380a5b698d21a1f9f062eb8354e56bb35af41b2c36c31051ec883bfe5b->enter($__internal_c81159380a5b698d21a1f9f062eb8354e56bb35af41b2c36c31051ec883bfe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/SearchTournament.html.twig"));

        $__internal_7195eb714ff4a5ab8ce134355709d02d6a2ab984550ee2fbc6dae98c959c7aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7195eb714ff4a5ab8ce134355709d02d6a2ab984550ee2fbc6dae98c959c7aa3->enter($__internal_7195eb714ff4a5ab8ce134355709d02d6a2ab984550ee2fbc6dae98c959c7aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/SearchTournament.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournois"]) ? $context["tournois"] : $this->getContext($context, "tournois")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 3
            echo "    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
        <div class=\"card\">
            <div class=\"card-img\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\"><img
                            src=\"data:image/png;base64,";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "imageTournoi", array()), "html", null, true);
            echo "\" alt=\"\"
                            style=\"height: 200px; background-color: #4B5F71\"></a>
                <div class=\"category\"><span
                            class=\"label label-success\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournoi"], "idCompteTrn", array()), "nom", array()), "html", null, true);
            echo "</span></div>
                <div class=\"meta\"><a href=\"games-single.html\"><i class=\"fa fa-child\"></i>6</a></div>
            </div>

            <div class=\"caption\">
                <h3 class=\"card-title\"><a
                            href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_show", array("id" => $this->getAttribute($context["tournoi"], "idTournoi", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "nom", array()), "html", null, true);
            echo "</a>
                </h3>
                <ul>
                    <li>Coming ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tournoi"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</li>
                </ul>
                <p>
                <div id=\"clock";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\"></div>
                <!--<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Endroid\Bundle\QrCodeBundle\Twig\Extension\QrCodeExtension')->qrcodeUrlFunction("dsds", array("extension" => "png")), "html", null, true);
            echo "\" />-->
                </p>
                <script>
                    // Set the date we're counting down to
                    var countDownDate";
            // line 27
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
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo " - now;

                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        // Output the result in an element with id=\"demo\"
                        document.getElementById(\"clock";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["tournoi"], "idTournoi", array()), "html", null, true);
            echo "\").innerHTML = days + \"d \" + hours + \"h \"
                            + minutes + \"m \" + seconds + \"s \";

                        // If the count down is over, write some text
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById(\"clock";
            // line 51
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
        
        $__internal_c81159380a5b698d21a1f9f062eb8354e56bb35af41b2c36c31051ec883bfe5b->leave($__internal_c81159380a5b698d21a1f9f062eb8354e56bb35af41b2c36c31051ec883bfe5b_prof);

        
        $__internal_7195eb714ff4a5ab8ce134355709d02d6a2ab984550ee2fbc6dae98c959c7aa3->leave($__internal_7195eb714ff4a5ab8ce134355709d02d6a2ab984550ee2fbc6dae98c959c7aa3_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tournoi/SearchTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  107 => 45,  95 => 36,  81 => 27,  74 => 23,  70 => 22,  64 => 19,  56 => 16,  47 => 10,  41 => 7,  37 => 6,  32 => 3,  28 => 2,  25 => 1,);
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
{% endfor %}", "@EloboostedFrontoffice/tournoi/SearchTournament.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tournoi\\SearchTournament.html.twig");
    }
}