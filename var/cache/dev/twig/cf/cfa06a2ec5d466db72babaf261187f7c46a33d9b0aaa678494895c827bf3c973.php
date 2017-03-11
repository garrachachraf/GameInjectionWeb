<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_6d6eb860aa1d0cbd72eeb1fce09a55e0c6764b76874020318a99872821c3f4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6eb860aa1d0cbd72eeb1fce09a55e0c6764b76874020318a99872821c3f4a7->enter($__internal_6d6eb860aa1d0cbd72eeb1fce09a55e0c6764b76874020318a99872821c3f4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_35d3b99c953fe134d0daf55ddcaa0d47e764f04b431d7418f3a863f11b622238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3b99c953fe134d0daf55ddcaa0d47e764f04b431d7418f3a863f11b622238->enter($__internal_35d3b99c953fe134d0daf55ddcaa0d47e764f04b431d7418f3a863f11b622238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6d6eb860aa1d0cbd72eeb1fce09a55e0c6764b76874020318a99872821c3f4a7->leave($__internal_6d6eb860aa1d0cbd72eeb1fce09a55e0c6764b76874020318a99872821c3f4a7_prof);

        
        $__internal_35d3b99c953fe134d0daf55ddcaa0d47e764f04b431d7418f3a863f11b622238->leave($__internal_35d3b99c953fe134d0daf55ddcaa0d47e764f04b431d7418f3a863f11b622238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
