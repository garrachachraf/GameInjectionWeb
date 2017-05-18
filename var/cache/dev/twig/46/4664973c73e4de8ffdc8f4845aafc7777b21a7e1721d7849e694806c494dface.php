<?php

/* EloboostedFrontofficeBundle:participation:edit.html.twig */
class __TwigTemplate_6bd67abce832c0d9612e5b609d698136714dcffd22c70f62e43b88ce5895afaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:participation:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf078ffd3387f50e76f1350f0f8183a7618a5a00c6180884b8d38a81f14197d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf078ffd3387f50e76f1350f0f8183a7618a5a00c6180884b8d38a81f14197d->enter($__internal_dbf078ffd3387f50e76f1350f0f8183a7618a5a00c6180884b8d38a81f14197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $__internal_6793c730248833d83de8ad17c020b17d175929e092f123e5ca3e0ca997d63049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6793c730248833d83de8ad17c020b17d175929e092f123e5ca3e0ca997d63049->enter($__internal_6793c730248833d83de8ad17c020b17d175929e092f123e5ca3e0ca997d63049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:participation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf078ffd3387f50e76f1350f0f8183a7618a5a00c6180884b8d38a81f14197d->leave($__internal_dbf078ffd3387f50e76f1350f0f8183a7618a5a00c6180884b8d38a81f14197d_prof);

        
        $__internal_6793c730248833d83de8ad17c020b17d175929e092f123e5ca3e0ca997d63049->leave($__internal_6793c730248833d83de8ad17c020b17d175929e092f123e5ca3e0ca997d63049_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed682961115f9393f44295d71e50b0aa65456597423a2fac02f44ee51bfb9aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed682961115f9393f44295d71e50b0aa65456597423a2fac02f44ee51bfb9aa4->enter($__internal_ed682961115f9393f44295d71e50b0aa65456597423a2fac02f44ee51bfb9aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcb62cd2ffd1cb710cdab74c6cceece49f5af5a47a576069e35e808367755a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb62cd2ffd1cb710cdab74c6cceece49f5af5a47a576069e35e808367755a5f->enter($__internal_bcb62cd2ffd1cb710cdab74c6cceece49f5af5a47a576069e35e808367755a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bcb62cd2ffd1cb710cdab74c6cceece49f5af5a47a576069e35e808367755a5f->leave($__internal_bcb62cd2ffd1cb710cdab74c6cceece49f5af5a47a576069e35e808367755a5f_prof);

        
        $__internal_ed682961115f9393f44295d71e50b0aa65456597423a2fac02f44ee51bfb9aa4->leave($__internal_ed682961115f9393f44295d71e50b0aa65456597423a2fac02f44ee51bfb9aa4_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:participation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Participation edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:participation:edit.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/FrontofficeBundle/Resources/views/participation/edit.html.twig");
    }
}
