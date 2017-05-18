<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b5d5ce6b0931bcf5318b551e184ba3a1064176f3f43174543e0a2f12bd42e856 extends Twig_Template
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
        $__internal_6f9f2fb3d93798416639d445b3ba7ebcb384b08c5b7424c02e310f89c1e0bb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9f2fb3d93798416639d445b3ba7ebcb384b08c5b7424c02e310f89c1e0bb1b->enter($__internal_6f9f2fb3d93798416639d445b3ba7ebcb384b08c5b7424c02e310f89c1e0bb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8dccb3ceffb6b28ca1ec06999b660a6a270da431517abeafa096828deec208c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dccb3ceffb6b28ca1ec06999b660a6a270da431517abeafa096828deec208c2->enter($__internal_8dccb3ceffb6b28ca1ec06999b660a6a270da431517abeafa096828deec208c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6f9f2fb3d93798416639d445b3ba7ebcb384b08c5b7424c02e310f89c1e0bb1b->leave($__internal_6f9f2fb3d93798416639d445b3ba7ebcb384b08c5b7424c02e310f89c1e0bb1b_prof);

        
        $__internal_8dccb3ceffb6b28ca1ec06999b660a6a270da431517abeafa096828deec208c2->leave($__internal_8dccb3ceffb6b28ca1ec06999b660a6a270da431517abeafa096828deec208c2_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
