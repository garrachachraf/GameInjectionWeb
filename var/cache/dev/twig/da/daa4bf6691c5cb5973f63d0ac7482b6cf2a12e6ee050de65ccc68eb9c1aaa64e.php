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
        $__internal_331cc9615ac0dc506f4a6225670fbd069b96bfb84ddf1daebe2ef150d19e7f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331cc9615ac0dc506f4a6225670fbd069b96bfb84ddf1daebe2ef150d19e7f08->enter($__internal_331cc9615ac0dc506f4a6225670fbd069b96bfb84ddf1daebe2ef150d19e7f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $__internal_1b75ab146ae3d97d5447714260d408d89766557b97822a111ac169801ce73704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b75ab146ae3d97d5447714260d408d89766557b97822a111ac169801ce73704->enter($__internal_1b75ab146ae3d97d5447714260d408d89766557b97822a111ac169801ce73704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EloboostedFrontoffice/participation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331cc9615ac0dc506f4a6225670fbd069b96bfb84ddf1daebe2ef150d19e7f08->leave($__internal_331cc9615ac0dc506f4a6225670fbd069b96bfb84ddf1daebe2ef150d19e7f08_prof);

        
        $__internal_1b75ab146ae3d97d5447714260d408d89766557b97822a111ac169801ce73704->leave($__internal_1b75ab146ae3d97d5447714260d408d89766557b97822a111ac169801ce73704_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafab7b1786f643083837c21fd4a4ca57384b6feda4c4700377ba70d8799e266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafab7b1786f643083837c21fd4a4ca57384b6feda4c4700377ba70d8799e266->enter($__internal_fafab7b1786f643083837c21fd4a4ca57384b6feda4c4700377ba70d8799e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89bce0addc111e4fb219bc91c4ff99a0f8bc588524f3ff92329e80d2e6cb7d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bce0addc111e4fb219bc91c4ff99a0f8bc588524f3ff92329e80d2e6cb7d36->enter($__internal_89bce0addc111e4fb219bc91c4ff99a0f8bc588524f3ff92329e80d2e6cb7d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89bce0addc111e4fb219bc91c4ff99a0f8bc588524f3ff92329e80d2e6cb7d36->leave($__internal_89bce0addc111e4fb219bc91c4ff99a0f8bc588524f3ff92329e80d2e6cb7d36_prof);

        
        $__internal_fafab7b1786f643083837c21fd4a4ca57384b6feda4c4700377ba70d8799e266->leave($__internal_fafab7b1786f643083837c21fd4a4ca57384b6feda4c4700377ba70d8799e266_prof);

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
