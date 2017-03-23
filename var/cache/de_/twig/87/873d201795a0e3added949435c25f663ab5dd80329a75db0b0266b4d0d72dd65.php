<?php

/* @NomayaSocial/Buttons/pinterestButton.html.twig */
class __TwigTemplate_b17813d0c495030e6df34ca06a9e21e298ac5b7a7c76e59e42951cefb0bdee9b extends Twig_Template
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
        $__internal_5bc59893738973c65b1da4af03eb01df4e2d9be3a6d9ae7866f16c783487f117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc59893738973c65b1da4af03eb01df4e2d9be3a6d9ae7866f16c783487f117->enter($__internal_5bc59893738973c65b1da4af03eb01df4e2d9be3a6d9ae7866f16c783487f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        $__internal_18d029a1d713b573c156ee37ce0de171ab05eadd96884a86c70f2d8c2db0160a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d029a1d713b573c156ee37ce0de171ab05eadd96884a86c70f2d8c2db0160a->enter($__internal_18d029a1d713b573c156ee37ce0de171ab05eadd96884a86c70f2d8c2db0160a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5bc59893738973c65b1da4af03eb01df4e2d9be3a6d9ae7866f16c783487f117->leave($__internal_5bc59893738973c65b1da4af03eb01df4e2d9be3a6d9ae7866f16c783487f117_prof);

        
        $__internal_18d029a1d713b573c156ee37ce0de171ab05eadd96884a86c70f2d8c2db0160a->leave($__internal_18d029a1d713b573c156ee37ce0de171ab05eadd96884a86c70f2d8c2db0160a_prof);

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
