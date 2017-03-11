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
        $__internal_e2be9a433e8996fe7159606a968424ec77c9a0384342147b13a92fa1947164d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2be9a433e8996fe7159606a968424ec77c9a0384342147b13a92fa1947164d0->enter($__internal_e2be9a433e8996fe7159606a968424ec77c9a0384342147b13a92fa1947164d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4ce3db30d3eaa7d2ae1407eea3a67cb0303fd9c19e1568696c75c65e8e480475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce3db30d3eaa7d2ae1407eea3a67cb0303fd9c19e1568696c75c65e8e480475->enter($__internal_4ce3db30d3eaa7d2ae1407eea3a67cb0303fd9c19e1568696c75c65e8e480475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e2be9a433e8996fe7159606a968424ec77c9a0384342147b13a92fa1947164d0->leave($__internal_e2be9a433e8996fe7159606a968424ec77c9a0384342147b13a92fa1947164d0_prof);

        
        $__internal_4ce3db30d3eaa7d2ae1407eea3a67cb0303fd9c19e1568696c75c65e8e480475->leave($__internal_4ce3db30d3eaa7d2ae1407eea3a67cb0303fd9c19e1568696c75c65e8e480475_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
