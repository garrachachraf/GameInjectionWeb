<?php

/* games/edit.html.twig */
class __TwigTemplate_9037ec70d1e6eea98283315449d2644a3aad2375a5fe9bd3d05f6412a9e114dd extends Twig_Template
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
        $__internal_bfa70f043ef7c9711b4f5f0087b1967d1221d8e0d13dc41d1063ec91f7842b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa70f043ef7c9711b4f5f0087b1967d1221d8e0d13dc41d1063ec91f7842b1d->enter($__internal_bfa70f043ef7c9711b4f5f0087b1967d1221d8e0d13dc41d1063ec91f7842b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $__internal_4c606a2ced9490a7a7b4924f936c5ffd7e8d77e919e411d97c032309ed4a3eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c606a2ced9490a7a7b4924f936c5ffd7e8d77e919e411d97c032309ed4a3eb8->enter($__internal_4c606a2ced9490a7a7b4924f936c5ffd7e8d77e919e411d97c032309ed4a3eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "games/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfa70f043ef7c9711b4f5f0087b1967d1221d8e0d13dc41d1063ec91f7842b1d->leave($__internal_bfa70f043ef7c9711b4f5f0087b1967d1221d8e0d13dc41d1063ec91f7842b1d_prof);

        
        $__internal_4c606a2ced9490a7a7b4924f936c5ffd7e8d77e919e411d97c032309ed4a3eb8->leave($__internal_4c606a2ced9490a7a7b4924f936c5ffd7e8d77e919e411d97c032309ed4a3eb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b64c151663662e363b0fbb6052d908768797f53235b597ace2883469c9630d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b64c151663662e363b0fbb6052d908768797f53235b597ace2883469c9630d->enter($__internal_54b64c151663662e363b0fbb6052d908768797f53235b597ace2883469c9630d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01d2d465e3b7ee057bd03870c42e07224f4f4529738cbe66050bf650a8c833d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d2d465e3b7ee057bd03870c42e07224f4f4529738cbe66050bf650a8c833d5->enter($__internal_01d2d465e3b7ee057bd03870c42e07224f4f4529738cbe66050bf650a8c833d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_01d2d465e3b7ee057bd03870c42e07224f4f4529738cbe66050bf650a8c833d5->leave($__internal_01d2d465e3b7ee057bd03870c42e07224f4f4529738cbe66050bf650a8c833d5_prof);

        
        $__internal_54b64c151663662e363b0fbb6052d908768797f53235b597ace2883469c9630d->leave($__internal_54b64c151663662e363b0fbb6052d908768797f53235b597ace2883469c9630d_prof);

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
", "games/edit.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\games\\edit.html.twig");
    }
}
