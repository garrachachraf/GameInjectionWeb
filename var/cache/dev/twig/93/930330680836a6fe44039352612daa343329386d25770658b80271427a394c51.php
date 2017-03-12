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
        $__internal_7f7c3cd99eced8f3712791b63f3e0d451f5799077780bd0e988104c0c8e8b77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7c3cd99eced8f3712791b63f3e0d451f5799077780bd0e988104c0c8e8b77d->enter($__internal_7f7c3cd99eced8f3712791b63f3e0d451f5799077780bd0e988104c0c8e8b77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_74082180a43d75416f1c446a7874e7509838f8526bfd3061d75a5b02e6932863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74082180a43d75416f1c446a7874e7509838f8526bfd3061d75a5b02e6932863->enter($__internal_74082180a43d75416f1c446a7874e7509838f8526bfd3061d75a5b02e6932863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7f7c3cd99eced8f3712791b63f3e0d451f5799077780bd0e988104c0c8e8b77d->leave($__internal_7f7c3cd99eced8f3712791b63f3e0d451f5799077780bd0e988104c0c8e8b77d_prof);

        
        $__internal_74082180a43d75416f1c446a7874e7509838f8526bfd3061d75a5b02e6932863->leave($__internal_74082180a43d75416f1c446a7874e7509838f8526bfd3061d75a5b02e6932863_prof);

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
