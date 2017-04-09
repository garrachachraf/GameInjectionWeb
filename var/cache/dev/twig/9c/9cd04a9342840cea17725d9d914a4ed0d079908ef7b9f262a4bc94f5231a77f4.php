<?php

/* @NomayaSocial/Buttons/pinterestButton.html.twig */
class __TwigTemplate_e22041bfa7371d413c148e752f70df1eccbcc6c2028225b92f379d248bd10d4e extends Twig_Template
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
        $__internal_3cb0f1cf50ad5199a316b6e86c904ea812f614da993b6ca3fa462d027c6da9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb0f1cf50ad5199a316b6e86c904ea812f614da993b6ca3fa462d027c6da9c1->enter($__internal_3cb0f1cf50ad5199a316b6e86c904ea812f614da993b6ca3fa462d027c6da9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        $__internal_023667388161652d0a5a0961e725306116af1b0fc65cf0c2b2b7a254a0497f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023667388161652d0a5a0961e725306116af1b0fc65cf0c2b2b7a254a0497f88->enter($__internal_023667388161652d0a5a0961e725306116af1b0fc65cf0c2b2b7a254a0497f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3cb0f1cf50ad5199a316b6e86c904ea812f614da993b6ca3fa462d027c6da9c1->leave($__internal_3cb0f1cf50ad5199a316b6e86c904ea812f614da993b6ca3fa462d027c6da9c1_prof);

        
        $__internal_023667388161652d0a5a0961e725306116af1b0fc65cf0c2b2b7a254a0497f88->leave($__internal_023667388161652d0a5a0961e725306116af1b0fc65cf0c2b2b7a254a0497f88_prof);

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
{% endspaceless %}", "@NomayaSocial/Buttons/pinterestButton.html.twig", "C:\\wamp64\\www\\testmerge\\vendor\\nomaya\\social-bundle\\Nomaya\\SocialBundle\\Resources\\views\\Buttons\\pinterestButton.html.twig");
    }
}
