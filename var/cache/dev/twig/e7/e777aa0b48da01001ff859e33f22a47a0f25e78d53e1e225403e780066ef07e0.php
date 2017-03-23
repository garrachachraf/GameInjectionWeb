<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_506aed1c3c76ae671f272d6140f2a633d67582711d01d7600f27b1cbd9d79a78 extends Twig_Template
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
        $__internal_d78761824f587d14c3dc1cfc6e3e7e9852369357da4667af268ad16b50a713b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78761824f587d14c3dc1cfc6e3e7e9852369357da4667af268ad16b50a713b1->enter($__internal_d78761824f587d14c3dc1cfc6e3e7e9852369357da4667af268ad16b50a713b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d69ea719d216ea92edf8d147fa92cff3a4154b84d43025e9e3120a85e4b33d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69ea719d216ea92edf8d147fa92cff3a4154b84d43025e9e3120a85e4b33d32->enter($__internal_d69ea719d216ea92edf8d147fa92cff3a4154b84d43025e9e3120a85e4b33d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d78761824f587d14c3dc1cfc6e3e7e9852369357da4667af268ad16b50a713b1->leave($__internal_d78761824f587d14c3dc1cfc6e3e7e9852369357da4667af268ad16b50a713b1_prof);

        
        $__internal_d69ea719d216ea92edf8d147fa92cff3a4154b84d43025e9e3120a85e4b33d32->leave($__internal_d69ea719d216ea92edf8d147fa92cff3a4154b84d43025e9e3120a85e4b33d32_prof);

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
