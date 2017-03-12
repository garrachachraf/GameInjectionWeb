<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_22f6b991aa010fed63171b80bd899e36a343e551de91d76fb60a04e8c05c086c extends Twig_Template
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
        $__internal_c339d2c5988dfde0ca4fedf8ea07d14e6d79794ced93f012c534f38c94b08488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c339d2c5988dfde0ca4fedf8ea07d14e6d79794ced93f012c534f38c94b08488->enter($__internal_c339d2c5988dfde0ca4fedf8ea07d14e6d79794ced93f012c534f38c94b08488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_acec9866047ed4b6dd63f76a7e17955eb1e654df35f7bfeea0173d49bce8bb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acec9866047ed4b6dd63f76a7e17955eb1e654df35f7bfeea0173d49bce8bb49->enter($__internal_acec9866047ed4b6dd63f76a7e17955eb1e654df35f7bfeea0173d49bce8bb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c339d2c5988dfde0ca4fedf8ea07d14e6d79794ced93f012c534f38c94b08488->leave($__internal_c339d2c5988dfde0ca4fedf8ea07d14e6d79794ced93f012c534f38c94b08488_prof);

        
        $__internal_acec9866047ed4b6dd63f76a7e17955eb1e654df35f7bfeea0173d49bce8bb49->leave($__internal_acec9866047ed4b6dd63f76a7e17955eb1e654df35f7bfeea0173d49bce8bb49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
