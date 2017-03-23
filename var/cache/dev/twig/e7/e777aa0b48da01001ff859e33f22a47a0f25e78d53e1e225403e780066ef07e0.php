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
        $__internal_1f19603acebe38f75fa8b606727085dcf90f14c827ad8aebc2c6f5efd1cb1137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f19603acebe38f75fa8b606727085dcf90f14c827ad8aebc2c6f5efd1cb1137->enter($__internal_1f19603acebe38f75fa8b606727085dcf90f14c827ad8aebc2c6f5efd1cb1137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3c9c5f45e7c0a6b2571e9114e9204ae1f471c33fac324e14682d348787512c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9c5f45e7c0a6b2571e9114e9204ae1f471c33fac324e14682d348787512c92->enter($__internal_3c9c5f45e7c0a6b2571e9114e9204ae1f471c33fac324e14682d348787512c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f19603acebe38f75fa8b606727085dcf90f14c827ad8aebc2c6f5efd1cb1137->leave($__internal_1f19603acebe38f75fa8b606727085dcf90f14c827ad8aebc2c6f5efd1cb1137_prof);

        
        $__internal_3c9c5f45e7c0a6b2571e9114e9204ae1f471c33fac324e14682d348787512c92->leave($__internal_3c9c5f45e7c0a6b2571e9114e9204ae1f471c33fac324e14682d348787512c92_prof);

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
