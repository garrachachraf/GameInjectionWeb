<?php

/* @EloboostedFrontoffice/participation/new.html.twig */
class __TwigTemplate_8c1c4fe3a27b67828dcffb874494f7c906fa3947d5a9bd12482d8bdca79f98eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EloboostedFrontoffice/participation/new.html.twig", 1);
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
        $__internal_e034baa89b2c80d74bc86a1fe561b7a9114a65ca6f3325572922373ed1a87766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e034baa89b2c80d74bc86a1fe561b7a9114a65ca6f3325572922373ed1a87766->enter($__internal_e034baa89b2c80d74bc86a1fe561b7a9114a65ca6f3325572922373ed1a87766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $__internal_a03b6463f692f25125ea10bbf97c646512b4526c04f1dde2b3792190b563a69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03b6463f692f25125ea10bbf97c646512b4526c04f1dde2b3792190b563a69d->enter($__internal_a03b6463f692f25125ea10bbf97c646512b4526c04f1dde2b3792190b563a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e034baa89b2c80d74bc86a1fe561b7a9114a65ca6f3325572922373ed1a87766->leave($__internal_e034baa89b2c80d74bc86a1fe561b7a9114a65ca6f3325572922373ed1a87766_prof);

        
        $__internal_a03b6463f692f25125ea10bbf97c646512b4526c04f1dde2b3792190b563a69d->leave($__internal_a03b6463f692f25125ea10bbf97c646512b4526c04f1dde2b3792190b563a69d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8211eca03d27b25ac0337b9cbd07d29e72f68b18650092b3897282efc5e8f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8211eca03d27b25ac0337b9cbd07d29e72f68b18650092b3897282efc5e8f72->enter($__internal_f8211eca03d27b25ac0337b9cbd07d29e72f68b18650092b3897282efc5e8f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26656de6c6e1312ac22368e963394dca3232db84d662b8299a8b5bcc040d6b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26656de6c6e1312ac22368e963394dca3232db84d662b8299a8b5bcc040d6b2d->enter($__internal_26656de6c6e1312ac22368e963394dca3232db84d662b8299a8b5bcc040d6b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Participation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_26656de6c6e1312ac22368e963394dca3232db84d662b8299a8b5bcc040d6b2d->leave($__internal_26656de6c6e1312ac22368e963394dca3232db84d662b8299a8b5bcc040d6b2d_prof);

        
        $__internal_f8211eca03d27b25ac0337b9cbd07d29e72f68b18650092b3897282efc5e8f72->leave($__internal_f8211eca03d27b25ac0337b9cbd07d29e72f68b18650092b3897282efc5e8f72_prof);

    }

    public function getTemplateName()
    {
        return "@EloboostedFrontoffice/participation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Participation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('participation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@EloboostedFrontoffice/participation/new.html.twig", "C:\\wamp\\www\\sprintweb\\src\\Eloboosted\\FrontofficeBundle\\Resources\\views\\participation\\new.html.twig");
    }
}
