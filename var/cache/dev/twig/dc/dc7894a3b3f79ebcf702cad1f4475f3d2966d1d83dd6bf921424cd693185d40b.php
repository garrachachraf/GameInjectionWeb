<?php

/* base.html.twig */
class __TwigTemplate_7c8de93789d51c37c9c15448aa19b651df2fbb142d0003c6e02b7beef4307346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfe9be7a1c5d9cd0ef5fb9d5ef3208bfc7bbf403f74cfa5ec505a713ab15582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfe9be7a1c5d9cd0ef5fb9d5ef3208bfc7bbf403f74cfa5ec505a713ab15582->enter($__internal_9cfe9be7a1c5d9cd0ef5fb9d5ef3208bfc7bbf403f74cfa5ec505a713ab15582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_37780f8f8152b05f5787a35ad5ba1c84474e316dac3fcf9f4ea14cad1d519ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37780f8f8152b05f5787a35ad5ba1c84474e316dac3fcf9f4ea14cad1d519ccc->enter($__internal_37780f8f8152b05f5787a35ad5ba1c84474e316dac3fcf9f4ea14cad1d519ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9cfe9be7a1c5d9cd0ef5fb9d5ef3208bfc7bbf403f74cfa5ec505a713ab15582->leave($__internal_9cfe9be7a1c5d9cd0ef5fb9d5ef3208bfc7bbf403f74cfa5ec505a713ab15582_prof);

        
        $__internal_37780f8f8152b05f5787a35ad5ba1c84474e316dac3fcf9f4ea14cad1d519ccc->leave($__internal_37780f8f8152b05f5787a35ad5ba1c84474e316dac3fcf9f4ea14cad1d519ccc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4b75d2350d27dcfe81e18fa42c532290769b33dc0aef8592e39afe2185b988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4b75d2350d27dcfe81e18fa42c532290769b33dc0aef8592e39afe2185b988->enter($__internal_3c4b75d2350d27dcfe81e18fa42c532290769b33dc0aef8592e39afe2185b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47804cca536f4eb6c597ab4481f0e70eb1df0d434ec4e6a208a9c39a59f10998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47804cca536f4eb6c597ab4481f0e70eb1df0d434ec4e6a208a9c39a59f10998->enter($__internal_47804cca536f4eb6c597ab4481f0e70eb1df0d434ec4e6a208a9c39a59f10998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47804cca536f4eb6c597ab4481f0e70eb1df0d434ec4e6a208a9c39a59f10998->leave($__internal_47804cca536f4eb6c597ab4481f0e70eb1df0d434ec4e6a208a9c39a59f10998_prof);

        
        $__internal_3c4b75d2350d27dcfe81e18fa42c532290769b33dc0aef8592e39afe2185b988->leave($__internal_3c4b75d2350d27dcfe81e18fa42c532290769b33dc0aef8592e39afe2185b988_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1ec2e36567176cd7de215d40dc0776d4e3eda4f1e39d9d00417031e97440d2bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec2e36567176cd7de215d40dc0776d4e3eda4f1e39d9d00417031e97440d2bf->enter($__internal_1ec2e36567176cd7de215d40dc0776d4e3eda4f1e39d9d00417031e97440d2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77d707278e828729158e5d42fc92f567813192d0f3c14f301ee43f94aca50405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d707278e828729158e5d42fc92f567813192d0f3c14f301ee43f94aca50405->enter($__internal_77d707278e828729158e5d42fc92f567813192d0f3c14f301ee43f94aca50405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_77d707278e828729158e5d42fc92f567813192d0f3c14f301ee43f94aca50405->leave($__internal_77d707278e828729158e5d42fc92f567813192d0f3c14f301ee43f94aca50405_prof);

        
        $__internal_1ec2e36567176cd7de215d40dc0776d4e3eda4f1e39d9d00417031e97440d2bf->leave($__internal_1ec2e36567176cd7de215d40dc0776d4e3eda4f1e39d9d00417031e97440d2bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b7eca524aa387afc86cf4b7858538411b5adc8b832c0a51fc92a7927d74948b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7eca524aa387afc86cf4b7858538411b5adc8b832c0a51fc92a7927d74948b->enter($__internal_4b7eca524aa387afc86cf4b7858538411b5adc8b832c0a51fc92a7927d74948b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77ba9aed7e07cca22b7485d2abf83565d16bf76ebc6246eb9bb29e75e92e106f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ba9aed7e07cca22b7485d2abf83565d16bf76ebc6246eb9bb29e75e92e106f->enter($__internal_77ba9aed7e07cca22b7485d2abf83565d16bf76ebc6246eb9bb29e75e92e106f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77ba9aed7e07cca22b7485d2abf83565d16bf76ebc6246eb9bb29e75e92e106f->leave($__internal_77ba9aed7e07cca22b7485d2abf83565d16bf76ebc6246eb9bb29e75e92e106f_prof);

        
        $__internal_4b7eca524aa387afc86cf4b7858538411b5adc8b832c0a51fc92a7927d74948b->leave($__internal_4b7eca524aa387afc86cf4b7858538411b5adc8b832c0a51fc92a7927d74948b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ec716b23cb06fdf9dc185c4a0487b23d1e7fa4361748d32531eaec589b1e57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec716b23cb06fdf9dc185c4a0487b23d1e7fa4361748d32531eaec589b1e57e->enter($__internal_2ec716b23cb06fdf9dc185c4a0487b23d1e7fa4361748d32531eaec589b1e57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc43bab76fa658f7036ea044089ad35dff135c471f31e3fae29fc1d086b58c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43bab76fa658f7036ea044089ad35dff135c471f31e3fae29fc1d086b58c40->enter($__internal_bc43bab76fa658f7036ea044089ad35dff135c471f31e3fae29fc1d086b58c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc43bab76fa658f7036ea044089ad35dff135c471f31e3fae29fc1d086b58c40->leave($__internal_bc43bab76fa658f7036ea044089ad35dff135c471f31e3fae29fc1d086b58c40_prof);

        
        $__internal_2ec716b23cb06fdf9dc185c4a0487b23d1e7fa4361748d32531eaec589b1e57e->leave($__internal_2ec716b23cb06fdf9dc185c4a0487b23d1e7fa4361748d32531eaec589b1e57e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\sprintweb\\app\\Resources\\views\\base.html.twig");
    }
}
