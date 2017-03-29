<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_07d6ca50db1b4c8469dc6487ca3087f0e79ba7249e1ebbcf4153b7de1ba68463 extends Twig_Template
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
        $__internal_793e68edcf8393d102ee36548628b9574c0d89e9dbc16e8fe990b39af612cbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793e68edcf8393d102ee36548628b9574c0d89e9dbc16e8fe990b39af612cbd3->enter($__internal_793e68edcf8393d102ee36548628b9574c0d89e9dbc16e8fe990b39af612cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fe5a1a88e7d5cdba2ad7d4d1d6c48c174b3679d2aec8c651e306ec98b7f1b343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5a1a88e7d5cdba2ad7d4d1d6c48c174b3679d2aec8c651e306ec98b7f1b343->enter($__internal_fe5a1a88e7d5cdba2ad7d4d1d6c48c174b3679d2aec8c651e306ec98b7f1b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_793e68edcf8393d102ee36548628b9574c0d89e9dbc16e8fe990b39af612cbd3->leave($__internal_793e68edcf8393d102ee36548628b9574c0d89e9dbc16e8fe990b39af612cbd3_prof);

        
        $__internal_fe5a1a88e7d5cdba2ad7d4d1d6c48c174b3679d2aec8c651e306ec98b7f1b343->leave($__internal_fe5a1a88e7d5cdba2ad7d4d1d6c48c174b3679d2aec8c651e306ec98b7f1b343_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
