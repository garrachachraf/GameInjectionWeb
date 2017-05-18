<?php

/* :games:edit.html.twig */
class __TwigTemplate_7c16bca6a24ced9c4c70160d0b6933f84704c7c707c77ff852114c3ec286212d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":games:edit.html.twig", 1);
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
        $__internal_81275dac1755354ec630f77dd38392efe4683a5544a3b3a4560deec715b35b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81275dac1755354ec630f77dd38392efe4683a5544a3b3a4560deec715b35b81->enter($__internal_81275dac1755354ec630f77dd38392efe4683a5544a3b3a4560deec715b35b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $__internal_dfa0b02508d1a0e30c91d8c6850490f8d534f20079b44947cb85e53ff890212e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa0b02508d1a0e30c91d8c6850490f8d534f20079b44947cb85e53ff890212e->enter($__internal_dfa0b02508d1a0e30c91d8c6850490f8d534f20079b44947cb85e53ff890212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":games:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81275dac1755354ec630f77dd38392efe4683a5544a3b3a4560deec715b35b81->leave($__internal_81275dac1755354ec630f77dd38392efe4683a5544a3b3a4560deec715b35b81_prof);

        
        $__internal_dfa0b02508d1a0e30c91d8c6850490f8d534f20079b44947cb85e53ff890212e->leave($__internal_dfa0b02508d1a0e30c91d8c6850490f8d534f20079b44947cb85e53ff890212e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62372771ac9d913017b6ec469c60bab66c99df312b54dcfaf7a9b24863664299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62372771ac9d913017b6ec469c60bab66c99df312b54dcfaf7a9b24863664299->enter($__internal_62372771ac9d913017b6ec469c60bab66c99df312b54dcfaf7a9b24863664299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33594b468287ee32b5f3d16915f78ffbe817eeaa7f31d67f076f3c00099302e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33594b468287ee32b5f3d16915f78ffbe817eeaa7f31d67f076f3c00099302e9->enter($__internal_33594b468287ee32b5f3d16915f78ffbe817eeaa7f31d67f076f3c00099302e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Game edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("yes_index");
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
        
        $__internal_33594b468287ee32b5f3d16915f78ffbe817eeaa7f31d67f076f3c00099302e9->leave($__internal_33594b468287ee32b5f3d16915f78ffbe817eeaa7f31d67f076f3c00099302e9_prof);

        
        $__internal_62372771ac9d913017b6ec469c60bab66c99df312b54dcfaf7a9b24863664299->leave($__internal_62372771ac9d913017b6ec469c60bab66c99df312b54dcfaf7a9b24863664299_prof);

    }

    public function getTemplateName()
    {
        return ":games:edit.html.twig";
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
", ":games:edit.html.twig", "/Applications/MAMP/htdocs/nn/app/Resources/views/games/edit.html.twig");
    }
}
