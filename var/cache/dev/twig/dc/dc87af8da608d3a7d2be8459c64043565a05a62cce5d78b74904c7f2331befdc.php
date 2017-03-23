<?php

/* EloboostedFrontofficeBundle:tournoi:edit.html.twig */
class __TwigTemplate_2695f0f645068733a63e4bf22701e5cf4154e6c1a4644d5c064ee0c0cad38635 extends Twig_Template
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
        $__internal_377971b89047555dccf56505e9f7436315d14d736fa43a46260886d1a5ad3172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377971b89047555dccf56505e9f7436315d14d736fa43a46260886d1a5ad3172->enter($__internal_377971b89047555dccf56505e9f7436315d14d736fa43a46260886d1a5ad3172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $__internal_2b61e28e2e2a24688e054e87873e9e3f5a15b6da9b9371151b9d97312bda97df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b61e28e2e2a24688e054e87873e9e3f5a15b6da9b9371151b9d97312bda97df->enter($__internal_2b61e28e2e2a24688e054e87873e9e3f5a15b6da9b9371151b9d97312bda97df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedFrontofficeBundle:tournoi:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377971b89047555dccf56505e9f7436315d14d736fa43a46260886d1a5ad3172->leave($__internal_377971b89047555dccf56505e9f7436315d14d736fa43a46260886d1a5ad3172_prof);

        
        $__internal_2b61e28e2e2a24688e054e87873e9e3f5a15b6da9b9371151b9d97312bda97df->leave($__internal_2b61e28e2e2a24688e054e87873e9e3f5a15b6da9b9371151b9d97312bda97df_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_16009833d3b79b3ecf77f5af78a1e5c6592ad108cc4ad201b20595061446f084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16009833d3b79b3ecf77f5af78a1e5c6592ad108cc4ad201b20595061446f084->enter($__internal_16009833d3b79b3ecf77f5af78a1e5c6592ad108cc4ad201b20595061446f084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_23b53e6f3f3afec448299eb26e240e4c94ac43fd32dd843d79df3ab37190f1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b53e6f3f3afec448299eb26e240e4c94ac43fd32dd843d79df3ab37190f1ee->enter($__internal_23b53e6f3f3afec448299eb26e240e4c94ac43fd32dd843d79df3ab37190f1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_23b53e6f3f3afec448299eb26e240e4c94ac43fd32dd843d79df3ab37190f1ee->leave($__internal_23b53e6f3f3afec448299eb26e240e4c94ac43fd32dd843d79df3ab37190f1ee_prof);

        
        $__internal_16009833d3b79b3ecf77f5af78a1e5c6592ad108cc4ad201b20595061446f084->leave($__internal_16009833d3b79b3ecf77f5af78a1e5c6592ad108cc4ad201b20595061446f084_prof);

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
", "EloboostedFrontofficeBundle:tournoi:edit.html.twig", "/Library/WebServer/Documents/sprintweb3/src/Eloboosted/FrontofficeBundle/Resources/views/tournoi/edit.html.twig");
    }
}
