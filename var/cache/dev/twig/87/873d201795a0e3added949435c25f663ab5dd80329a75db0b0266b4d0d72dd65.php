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
        $__internal_66b7089623472d6c615bcc9064593b41f49b3dd2e3ca471588b54efa65a9b7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b7089623472d6c615bcc9064593b41f49b3dd2e3ca471588b54efa65a9b7fa->enter($__internal_66b7089623472d6c615bcc9064593b41f49b3dd2e3ca471588b54efa65a9b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        $__internal_dbc66108ea2ce1843d295003cecf2958a4d47dd5dde4dcb840ad4b94ca7b926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc66108ea2ce1843d295003cecf2958a4d47dd5dde4dcb840ad4b94ca7b926c->enter($__internal_dbc66108ea2ce1843d295003cecf2958a4d47dd5dde4dcb840ad4b94ca7b926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NomayaSocial/Buttons/pinterestButton.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<a href=\"//fr.pinterest.com/pin/create/button/\" data-pin-do=\"buttonBookmark\"  data-pin-color=\"red\"><img src=\"//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png\" /></a>
<!-- Please call pinit.js only once per page -->
<script type=\"text/javascript\" async src=\"//assets.pinterest.com/js/pinit.js\"></script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_66b7089623472d6c615bcc9064593b41f49b3dd2e3ca471588b54efa65a9b7fa->leave($__internal_66b7089623472d6c615bcc9064593b41f49b3dd2e3ca471588b54efa65a9b7fa_prof);

        
        $__internal_dbc66108ea2ce1843d295003cecf2958a4d47dd5dde4dcb840ad4b94ca7b926c->leave($__internal_dbc66108ea2ce1843d295003cecf2958a4d47dd5dde4dcb840ad4b94ca7b926c_prof);

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
