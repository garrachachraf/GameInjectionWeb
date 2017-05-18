<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_26b6020d309fca254fb1268a803c7b127b4249d95e7c21b3c1ebff8058245374 extends Twig_Template
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
        $__internal_c715cbb12cd5489c5af86daa6e82c70b259c5baadb8a000c9bcd4b486e9ca904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c715cbb12cd5489c5af86daa6e82c70b259c5baadb8a000c9bcd4b486e9ca904->enter($__internal_c715cbb12cd5489c5af86daa6e82c70b259c5baadb8a000c9bcd4b486e9ca904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_15ee73565791647e11ecfaebb5385086a055e36cdffba27c01a0bce41f1cc177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ee73565791647e11ecfaebb5385086a055e36cdffba27c01a0bce41f1cc177->enter($__internal_15ee73565791647e11ecfaebb5385086a055e36cdffba27c01a0bce41f1cc177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c715cbb12cd5489c5af86daa6e82c70b259c5baadb8a000c9bcd4b486e9ca904->leave($__internal_c715cbb12cd5489c5af86daa6e82c70b259c5baadb8a000c9bcd4b486e9ca904_prof);

        
        $__internal_15ee73565791647e11ecfaebb5385086a055e36cdffba27c01a0bce41f1cc177->leave($__internal_15ee73565791647e11ecfaebb5385086a055e36cdffba27c01a0bce41f1cc177_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
