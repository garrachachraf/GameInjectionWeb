<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f51c0aae0db50ba48225198c4380051bf858e8783a09f47ebe023147bdeddea5 extends Twig_Template
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
        $__internal_e9308c4d2da1c8d94493a3168b9926e19bf4fbfc1d3ea4d9febc88e7044bd6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9308c4d2da1c8d94493a3168b9926e19bf4fbfc1d3ea4d9febc88e7044bd6c0->enter($__internal_e9308c4d2da1c8d94493a3168b9926e19bf4fbfc1d3ea4d9febc88e7044bd6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6bd2e17fa1df4c112c0256da832dbebc90a372844336e4a570ab32815eb57dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2e17fa1df4c112c0256da832dbebc90a372844336e4a570ab32815eb57dc0->enter($__internal_6bd2e17fa1df4c112c0256da832dbebc90a372844336e4a570ab32815eb57dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e9308c4d2da1c8d94493a3168b9926e19bf4fbfc1d3ea4d9febc88e7044bd6c0->leave($__internal_e9308c4d2da1c8d94493a3168b9926e19bf4fbfc1d3ea4d9febc88e7044bd6c0_prof);

        
        $__internal_6bd2e17fa1df4c112c0256da832dbebc90a372844336e4a570ab32815eb57dc0->leave($__internal_6bd2e17fa1df4c112c0256da832dbebc90a372844336e4a570ab32815eb57dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
