<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_0cbd9c888264907070ac7495bccc5f60b10ebd4ca8e75d0e8ad4922427374b86 extends Twig_Template
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
        $__internal_4be8da7e8a965499e8761dd6fedac0648161ebaa120486f35597201a4b2fca68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be8da7e8a965499e8761dd6fedac0648161ebaa120486f35597201a4b2fca68->enter($__internal_4be8da7e8a965499e8761dd6fedac0648161ebaa120486f35597201a4b2fca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_09da920991a0af9c25f84c7a78ad6753fb1123d6d82d7d3f1f632296433b1105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09da920991a0af9c25f84c7a78ad6753fb1123d6d82d7d3f1f632296433b1105->enter($__internal_09da920991a0af9c25f84c7a78ad6753fb1123d6d82d7d3f1f632296433b1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4be8da7e8a965499e8761dd6fedac0648161ebaa120486f35597201a4b2fca68->leave($__internal_4be8da7e8a965499e8761dd6fedac0648161ebaa120486f35597201a4b2fca68_prof);

        
        $__internal_09da920991a0af9c25f84c7a78ad6753fb1123d6d82d7d3f1f632296433b1105->leave($__internal_09da920991a0af9c25f84c7a78ad6753fb1123d6d82d7d3f1f632296433b1105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
