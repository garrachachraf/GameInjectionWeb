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
        $__internal_8b3b1ca066fd05bbfefa5cbe39ef58c3efada674619cae1c9286fcba966ebb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3b1ca066fd05bbfefa5cbe39ef58c3efada674619cae1c9286fcba966ebb0c->enter($__internal_8b3b1ca066fd05bbfefa5cbe39ef58c3efada674619cae1c9286fcba966ebb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        $__internal_7e4d21b00affffaf9e6068cbcb46d2da92d043c0a1ae9d622a9f4b9d47026d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4d21b00affffaf9e6068cbcb46d2da92d043c0a1ae9d622a9f4b9d47026d1a->enter($__internal_7e4d21b00affffaf9e6068cbcb46d2da92d043c0a1ae9d622a9f4b9d47026d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Buttons:pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8b3b1ca066fd05bbfefa5cbe39ef58c3efada674619cae1c9286fcba966ebb0c->leave($__internal_8b3b1ca066fd05bbfefa5cbe39ef58c3efada674619cae1c9286fcba966ebb0c_prof);

        
        $__internal_7e4d21b00affffaf9e6068cbcb46d2da92d043c0a1ae9d622a9f4b9d47026d1a->leave($__internal_7e4d21b00affffaf9e6068cbcb46d2da92d043c0a1ae9d622a9f4b9d47026d1a_prof);

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
