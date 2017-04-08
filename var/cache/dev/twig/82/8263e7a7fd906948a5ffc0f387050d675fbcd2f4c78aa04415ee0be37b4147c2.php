<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7478c1e9f6869828d896fcc77e2c517ed9ad131f94ca0b69df8d57e03f8218cf extends Twig_Template
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
        $__internal_602920a71ea7b1207c0f60c5904d8bbd494ea8ba66c6c30aae2057c49800c17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602920a71ea7b1207c0f60c5904d8bbd494ea8ba66c6c30aae2057c49800c17a->enter($__internal_602920a71ea7b1207c0f60c5904d8bbd494ea8ba66c6c30aae2057c49800c17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e28ad64b685e7dc07d41cd3541b76b2f858efe640d63e36c3b11ac28272e5814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28ad64b685e7dc07d41cd3541b76b2f858efe640d63e36c3b11ac28272e5814->enter($__internal_e28ad64b685e7dc07d41cd3541b76b2f858efe640d63e36c3b11ac28272e5814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_602920a71ea7b1207c0f60c5904d8bbd494ea8ba66c6c30aae2057c49800c17a->leave($__internal_602920a71ea7b1207c0f60c5904d8bbd494ea8ba66c6c30aae2057c49800c17a_prof);

        
        $__internal_e28ad64b685e7dc07d41cd3541b76b2f858efe640d63e36c3b11ac28272e5814->leave($__internal_e28ad64b685e7dc07d41cd3541b76b2f858efe640d63e36c3b11ac28272e5814_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
