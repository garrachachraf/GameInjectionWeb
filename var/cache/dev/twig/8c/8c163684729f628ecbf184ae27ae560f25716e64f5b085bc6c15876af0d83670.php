<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_677e3c5b8c55108bf55f66c6271e8479456463b8fd2673b29b40b2db3a9c232f extends Twig_Template
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
        $__internal_402688f1e5375640ed604fef8670f3fda9f09fb420c665b65c7e3cd04b9bb877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402688f1e5375640ed604fef8670f3fda9f09fb420c665b65c7e3cd04b9bb877->enter($__internal_402688f1e5375640ed604fef8670f3fda9f09fb420c665b65c7e3cd04b9bb877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_3e2944ee53ec92cb690356d16d689a68ceaeb816249e5fe0a0bf13a2980da7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2944ee53ec92cb690356d16d689a68ceaeb816249e5fe0a0bf13a2980da7f0->enter($__internal_3e2944ee53ec92cb690356d16d689a68ceaeb816249e5fe0a0bf13a2980da7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_402688f1e5375640ed604fef8670f3fda9f09fb420c665b65c7e3cd04b9bb877->leave($__internal_402688f1e5375640ed604fef8670f3fda9f09fb420c665b65c7e3cd04b9bb877_prof);

        
        $__internal_3e2944ee53ec92cb690356d16d689a68ceaeb816249e5fe0a0bf13a2980da7f0->leave($__internal_3e2944ee53ec92cb690356d16d689a68ceaeb816249e5fe0a0bf13a2980da7f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
