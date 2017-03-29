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
        $__internal_67feeffa4d52c893afa24e75ceb36d1905cbd5c883eb20bf26c3f1d2c29ec8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67feeffa4d52c893afa24e75ceb36d1905cbd5c883eb20bf26c3f1d2c29ec8fa->enter($__internal_67feeffa4d52c893afa24e75ceb36d1905cbd5c883eb20bf26c3f1d2c29ec8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_6a6cb7deb6f5b2b6e19b8eaf01bd59fea44590c7c05ad2866ab7fc3595026dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6cb7deb6f5b2b6e19b8eaf01bd59fea44590c7c05ad2866ab7fc3595026dd5->enter($__internal_6a6cb7deb6f5b2b6e19b8eaf01bd59fea44590c7c05ad2866ab7fc3595026dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_67feeffa4d52c893afa24e75ceb36d1905cbd5c883eb20bf26c3f1d2c29ec8fa->leave($__internal_67feeffa4d52c893afa24e75ceb36d1905cbd5c883eb20bf26c3f1d2c29ec8fa_prof);

        
        $__internal_6a6cb7deb6f5b2b6e19b8eaf01bd59fea44590c7c05ad2866ab7fc3595026dd5->leave($__internal_6a6cb7deb6f5b2b6e19b8eaf01bd59fea44590c7c05ad2866ab7fc3595026dd5_prof);

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
