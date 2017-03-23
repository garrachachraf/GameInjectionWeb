<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ce4f7a7f22cbf0c83200ff04c5f5106e96782bf8a45b556866e04b41c3470bd9 extends Twig_Template
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
        $__internal_58393061f5add0ce9277066f63d31af0266699b78fcd48f60751569e6cd4d4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58393061f5add0ce9277066f63d31af0266699b78fcd48f60751569e6cd4d4bb->enter($__internal_58393061f5add0ce9277066f63d31af0266699b78fcd48f60751569e6cd4d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_33cbb7aa6663c418a453e27df1f5f3545d9d7562ae9b89e55b74b6014711141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cbb7aa6663c418a453e27df1f5f3545d9d7562ae9b89e55b74b6014711141f->enter($__internal_33cbb7aa6663c418a453e27df1f5f3545d9d7562ae9b89e55b74b6014711141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_58393061f5add0ce9277066f63d31af0266699b78fcd48f60751569e6cd4d4bb->leave($__internal_58393061f5add0ce9277066f63d31af0266699b78fcd48f60751569e6cd4d4bb_prof);

        
        $__internal_33cbb7aa6663c418a453e27df1f5f3545d9d7562ae9b89e55b74b6014711141f->leave($__internal_33cbb7aa6663c418a453e27df1f5f3545d9d7562ae9b89e55b74b6014711141f_prof);

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
