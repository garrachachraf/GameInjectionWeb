<?php

/* @EloboostedFrontoffice/tournoi/edit.html.twig */
class __TwigTemplate_e2f02b43ce54e18b51d3b4a68bafa08dd71c06401d4b3d365222dea48db6cfab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedFrontofficeBundle:Default:Layout.html.twig", "@EloboostedFrontoffice/tournoi/edit.html.twig", 1);
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
        $__internal_aebe632672fc0e1806d20d15e9afdadad78c71b8801f7744e20124bd14026e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebe632672fc0e1806d20d15e9afdadad78c71b8801f7744e20124bd14026e87->enter($__internal_aebe632672fc0e1806d20d15e9afdadad78c71b8801f7744e20124bd14026e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $__internal_3a89783fa18f573c9a91a924aca8e3d4c105e92e7f2d92e83f4b797ca91583b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89783fa18f573c9a91a924aca8e3d4c105e92e7f2d92e83f4b797ca91583b2->enter($__internal_3a89783fa18f573c9a91a924aca8e3d4c105e92e7f2d92e83f4b797ca91583b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/tournoi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebe632672fc0e1806d20d15e9afdadad78c71b8801f7744e20124bd14026e87->leave($__internal_aebe632672fc0e1806d20d15e9afdadad78c71b8801f7744e20124bd14026e87_prof);

        
        $__internal_3a89783fa18f573c9a91a924aca8e3d4c105e92e7f2d92e83f4b797ca91583b2->leave($__internal_3a89783fa18f573c9a91a924aca8e3d4c105e92e7f2d92e83f4b797ca91583b2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1018e35f4c97b112f17221f2f1310c285f27e99010bff190f5af1b2ae8cc82c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1018e35f4c97b112f17221f2f1310c285f27e99010bff190f5af1b2ae8cc82c4->enter($__internal_1018e35f4c97b112f17221f2f1310c285f27e99010bff190f5af1b2ae8cc82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_0559d3410bed6419abd95986a37c7826014daea321cfcf7bbb99e77b4785ead5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0559d3410bed6419abd95986a37c7826014daea321cfcf7bbb99e77b4785ead5->enter($__internal_0559d3410bed6419abd95986a37c7826014daea321cfcf7bbb99e77b4785ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_0559d3410bed6419abd95986a37c7826014daea321cfcf7bbb99e77b4785ead5->leave($__internal_0559d3410bed6419abd95986a37c7826014daea321cfcf7bbb99e77b4785ead5_prof);

        
        $__internal_1018e35f4c97b112f17221f2f1310c285f27e99010bff190f5af1b2ae8cc82c4->leave($__internal_1018e35f4c97b112f17221f2f1310c285f27e99010bff190f5af1b2ae8cc82c4_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/tournoi/edit.html.twig";
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
", "@EloboostedFrontoffice/tournoi/edit.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\tournoi\\edit.html.twig");
    }
}
