<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09a84480f5b09e23fc3b379d181aedc9692995c4ce1868e6aa3e41c5eabe9d05 extends Twig_Template
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
        $__internal_be3fde89a0b9e3adca5d3a97898de584f163682ffcee3882d74c7faf9d3013b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3fde89a0b9e3adca5d3a97898de584f163682ffcee3882d74c7faf9d3013b8->enter($__internal_be3fde89a0b9e3adca5d3a97898de584f163682ffcee3882d74c7faf9d3013b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_215bc564fcde13336f175df4801417d2543ad6a6e6a404ebc11582936df2e14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215bc564fcde13336f175df4801417d2543ad6a6e6a404ebc11582936df2e14c->enter($__internal_215bc564fcde13336f175df4801417d2543ad6a6e6a404ebc11582936df2e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_be3fde89a0b9e3adca5d3a97898de584f163682ffcee3882d74c7faf9d3013b8->leave($__internal_be3fde89a0b9e3adca5d3a97898de584f163682ffcee3882d74c7faf9d3013b8_prof);

        
        $__internal_215bc564fcde13336f175df4801417d2543ad6a6e6a404ebc11582936df2e14c->leave($__internal_215bc564fcde13336f175df4801417d2543ad6a6e6a404ebc11582936df2e14c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
