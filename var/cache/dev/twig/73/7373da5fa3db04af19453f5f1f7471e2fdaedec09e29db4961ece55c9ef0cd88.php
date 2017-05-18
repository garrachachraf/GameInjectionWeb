<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0959e7d9b0d4f84b800e6f71144be2330475c2e6340d090cdf0d36b5d5996de7 extends Twig_Template
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
        $__internal_5733230fe9fd2a19d2e2a8deee9a9dd920908f8f21efc4f24cd5560cd94c48b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5733230fe9fd2a19d2e2a8deee9a9dd920908f8f21efc4f24cd5560cd94c48b7->enter($__internal_5733230fe9fd2a19d2e2a8deee9a9dd920908f8f21efc4f24cd5560cd94c48b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6fc27413c86e4beafc3dc25d4dd0918bd7f17b0f93ea317cb2e0385847cc841c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc27413c86e4beafc3dc25d4dd0918bd7f17b0f93ea317cb2e0385847cc841c->enter($__internal_6fc27413c86e4beafc3dc25d4dd0918bd7f17b0f93ea317cb2e0385847cc841c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5733230fe9fd2a19d2e2a8deee9a9dd920908f8f21efc4f24cd5560cd94c48b7->leave($__internal_5733230fe9fd2a19d2e2a8deee9a9dd920908f8f21efc4f24cd5560cd94c48b7_prof);

        
        $__internal_6fc27413c86e4beafc3dc25d4dd0918bd7f17b0f93ea317cb2e0385847cc841c->leave($__internal_6fc27413c86e4beafc3dc25d4dd0918bd7f17b0f93ea317cb2e0385847cc841c_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
