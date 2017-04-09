<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_19158c101fd1c47bff79a33bddddba9c8ebcdbbbfc0071d8ce31e73e5863b5a2 extends Twig_Template
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
        $__internal_230cc70ee4a37ca4489e6343d4c042b59b827379150391bf146dd803c0ff9d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230cc70ee4a37ca4489e6343d4c042b59b827379150391bf146dd803c0ff9d28->enter($__internal_230cc70ee4a37ca4489e6343d4c042b59b827379150391bf146dd803c0ff9d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9a230573509478e38150fae9f1b48dadb97fb89b9c8834fd57918910f626abe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a230573509478e38150fae9f1b48dadb97fb89b9c8834fd57918910f626abe8->enter($__internal_9a230573509478e38150fae9f1b48dadb97fb89b9c8834fd57918910f626abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_230cc70ee4a37ca4489e6343d4c042b59b827379150391bf146dd803c0ff9d28->leave($__internal_230cc70ee4a37ca4489e6343d4c042b59b827379150391bf146dd803c0ff9d28_prof);

        
        $__internal_9a230573509478e38150fae9f1b48dadb97fb89b9c8834fd57918910f626abe8->leave($__internal_9a230573509478e38150fae9f1b48dadb97fb89b9c8834fd57918910f626abe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
