<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_e78fa4dade7c02dfce07e9be377d033d2e96e9824220e453615e71373ad34a6b extends Twig_Template
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
        $__internal_2a9785e35c29d9af851f2502021dd41a40510ea3c54794459ad2888e10d8cf0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9785e35c29d9af851f2502021dd41a40510ea3c54794459ad2888e10d8cf0e->enter($__internal_2a9785e35c29d9af851f2502021dd41a40510ea3c54794459ad2888e10d8cf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_8794f03451c59b732872f7a110ed33fd1271879d103c0c5e41bb1e1685d30068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8794f03451c59b732872f7a110ed33fd1271879d103c0c5e41bb1e1685d30068->enter($__internal_8794f03451c59b732872f7a110ed33fd1271879d103c0c5e41bb1e1685d30068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a9785e35c29d9af851f2502021dd41a40510ea3c54794459ad2888e10d8cf0e->leave($__internal_2a9785e35c29d9af851f2502021dd41a40510ea3c54794459ad2888e10d8cf0e_prof);

        
        $__internal_8794f03451c59b732872f7a110ed33fd1271879d103c0c5e41bb1e1685d30068->leave($__internal_8794f03451c59b732872f7a110ed33fd1271879d103c0c5e41bb1e1685d30068_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Buttons:pinterestButton.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
{% endspaceless %}", "NomayaSocialBundle:Buttons:pinterestButton.html.twig", "/Applications/MAMP/htdocs/nn/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Buttons/pinterestButton.html.twig");
    }
}
