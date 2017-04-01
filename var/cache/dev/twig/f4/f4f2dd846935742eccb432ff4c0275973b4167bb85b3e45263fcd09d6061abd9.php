<?php

/* @EloboostedFrontoffice/games/edit.html.twig */
class __TwigTemplate_6deb3da844a8aa306e3588e21a2f70152b11037a2ba91d08f433ef536f469ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/games/edit.html.twig", 1);
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
        $__internal_cb8e24f05ff3c6afe7c7d42c1e045bfc1dca161e3e70c1d29df3555ebf2f77a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8e24f05ff3c6afe7c7d42c1e045bfc1dca161e3e70c1d29df3555ebf2f77a6->enter($__internal_cb8e24f05ff3c6afe7c7d42c1e045bfc1dca161e3e70c1d29df3555ebf2f77a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $__internal_6fd29a09fa10e15f57cd5f60d6813723557ae1155b7c41a9db5a27a81eb92918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd29a09fa10e15f57cd5f60d6813723557ae1155b7c41a9db5a27a81eb92918->enter($__internal_6fd29a09fa10e15f57cd5f60d6813723557ae1155b7c41a9db5a27a81eb92918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8e24f05ff3c6afe7c7d42c1e045bfc1dca161e3e70c1d29df3555ebf2f77a6->leave($__internal_cb8e24f05ff3c6afe7c7d42c1e045bfc1dca161e3e70c1d29df3555ebf2f77a6_prof);

        
        $__internal_6fd29a09fa10e15f57cd5f60d6813723557ae1155b7c41a9db5a27a81eb92918->leave($__internal_6fd29a09fa10e15f57cd5f60d6813723557ae1155b7c41a9db5a27a81eb92918_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8c0282276829cb290ef6c66c509a2276775500ca489348d8d924053f631142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8c0282276829cb290ef6c66c509a2276775500ca489348d8d924053f631142->enter($__internal_6e8c0282276829cb290ef6c66c509a2276775500ca489348d8d924053f631142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec74ec0f8bb4f5acb0ab9f0efa491913db15abf6828d7cf698b0e8156874b2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec74ec0f8bb4f5acb0ab9f0efa491913db15abf6828d7cf698b0e8156874b2fd->enter($__internal_ec74ec0f8bb4f5acb0ab9f0efa491913db15abf6828d7cf698b0e8156874b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec74ec0f8bb4f5acb0ab9f0efa491913db15abf6828d7cf698b0e8156874b2fd->leave($__internal_ec74ec0f8bb4f5acb0ab9f0efa491913db15abf6828d7cf698b0e8156874b2fd_prof);

        
        $__internal_6e8c0282276829cb290ef6c66c509a2276775500ca489348d8d924053f631142->leave($__internal_6e8c0282276829cb290ef6c66c509a2276775500ca489348d8d924053f631142_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/games/edit.html.twig";
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
", "@EloboostedFrontoffice/games/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\games\\edit.html.twig");
    }
}
