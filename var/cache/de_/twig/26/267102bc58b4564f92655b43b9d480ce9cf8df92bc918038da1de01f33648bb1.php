<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f63acc4bc9ed7cf1e28cfd0f2d6261922a14e300ca9ace6b9056a733a5f79820 extends Twig_Template
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
        $__internal_4da61262211bdd7ca9baa2c6094a5ef082956c785c41173d2aa7c79f257380a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da61262211bdd7ca9baa2c6094a5ef082956c785c41173d2aa7c79f257380a7->enter($__internal_4da61262211bdd7ca9baa2c6094a5ef082956c785c41173d2aa7c79f257380a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_5a71883fa69ec88d16f78fa4fefc3b804589089bbe019e509830d4caa39c6c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a71883fa69ec88d16f78fa4fefc3b804589089bbe019e509830d4caa39c6c24->enter($__internal_5a71883fa69ec88d16f78fa4fefc3b804589089bbe019e509830d4caa39c6c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4da61262211bdd7ca9baa2c6094a5ef082956c785c41173d2aa7c79f257380a7->leave($__internal_4da61262211bdd7ca9baa2c6094a5ef082956c785c41173d2aa7c79f257380a7_prof);

        
        $__internal_5a71883fa69ec88d16f78fa4fefc3b804589089bbe019e509830d4caa39c6c24->leave($__internal_5a71883fa69ec88d16f78fa4fefc3b804589089bbe019e509830d4caa39c6c24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
