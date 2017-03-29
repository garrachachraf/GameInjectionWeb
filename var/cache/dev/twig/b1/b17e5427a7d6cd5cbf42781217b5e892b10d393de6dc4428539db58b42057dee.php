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
        $__internal_5df58ac20cadbfd61f5f29b332fdab72637dbc926422c8678c9b429b008e5815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df58ac20cadbfd61f5f29b332fdab72637dbc926422c8678c9b429b008e5815->enter($__internal_5df58ac20cadbfd61f5f29b332fdab72637dbc926422c8678c9b429b008e5815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        $__internal_9a9cd0f37cb5492057f72926921d3a721b083d507d104e4625e856e73704630c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9cd0f37cb5492057f72926921d3a721b083d507d104e4625e856e73704630c->enter($__internal_9a9cd0f37cb5492057f72926921d3a721b083d507d104e4625e856e73704630c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5df58ac20cadbfd61f5f29b332fdab72637dbc926422c8678c9b429b008e5815->leave($__internal_5df58ac20cadbfd61f5f29b332fdab72637dbc926422c8678c9b429b008e5815_prof);

        
        $__internal_9a9cd0f37cb5492057f72926921d3a721b083d507d104e4625e856e73704630c->leave($__internal_9a9cd0f37cb5492057f72926921d3a721b083d507d104e4625e856e73704630c_prof);

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
