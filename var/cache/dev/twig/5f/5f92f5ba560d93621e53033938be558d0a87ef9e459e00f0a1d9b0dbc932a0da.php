<?php

/* EloboostedFrontofficeBundle:tproduit:calender.html.twig */
class __TwigTemplate_3a93d5604cb49fd40f78ebdb3f5b996484a5152d13246b4928611f9ba9629835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", 1);
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
        $__internal_28cf5a3685c84c6ae37c08ea44cc0ecb3a02aae6d65a2627e0cc25c87f9089f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cf5a3685c84c6ae37c08ea44cc0ecb3a02aae6d65a2627e0cc25c87f9089f4->enter($__internal_28cf5a3685c84c6ae37c08ea44cc0ecb3a02aae6d65a2627e0cc25c87f9089f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $__internal_6100f8bdb6ea976889850370c8ed4b0b3162f11d71aed78308ba489ac5f7a355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6100f8bdb6ea976889850370c8ed4b0b3162f11d71aed78308ba489ac5f7a355->enter($__internal_6100f8bdb6ea976889850370c8ed4b0b3162f11d71aed78308ba489ac5f7a355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28cf5a3685c84c6ae37c08ea44cc0ecb3a02aae6d65a2627e0cc25c87f9089f4->leave($__internal_28cf5a3685c84c6ae37c08ea44cc0ecb3a02aae6d65a2627e0cc25c87f9089f4_prof);

        
        $__internal_6100f8bdb6ea976889850370c8ed4b0b3162f11d71aed78308ba489ac5f7a355->leave($__internal_6100f8bdb6ea976889850370c8ed4b0b3162f11d71aed78308ba489ac5f7a355_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_1cd93d7d45e2f74bc05ae6973ed165c5c871d147602982c87cf686c0841fa8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd93d7d45e2f74bc05ae6973ed165c5c871d147602982c87cf686c0841fa8d8->enter($__internal_1cd93d7d45e2f74bc05ae6973ed165c5c871d147602982c87cf686c0841fa8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7126662d9d0d6bd66229f8aedc0070ec5da8eebb6c44230b04c69e8b3f8dd198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7126662d9d0d6bd66229f8aedc0070ec5da8eebb6c44230b04c69e8b3f8dd198->enter($__internal_7126662d9d0d6bd66229f8aedc0070ec5da8eebb6c44230b04c69e8b3f8dd198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\"/>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adesignscalendar/js/calendar-settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <section class=\"hero height-350 hero-game\" style=\"background-image: url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cover/cover-game.jpg"), "html", null, true);
        echo ");\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection | Our Events</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tevenement_index_front", array("page" => 1));
        echo "\" class=\"no-padding-left\">Events</a>
                    </li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-30\">
        <div class=\"container\">
            <div class=\"row\">

                ";
        // line 30
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", 30)->display($context);
        // line 31
        echo "            </div>
        </div>
    </section>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/ekko-lightbox/ekko-lightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/core.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7126662d9d0d6bd66229f8aedc0070ec5da8eebb6c44230b04c69e8b3f8dd198->leave($__internal_7126662d9d0d6bd66229f8aedc0070ec5da8eebb6c44230b04c69e8b3f8dd198_prof);

        
        $__internal_1cd93d7d45e2f74bc05ae6973ed165c5c871d147602982c87cf686c0841fa8d8->leave($__internal_1cd93d7d45e2f74bc05ae6973ed165c5c871d147602982c87cf686c0841fa8d8_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tproduit:calender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  114 => 34,  109 => 31,  107 => 30,  92 => 18,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/adesignscalendar/css/fullcalendar/fullcalendar.css') }}\"/>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/jquery/jquery-1.8.2.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('bundles/adesignscalendar/js/fullcalendar/jquery.fullcalendar.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/adesignscalendar/js/calendar-settings.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
    <section class=\"hero height-350 hero-game\" style=\"background-image: url({{ asset('img/cover/cover-game.jpg') }});\">
        <div class=\"hero-bg\"></div>
        <div class=\"container\">
            <div class=\"page-header\">
                <div class=\"page-title\">Game Injection | Our Events</div>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('tevenement_index_front', {'page': 1}) }}\" class=\"no-padding-left\">Events</a>
                    </li>
                    <li class=\"active\">Show Event</li>
                </ol>
            </div>
        </div>
    </section>

    <section class=\"bg-grey-50 padding-top-30\">
        <div class=\"container\">
            <div class=\"row\">

                {% include 'ADesignsCalendarBundle::calendar.html.twig' %}
            </div>
        </div>
    </section>
    <script src=\"{{ asset('plugins/ekko-lightbox/ekko-lightbox.min.js') }}\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.js\"></script>
    <script src=\"{{ asset('js/core.min.js') }}\"></script>
{% endblock %}", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/tproduit/calender.html.twig");
    }
}
