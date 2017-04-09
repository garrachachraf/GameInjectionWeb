<?php

/* EloboostedFrontofficeBundle:tournoi:edit.html.twig */
class __TwigTemplate_5204ac177055fb4a78786d8993b83ae779a5894c442e25c216ab452e5c93e782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedFrontofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9f5bc33b33206e3a2fecf7faf9977ae5f57594cc9da4320f8be38016a6ac05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9f5bc33b33206e3a2fecf7faf9977ae5f57594cc9da4320f8be38016a6ac05->enter($__internal_8b9f5bc33b33206e3a2fecf7faf9977ae5f57594cc9da4320f8be38016a6ac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $__internal_4bef44fd88eaa68c654013c8ade37a549da4b2ac49c06fffa4036b54b20f637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bef44fd88eaa68c654013c8ade37a549da4b2ac49c06fffa4036b54b20f637b->enter($__internal_4bef44fd88eaa68c654013c8ade37a549da4b2ac49c06fffa4036b54b20f637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9f5bc33b33206e3a2fecf7faf9977ae5f57594cc9da4320f8be38016a6ac05->leave($__internal_8b9f5bc33b33206e3a2fecf7faf9977ae5f57594cc9da4320f8be38016a6ac05_prof);

        
        $__internal_4bef44fd88eaa68c654013c8ade37a549da4b2ac49c06fffa4036b54b20f637b->leave($__internal_4bef44fd88eaa68c654013c8ade37a549da4b2ac49c06fffa4036b54b20f637b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_ef7aefc06a690388e35a659d5c3bf099db0280fafa8aa3604df3c86193b1e60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7aefc06a690388e35a659d5c3bf099db0280fafa8aa3604df3c86193b1e60f->enter($__internal_ef7aefc06a690388e35a659d5c3bf099db0280fafa8aa3604df3c86193b1e60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_096779362e6ac1feb4b72a3e4b6cef0a598e75362abf59727d4b3fb0dc0e9f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096779362e6ac1feb4b72a3e4b6cef0a598e75362abf59727d4b3fb0dc0e9f99->enter($__internal_096779362e6ac1feb4b72a3e4b6cef0a598e75362abf59727d4b3fb0dc0e9f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <h1>Tournoi edit</h1>
    ";
        // line 5
        if ( !(null === (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["erreur"]) ? $context["erreur"] : $this->getContext($context, "erreur")), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tournoi_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_096779362e6ac1feb4b72a3e4b6cef0a598e75362abf59727d4b3fb0dc0e9f99->leave($__internal_096779362e6ac1feb4b72a3e4b6cef0a598e75362abf59727d4b3fb0dc0e9f99_prof);

        
        $__internal_ef7aefc06a690388e35a659d5c3bf099db0280fafa8aa3604df3c86193b1e60f->leave($__internal_ef7aefc06a690388e35a659d5c3bf099db0280fafa8aa3604df3c86193b1e60f_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedFrontofficeBundle:tournoi:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 20,  79 => 17,  72 => 13,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedFrontofficeBundle:Default:Layout.html.twig' %}

{% block main %}
    <h1>Tournoi edit</h1>
    {% if erreur is not null %}
    {{ erreur }}
    {% endif %}
    {{ form_start(edit_form) }}

        {{ form_widget(edit_form) }}

        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('tournoi_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\FrontofficeBundle/Resources/views/tournoi/edit.html.twig");
    }
}
