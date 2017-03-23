<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_99fb6ed4f97b99fde0d0e5a4de58390264f023f90eb5a85ac546a296857a7b69 extends Twig_Template
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
        $__internal_06ac531ee8ba9aeff74b19eae19702c79df506088bae99056d669bab0f4ccba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ac531ee8ba9aeff74b19eae19702c79df506088bae99056d669bab0f4ccba6->enter($__internal_06ac531ee8ba9aeff74b19eae19702c79df506088bae99056d669bab0f4ccba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_628e5aa0ca03494589bbe13b7a69e099fa81937e104b162d531004c0badff610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628e5aa0ca03494589bbe13b7a69e099fa81937e104b162d531004c0badff610->enter($__internal_628e5aa0ca03494589bbe13b7a69e099fa81937e104b162d531004c0badff610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_06ac531ee8ba9aeff74b19eae19702c79df506088bae99056d669bab0f4ccba6->leave($__internal_06ac531ee8ba9aeff74b19eae19702c79df506088bae99056d669bab0f4ccba6_prof);

        
        $__internal_628e5aa0ca03494589bbe13b7a69e099fa81937e104b162d531004c0badff610->leave($__internal_628e5aa0ca03494589bbe13b7a69e099fa81937e104b162d531004c0badff610_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
