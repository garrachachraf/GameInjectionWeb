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
        $__internal_b6464e6cd02c4b1373611fda55f51ed069ad5c9b06d613ad4928d429174b9b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6464e6cd02c4b1373611fda55f51ed069ad5c9b06d613ad4928d429174b9b16->enter($__internal_b6464e6cd02c4b1373611fda55f51ed069ad5c9b06d613ad4928d429174b9b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4ca62c8c638b12bafbaadff80ed7afabdd623f206c46807f6addcb92267fc2e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca62c8c638b12bafbaadff80ed7afabdd623f206c46807f6addcb92267fc2e6->enter($__internal_4ca62c8c638b12bafbaadff80ed7afabdd623f206c46807f6addcb92267fc2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b6464e6cd02c4b1373611fda55f51ed069ad5c9b06d613ad4928d429174b9b16->leave($__internal_b6464e6cd02c4b1373611fda55f51ed069ad5c9b06d613ad4928d429174b9b16_prof);

        
        $__internal_4ca62c8c638b12bafbaadff80ed7afabdd623f206c46807f6addcb92267fc2e6->leave($__internal_4ca62c8c638b12bafbaadff80ed7afabdd623f206c46807f6addcb92267fc2e6_prof);

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
