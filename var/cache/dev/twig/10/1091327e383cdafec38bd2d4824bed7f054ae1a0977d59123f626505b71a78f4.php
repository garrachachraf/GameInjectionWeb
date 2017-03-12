<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af532fd45c90dc18c02268b12b5eb324e68c93d7669b7347f9156860d997db56 extends Twig_Template
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
        $__internal_2aa35072959b61495436a1281da2a5f78acabdbc57db188baee8d09eee2fe447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa35072959b61495436a1281da2a5f78acabdbc57db188baee8d09eee2fe447->enter($__internal_2aa35072959b61495436a1281da2a5f78acabdbc57db188baee8d09eee2fe447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a2c83280a7a7168d36a4d8d73bc5c88e30e7c2045da4b0927497a4d0ff9cf2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c83280a7a7168d36a4d8d73bc5c88e30e7c2045da4b0927497a4d0ff9cf2e2->enter($__internal_a2c83280a7a7168d36a4d8d73bc5c88e30e7c2045da4b0927497a4d0ff9cf2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2aa35072959b61495436a1281da2a5f78acabdbc57db188baee8d09eee2fe447->leave($__internal_2aa35072959b61495436a1281da2a5f78acabdbc57db188baee8d09eee2fe447_prof);

        
        $__internal_a2c83280a7a7168d36a4d8d73bc5c88e30e7c2045da4b0927497a4d0ff9cf2e2->leave($__internal_a2c83280a7a7168d36a4d8d73bc5c88e30e7c2045da4b0927497a4d0ff9cf2e2_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
