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
        $__internal_b58d9120fac450d2075b986fc05d3df3942000a24e9c6b2269f1b78a783b1178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b58d9120fac450d2075b986fc05d3df3942000a24e9c6b2269f1b78a783b1178->enter($__internal_b58d9120fac450d2075b986fc05d3df3942000a24e9c6b2269f1b78a783b1178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_720f2b6cf6c12be1a102e2c6cfaf30deb97a7148e7eda1c7a0720de2df63ea7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720f2b6cf6c12be1a102e2c6cfaf30deb97a7148e7eda1c7a0720de2df63ea7c->enter($__internal_720f2b6cf6c12be1a102e2c6cfaf30deb97a7148e7eda1c7a0720de2df63ea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b58d9120fac450d2075b986fc05d3df3942000a24e9c6b2269f1b78a783b1178->leave($__internal_b58d9120fac450d2075b986fc05d3df3942000a24e9c6b2269f1b78a783b1178_prof);

        
        $__internal_720f2b6cf6c12be1a102e2c6cfaf30deb97a7148e7eda1c7a0720de2df63ea7c->leave($__internal_720f2b6cf6c12be1a102e2c6cfaf30deb97a7148e7eda1c7a0720de2df63ea7c_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
