<?php

/* NomayaSocialBundle:Buttons:pinterestButton.html.twig */
class __TwigTemplate_d125055a0f672c1e702692d3fa1c62a158169dde0645f446db90c159368a0a87 extends Twig_Template
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
        $__internal_4244f9b4ce1c8862b8808f7f1aded3edda65dd911de6869022a1cb6dfc79a7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4244f9b4ce1c8862b8808f7f1aded3edda65dd911de6869022a1cb6dfc79a7d9->enter($__internal_4244f9b4ce1c8862b8808f7f1aded3edda65dd911de6869022a1cb6dfc79a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_934b97b2ab1e94b95d885c96a8379d873421d6948ca4e36f54f0b707ceec0c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934b97b2ab1e94b95d885c96a8379d873421d6948ca4e36f54f0b707ceec0c24->enter($__internal_934b97b2ab1e94b95d885c96a8379d873421d6948ca4e36f54f0b707ceec0c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4244f9b4ce1c8862b8808f7f1aded3edda65dd911de6869022a1cb6dfc79a7d9->leave($__internal_4244f9b4ce1c8862b8808f7f1aded3edda65dd911de6869022a1cb6dfc79a7d9_prof);

        
        $__internal_934b97b2ab1e94b95d885c96a8379d873421d6948ca4e36f54f0b707ceec0c24->leave($__internal_934b97b2ab1e94b95d885c96a8379d873421d6948ca4e36f54f0b707ceec0c24_prof);

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
