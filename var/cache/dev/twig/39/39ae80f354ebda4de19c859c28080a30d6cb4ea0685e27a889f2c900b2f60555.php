<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_8ac78325c39c412c0a1b25780f29024bc782dd90ba87f16effdf10cd94cf91b6 extends Twig_Template
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
        $__internal_dcbba25bf9a2a8ad4f9e68d71d9b2c47a0f86690fe59b70797dfa288658f80e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbba25bf9a2a8ad4f9e68d71d9b2c47a0f86690fe59b70797dfa288658f80e2->enter($__internal_dcbba25bf9a2a8ad4f9e68d71d9b2c47a0f86690fe59b70797dfa288658f80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_60bc81024a2f0709cbea67227e4347c066d736ebb61417c9c272471876fe1014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bc81024a2f0709cbea67227e4347c066d736ebb61417c9c272471876fe1014->enter($__internal_60bc81024a2f0709cbea67227e4347c066d736ebb61417c9c272471876fe1014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dcbba25bf9a2a8ad4f9e68d71d9b2c47a0f86690fe59b70797dfa288658f80e2->leave($__internal_dcbba25bf9a2a8ad4f9e68d71d9b2c47a0f86690fe59b70797dfa288658f80e2_prof);

        
        $__internal_60bc81024a2f0709cbea67227e4347c066d736ebb61417c9c272471876fe1014->leave($__internal_60bc81024a2f0709cbea67227e4347c066d736ebb61417c9c272471876fe1014_prof);

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
{% endspaceless %}", "NomayaSocialBundle:Buttons:pinterestButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle/Resources/views/Buttons/pinterestButton.html.twig");
    }
}
