<?php

/* games/edit.html.twig */
class __TwigTemplate_919969b521c69f51d49e1b81bcaf59ba320257a36729fa356ba93ead47a96393 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "games/edit.html.twig", 1);
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
        $__internal_1a188ee695471c0ddc6531ff1038fed871bd959be5ef9bedccf147b799faa255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a188ee695471c0ddc6531ff1038fed871bd959be5ef9bedccf147b799faa255->enter($__internal_1a188ee695471c0ddc6531ff1038fed871bd959be5ef9bedccf147b799faa255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $__internal_e0320255342edd528116063af72b02e3e3bdfea741d1280bf8cbceea44b100cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0320255342edd528116063af72b02e3e3bdfea741d1280bf8cbceea44b100cd->enter($__internal_e0320255342edd528116063af72b02e3e3bdfea741d1280bf8cbceea44b100cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a188ee695471c0ddc6531ff1038fed871bd959be5ef9bedccf147b799faa255->leave($__internal_1a188ee695471c0ddc6531ff1038fed871bd959be5ef9bedccf147b799faa255_prof);

        
        $__internal_e0320255342edd528116063af72b02e3e3bdfea741d1280bf8cbceea44b100cd->leave($__internal_e0320255342edd528116063af72b02e3e3bdfea741d1280bf8cbceea44b100cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f4d01068a52f58a85c20c50b966675d26c0b59cd5f18e134e8cb4cc605939af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4d01068a52f58a85c20c50b966675d26c0b59cd5f18e134e8cb4cc605939af->enter($__internal_0f4d01068a52f58a85c20c50b966675d26c0b59cd5f18e134e8cb4cc605939af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b99ff6ed94abeb794ea657274111902fb9833131cba2de5698ec71baebb8a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b99ff6ed94abeb794ea657274111902fb9833131cba2de5698ec71baebb8a6d->enter($__internal_6b99ff6ed94abeb794ea657274111902fb9833131cba2de5698ec71baebb8a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b99ff6ed94abeb794ea657274111902fb9833131cba2de5698ec71baebb8a6d->leave($__internal_6b99ff6ed94abeb794ea657274111902fb9833131cba2de5698ec71baebb8a6d_prof);

        
        $__internal_0f4d01068a52f58a85c20c50b966675d26c0b59cd5f18e134e8cb4cc605939af->leave($__internal_0f4d01068a52f58a85c20c50b966675d26c0b59cd5f18e134e8cb4cc605939af_prof);

    }

    public function getTemplateName()
    {
        return "games/edit.html.twig";
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
", "games/edit.html.twig", "C:\\wamp64\\www\\testmerge\\app\\Resources\\views\\games\\edit.html.twig");
    }
}
