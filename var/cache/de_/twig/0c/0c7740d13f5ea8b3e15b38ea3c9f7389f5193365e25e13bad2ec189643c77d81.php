<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_02d24cc7f4ea27c304ae7af21763294d9faa26e23386674a995abc6d55e77901 extends Twig_Template
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
        $__internal_21de2af60f1f971e71b9eae8d5c08af240a490cf1d26a432f0c53251db59079e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21de2af60f1f971e71b9eae8d5c08af240a490cf1d26a432f0c53251db59079e->enter($__internal_21de2af60f1f971e71b9eae8d5c08af240a490cf1d26a432f0c53251db59079e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b866cee3fa84564e245ed06cf2fb4ed353d61489f75279067a678d5198d3ad78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b866cee3fa84564e245ed06cf2fb4ed353d61489f75279067a678d5198d3ad78->enter($__internal_b866cee3fa84564e245ed06cf2fb4ed353d61489f75279067a678d5198d3ad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_21de2af60f1f971e71b9eae8d5c08af240a490cf1d26a432f0c53251db59079e->leave($__internal_21de2af60f1f971e71b9eae8d5c08af240a490cf1d26a432f0c53251db59079e_prof);

        
        $__internal_b866cee3fa84564e245ed06cf2fb4ed353d61489f75279067a678d5198d3ad78->leave($__internal_b866cee3fa84564e245ed06cf2fb4ed353d61489f75279067a678d5198d3ad78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
