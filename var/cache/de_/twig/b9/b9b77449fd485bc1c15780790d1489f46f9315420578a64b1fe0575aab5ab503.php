<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_eb537096eddf85d57af54e83415d1df4bde12f64efd6db49c1e4cec53f0b4606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a21b6a0138ff5af0819029983bad6e5405908757eec579ffd77c907a4727dba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21b6a0138ff5af0819029983bad6e5405908757eec579ffd77c907a4727dba2->enter($__internal_a21b6a0138ff5af0819029983bad6e5405908757eec579ffd77c907a4727dba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_97c1b7e2f646990281abe8fc23ffff85e90626a481be8aaa4434dfcf19ab4920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c1b7e2f646990281abe8fc23ffff85e90626a481be8aaa4434dfcf19ab4920->enter($__internal_97c1b7e2f646990281abe8fc23ffff85e90626a481be8aaa4434dfcf19ab4920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a21b6a0138ff5af0819029983bad6e5405908757eec579ffd77c907a4727dba2->leave($__internal_a21b6a0138ff5af0819029983bad6e5405908757eec579ffd77c907a4727dba2_prof);

        
        $__internal_97c1b7e2f646990281abe8fc23ffff85e90626a481be8aaa4434dfcf19ab4920->leave($__internal_97c1b7e2f646990281abe8fc23ffff85e90626a481be8aaa4434dfcf19ab4920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
