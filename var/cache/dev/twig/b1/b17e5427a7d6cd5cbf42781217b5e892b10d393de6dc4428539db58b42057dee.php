<?php

/* @NomayaSocial/Buttons/pinterestButton.html.twig */
class __TwigTemplate_c3027d6b4fb19aff31a55db28b9f2378b96804ef16f830244e87b01877c83cb2 extends Twig_Template
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
        $__internal_8989fd493076ea7686160c5fd5d486a24c45e27cf5d0ba1a13c91909c14af9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8989fd493076ea7686160c5fd5d486a24c45e27cf5d0ba1a13c91909c14af9ce->enter($__internal_8989fd493076ea7686160c5fd5d486a24c45e27cf5d0ba1a13c91909c14af9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        $__internal_03c5284af20e23bc4e9544d57127af7749b3b7791e5719b40c5dbb97a72e9bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c5284af20e23bc4e9544d57127af7749b3b7791e5719b40c5dbb97a72e9bf6->enter($__internal_03c5284af20e23bc4e9544d57127af7749b3b7791e5719b40c5dbb97a72e9bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8989fd493076ea7686160c5fd5d486a24c45e27cf5d0ba1a13c91909c14af9ce->leave($__internal_8989fd493076ea7686160c5fd5d486a24c45e27cf5d0ba1a13c91909c14af9ce_prof);

        
        $__internal_03c5284af20e23bc4e9544d57127af7749b3b7791e5719b40c5dbb97a72e9bf6->leave($__internal_03c5284af20e23bc4e9544d57127af7749b3b7791e5719b40c5dbb97a72e9bf6_prof);

    }

    public function getTemplateName()
    {
        return "@NomayaSocial/Buttons/pinterestButton.html.twig";
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
{% endspaceless %}", "@NomayaSocial/Buttons/pinterestButton.html.twig", "C:\\wamp\\www\\sprintweb\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\pinterestButton.html.twig");
    }
}
