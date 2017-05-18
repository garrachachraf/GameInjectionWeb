<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f868316c44be12b9c3a28cd2150773a40cd010c97c15f13bd7ff40df28cff46c extends Twig_Template
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
        $__internal_a2a81ae1951379647d2842111c091de9e40e2f6b19a866147326be8082654225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a81ae1951379647d2842111c091de9e40e2f6b19a866147326be8082654225->enter($__internal_a2a81ae1951379647d2842111c091de9e40e2f6b19a866147326be8082654225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2a8c8ead46c950a412799afa197d0fc031733efb240971c9365e8461edf13a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8c8ead46c950a412799afa197d0fc031733efb240971c9365e8461edf13a2b->enter($__internal_2a8c8ead46c950a412799afa197d0fc031733efb240971c9365e8461edf13a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a2a81ae1951379647d2842111c091de9e40e2f6b19a866147326be8082654225->leave($__internal_a2a81ae1951379647d2842111c091de9e40e2f6b19a866147326be8082654225_prof);

        
        $__internal_2a8c8ead46c950a412799afa197d0fc031733efb240971c9365e8461edf13a2b->leave($__internal_2a8c8ead46c950a412799afa197d0fc031733efb240971c9365e8461edf13a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
