<?php

/* EloboostedFrontofficeBundle:tproduit:calender.html.twig */
class __TwigTemplate_5adc230a37e8c5b96c6b767cfd6e206e8d265e8562fbe7e9a6b1f78e97700c2d extends Twig_Template
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
        $__internal_46a9ca1c18ae7d29254cd3d390a068542b0d53d104833ce87045c38261f9467a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a9ca1c18ae7d29254cd3d390a068542b0d53d104833ce87045c38261f9467a->enter($__internal_46a9ca1c18ae7d29254cd3d390a068542b0d53d104833ce87045c38261f9467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $__internal_ab0ac0c296206f2539f9e9b2228e7384851f8457e4efc22a1a2db80e5bbcd43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0ac0c296206f2539f9e9b2228e7384851f8457e4efc22a1a2db80e5bbcd43d->enter($__internal_ab0ac0c296206f2539f9e9b2228e7384851f8457e4efc22a1a2db80e5bbcd43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tproduit:calender.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46a9ca1c18ae7d29254cd3d390a068542b0d53d104833ce87045c38261f9467a->leave($__internal_46a9ca1c18ae7d29254cd3d390a068542b0d53d104833ce87045c38261f9467a_prof);

        
        $__internal_ab0ac0c296206f2539f9e9b2228e7384851f8457e4efc22a1a2db80e5bbcd43d->leave($__internal_ab0ac0c296206f2539f9e9b2228e7384851f8457e4efc22a1a2db80e5bbcd43d_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_f3ca834c541d1790f8289dc2c6a7b436ff2397892d76a9206db2c69dea5a5ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ca834c541d1790f8289dc2c6a7b436ff2397892d76a9206db2c69dea5a5ea4->enter($__internal_f3ca834c541d1790f8289dc2c6a7b436ff2397892d76a9206db2c69dea5a5ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fc16d69936e006640cccd5555d2215dfa11cd3349894989f23d0667b86b9e5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc16d69936e006640cccd5555d2215dfa11cd3349894989f23d0667b86b9e5dc->enter($__internal_fc16d69936e006640cccd5555d2215dfa11cd3349894989f23d0667b86b9e5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        // line 29
        $this->loadTemplate("ADesignsCalendarBundle::calendar.html.twig", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", 29)->display($context);
        // line 30
        echo "            </div>
        </div>
    </section>

";
        
        $__internal_fc16d69936e006640cccd5555d2215dfa11cd3349894989f23d0667b86b9e5dc->leave($__internal_fc16d69936e006640cccd5555d2215dfa11cd3349894989f23d0667b86b9e5dc_prof);

        
        $__internal_f3ca834c541d1790f8289dc2c6a7b436ff2397892d76a9206db2c69dea5a5ea4->leave($__internal_f3ca834c541d1790f8289dc2c6a7b436ff2397892d76a9206db2c69dea5a5ea4_prof);

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
        return array (  108 => 30,  106 => 29,  92 => 18,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  62 => 6,  58 => 5,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

{% endblock %}", "EloboostedFrontofficeBundle:tproduit:calender.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tproduit/calender.html.twig");
    }
}
