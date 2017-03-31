<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_42769f6a7209ce6fd5df7f2506e72b09292d9df9e99a8a28b9dde6f23adf1a21 extends Twig_Template
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
        $__internal_5e7b6a57cbf93eb7ef6f0e3a78eb7441dadb770407f1c2696f4a72dc606c03a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7b6a57cbf93eb7ef6f0e3a78eb7441dadb770407f1c2696f4a72dc606c03a8->enter($__internal_5e7b6a57cbf93eb7ef6f0e3a78eb7441dadb770407f1c2696f4a72dc606c03a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ff8345c9a38082af99b775da3fcf7e2977ebec95f09b91a3fdc91bb01030cdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8345c9a38082af99b775da3fcf7e2977ebec95f09b91a3fdc91bb01030cdcb->enter($__internal_ff8345c9a38082af99b775da3fcf7e2977ebec95f09b91a3fdc91bb01030cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5e7b6a57cbf93eb7ef6f0e3a78eb7441dadb770407f1c2696f4a72dc606c03a8->leave($__internal_5e7b6a57cbf93eb7ef6f0e3a78eb7441dadb770407f1c2696f4a72dc606c03a8_prof);

        
        $__internal_ff8345c9a38082af99b775da3fcf7e2977ebec95f09b91a3fdc91bb01030cdcb->leave($__internal_ff8345c9a38082af99b775da3fcf7e2977ebec95f09b91a3fdc91bb01030cdcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
