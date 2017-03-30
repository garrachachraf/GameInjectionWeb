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
        $__internal_8bca7de551246f52c998ce012ed47876923aa73153f7aac3214fd59584ec31ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bca7de551246f52c998ce012ed47876923aa73153f7aac3214fd59584ec31ba->enter($__internal_8bca7de551246f52c998ce012ed47876923aa73153f7aac3214fd59584ec31ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b8c4467f08af3715ac3c838760e5d8dc870e68fb8430936723f24996bfec81b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c4467f08af3715ac3c838760e5d8dc870e68fb8430936723f24996bfec81b1->enter($__internal_b8c4467f08af3715ac3c838760e5d8dc870e68fb8430936723f24996bfec81b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8bca7de551246f52c998ce012ed47876923aa73153f7aac3214fd59584ec31ba->leave($__internal_8bca7de551246f52c998ce012ed47876923aa73153f7aac3214fd59584ec31ba_prof);

        
        $__internal_b8c4467f08af3715ac3c838760e5d8dc870e68fb8430936723f24996bfec81b1->leave($__internal_b8c4467f08af3715ac3c838760e5d8dc870e68fb8430936723f24996bfec81b1_prof);

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
