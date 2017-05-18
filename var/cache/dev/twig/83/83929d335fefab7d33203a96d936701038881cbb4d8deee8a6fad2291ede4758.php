<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_52c18cacb368b1d71c2521cf947029b6b171598843c3c1f2cdbd7ee503ae7dd5 extends Twig_Template
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
        $__internal_6bb5ee0e7d53636202c32aa7a46d292fe938db8c781a7ef33989cdcabf850a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb5ee0e7d53636202c32aa7a46d292fe938db8c781a7ef33989cdcabf850a8a->enter($__internal_6bb5ee0e7d53636202c32aa7a46d292fe938db8c781a7ef33989cdcabf850a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f77ac73f3a6cd27248c59c915fc9d7bd8ed0780fd6c3ba1dc35ae40e9e6d4b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77ac73f3a6cd27248c59c915fc9d7bd8ed0780fd6c3ba1dc35ae40e9e6d4b22->enter($__internal_f77ac73f3a6cd27248c59c915fc9d7bd8ed0780fd6c3ba1dc35ae40e9e6d4b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6bb5ee0e7d53636202c32aa7a46d292fe938db8c781a7ef33989cdcabf850a8a->leave($__internal_6bb5ee0e7d53636202c32aa7a46d292fe938db8c781a7ef33989cdcabf850a8a_prof);

        
        $__internal_f77ac73f3a6cd27248c59c915fc9d7bd8ed0780fd6c3ba1dc35ae40e9e6d4b22->leave($__internal_f77ac73f3a6cd27248c59c915fc9d7bd8ed0780fd6c3ba1dc35ae40e9e6d4b22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
