<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b1c037c5ab5d5c35b527c47c974ce52518c99cf0bdcff6698e9b6fda739d78bd extends Twig_Template
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
        $__internal_c66120a365d031f9d18a764be3c08068535d1684d5173eda8d4b64097d69a5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66120a365d031f9d18a764be3c08068535d1684d5173eda8d4b64097d69a5c1->enter($__internal_c66120a365d031f9d18a764be3c08068535d1684d5173eda8d4b64097d69a5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_584d611d426851b02414c4e58378c23741c214e9ab44eaaa4bc2e5f51614f1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584d611d426851b02414c4e58378c23741c214e9ab44eaaa4bc2e5f51614f1c3->enter($__internal_584d611d426851b02414c4e58378c23741c214e9ab44eaaa4bc2e5f51614f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c66120a365d031f9d18a764be3c08068535d1684d5173eda8d4b64097d69a5c1->leave($__internal_c66120a365d031f9d18a764be3c08068535d1684d5173eda8d4b64097d69a5c1_prof);

        
        $__internal_584d611d426851b02414c4e58378c23741c214e9ab44eaaa4bc2e5f51614f1c3->leave($__internal_584d611d426851b02414c4e58378c23741c214e9ab44eaaa4bc2e5f51614f1c3_prof);

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
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
