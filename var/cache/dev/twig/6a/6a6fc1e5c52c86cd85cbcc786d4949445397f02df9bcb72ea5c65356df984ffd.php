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
        $__internal_28741227f12d1b8aa77fdf3e08f5349f0ae92ea3d1cb2c69f6dc8e18c6ff0a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28741227f12d1b8aa77fdf3e08f5349f0ae92ea3d1cb2c69f6dc8e18c6ff0a1e->enter($__internal_28741227f12d1b8aa77fdf3e08f5349f0ae92ea3d1cb2c69f6dc8e18c6ff0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4e4d4237e0f3e76974a1763e3c2a145c80bc2980cbdfb91698550877b73117cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4d4237e0f3e76974a1763e3c2a145c80bc2980cbdfb91698550877b73117cb->enter($__internal_4e4d4237e0f3e76974a1763e3c2a145c80bc2980cbdfb91698550877b73117cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_28741227f12d1b8aa77fdf3e08f5349f0ae92ea3d1cb2c69f6dc8e18c6ff0a1e->leave($__internal_28741227f12d1b8aa77fdf3e08f5349f0ae92ea3d1cb2c69f6dc8e18c6ff0a1e_prof);

        
        $__internal_4e4d4237e0f3e76974a1763e3c2a145c80bc2980cbdfb91698550877b73117cb->leave($__internal_4e4d4237e0f3e76974a1763e3c2a145c80bc2980cbdfb91698550877b73117cb_prof);

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
