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
        $__internal_4f05c50f05914a6351e9261c0e2f0ba6d75c1351ec1e0013d47194f366a15eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f05c50f05914a6351e9261c0e2f0ba6d75c1351ec1e0013d47194f366a15eed->enter($__internal_4f05c50f05914a6351e9261c0e2f0ba6d75c1351ec1e0013d47194f366a15eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_087eb35eb5f0a6e1f2e68d146823b8ae798d2b9853594877bd3746eb5b6fc889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087eb35eb5f0a6e1f2e68d146823b8ae798d2b9853594877bd3746eb5b6fc889->enter($__internal_087eb35eb5f0a6e1f2e68d146823b8ae798d2b9853594877bd3746eb5b6fc889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4f05c50f05914a6351e9261c0e2f0ba6d75c1351ec1e0013d47194f366a15eed->leave($__internal_4f05c50f05914a6351e9261c0e2f0ba6d75c1351ec1e0013d47194f366a15eed_prof);

        
        $__internal_087eb35eb5f0a6e1f2e68d146823b8ae798d2b9853594877bd3746eb5b6fc889->leave($__internal_087eb35eb5f0a6e1f2e68d146823b8ae798d2b9853594877bd3746eb5b6fc889_prof);

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
", "@Framework/Form/form_rows.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
