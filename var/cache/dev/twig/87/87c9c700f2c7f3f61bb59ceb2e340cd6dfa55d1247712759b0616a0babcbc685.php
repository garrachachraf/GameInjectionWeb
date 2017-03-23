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
        $__internal_b6505f0319509ae86bec7afa3eab57f547eff9903eeaf27069321a53e0ffc8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6505f0319509ae86bec7afa3eab57f547eff9903eeaf27069321a53e0ffc8c5->enter($__internal_b6505f0319509ae86bec7afa3eab57f547eff9903eeaf27069321a53e0ffc8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_babb20df6e677550c940e3c7898e75d08c9495acf9a61f38f650f08db5af19af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babb20df6e677550c940e3c7898e75d08c9495acf9a61f38f650f08db5af19af->enter($__internal_babb20df6e677550c940e3c7898e75d08c9495acf9a61f38f650f08db5af19af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b6505f0319509ae86bec7afa3eab57f547eff9903eeaf27069321a53e0ffc8c5->leave($__internal_b6505f0319509ae86bec7afa3eab57f547eff9903eeaf27069321a53e0ffc8c5_prof);

        
        $__internal_babb20df6e677550c940e3c7898e75d08c9495acf9a61f38f650f08db5af19af->leave($__internal_babb20df6e677550c940e3c7898e75d08c9495acf9a61f38f650f08db5af19af_prof);

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
