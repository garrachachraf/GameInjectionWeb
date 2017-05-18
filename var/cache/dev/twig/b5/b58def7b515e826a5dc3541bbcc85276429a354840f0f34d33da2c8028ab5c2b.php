<?php

/* NomayaSocialBundle:Links:socialLink.html.twig */
class __TwigTemplate_9fca1efa9e86f970d2c899d9b843322e671ec3bafe199bfb49cc6b70e32a87e0 extends Twig_Template
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
        $__internal_e77a8fec399ea1e9a65c96ab734154c73e1fd1597a572abcf5826f46c3f95c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77a8fec399ea1e9a65c96ab734154c73e1fd1597a572abcf5826f46c3f95c43->enter($__internal_e77a8fec399ea1e9a65c96ab734154c73e1fd1597a572abcf5826f46c3f95c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLink.html.twig"));

        $__internal_c6777bea70999e0f0d292c953ded84d492a5b2672d405c9ad5de30dc4814ad2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6777bea70999e0f0d292c953ded84d492a5b2672d405c9ad5de30dc4814ad2d->enter($__internal_c6777bea70999e0f0d292c953ded84d492a5b2672d405c9ad5de30dc4814ad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NomayaSocialBundle:Links:socialLink.html.twig"));

        // line 1
        $context["img_src"] = (((("bundles/nomayasocial/images/" . ($context["theme"] ?? $this->getContext($context, "theme"))) . "/") . ($context["network"] ?? $this->getContext($context, "network"))) . ".png");
        // line 2
        ob_start();
        // line 3
        echo " <div class=\"";
        echo twig_escape_filter($this->env, ($context["network"] ?? $this->getContext($context, "network")), "html", null, true);
        echo "-link col-xs-5\">
 \t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["img_src"] ?? $this->getContext($context, "img_src"))), "html", null, true);
        echo "\" alt =\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" /></a>
 </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e77a8fec399ea1e9a65c96ab734154c73e1fd1597a572abcf5826f46c3f95c43->leave($__internal_e77a8fec399ea1e9a65c96ab734154c73e1fd1597a572abcf5826f46c3f95c43_prof);

        
        $__internal_c6777bea70999e0f0d292c953ded84d492a5b2672d405c9ad5de30dc4814ad2d->leave($__internal_c6777bea70999e0f0d292c953ded84d492a5b2672d405c9ad5de30dc4814ad2d_prof);

    }

    public function getTemplateName()
    {
        return "NomayaSocialBundle:Links:socialLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set img_src = 'bundles/nomayasocial/images/' ~ theme ~ '/' ~ network ~ '.png' %}
{% spaceless %}
 <div class=\"{{ network }}-link col-xs-5\">
 \t<a href=\"{{ url }}\" target=\"_blank\" title=\"{{ url }}\"> <img src=\"{{ asset( img_src ) }}\" alt =\"{{ url }}\" /></a>
 </div>
{% endspaceless %}", "NomayaSocialBundle:Links:socialLink.html.twig", "/Applications/MAMP/htdocs/nn/vendor/nomaya/social-bundle/Nomaya/SocialBundle/Resources/views/Links/socialLink.html.twig");
    }
}
