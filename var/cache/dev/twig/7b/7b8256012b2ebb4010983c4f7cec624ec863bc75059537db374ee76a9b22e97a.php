<?php

/* EloboostedFrontofficeBundle:games:edit.html.twig */
class __TwigTemplate_cdcfb10c85aefda1cbe2b3d1394f88d381cfc20cdde2f9340d52793fa6af79e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EloboostedFrontofficeBundle:games:edit.html.twig", 1);
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
        $__internal_c6db3ac36a98c83456f76e8bd2c5e51b9ca574bd4b5e8c76e6846acc01a99ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6db3ac36a98c83456f76e8bd2c5e51b9ca574bd4b5e8c76e6846acc01a99ac7->enter($__internal_c6db3ac36a98c83456f76e8bd2c5e51b9ca574bd4b5e8c76e6846acc01a99ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $__internal_8ad67d430cebb98c5724eae2b16598c622fd024f43d5c0b6292fca72b5a2b8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad67d430cebb98c5724eae2b16598c622fd024f43d5c0b6292fca72b5a2b8b8->enter($__internal_8ad67d430cebb98c5724eae2b16598c622fd024f43d5c0b6292fca72b5a2b8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6db3ac36a98c83456f76e8bd2c5e51b9ca574bd4b5e8c76e6846acc01a99ac7->leave($__internal_c6db3ac36a98c83456f76e8bd2c5e51b9ca574bd4b5e8c76e6846acc01a99ac7_prof);

        
        $__internal_8ad67d430cebb98c5724eae2b16598c622fd024f43d5c0b6292fca72b5a2b8b8->leave($__internal_8ad67d430cebb98c5724eae2b16598c622fd024f43d5c0b6292fca72b5a2b8b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7c1e73373b83bb051b6810e7cb6f6723f7d786412c8f82a4622d1a95b6f384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7c1e73373b83bb051b6810e7cb6f6723f7d786412c8f82a4622d1a95b6f384->enter($__internal_9d7c1e73373b83bb051b6810e7cb6f6723f7d786412c8f82a4622d1a95b6f384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a98ba2a7db442c373a371769cb67f6e4a9c9159c9e3feaf972a82de01d73702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a98ba2a7db442c373a371769cb67f6e4a9c9159c9e3feaf972a82de01d73702->enter($__internal_2a98ba2a7db442c373a371769cb67f6e4a9c9159c9e3feaf972a82de01d73702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2a98ba2a7db442c373a371769cb67f6e4a9c9159c9e3feaf972a82de01d73702->leave($__internal_2a98ba2a7db442c373a371769cb67f6e4a9c9159c9e3feaf972a82de01d73702_prof);

        
        $__internal_9d7c1e73373b83bb051b6810e7cb6f6723f7d786412c8f82a4622d1a95b6f384->leave($__internal_9d7c1e73373b83bb051b6810e7cb6f6723f7d786412c8f82a4622d1a95b6f384_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:games:edit.html.twig";
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
    <h1>Game edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('yes_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:games:edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle/Resources/views/games/edit.html.twig");
    }
}
