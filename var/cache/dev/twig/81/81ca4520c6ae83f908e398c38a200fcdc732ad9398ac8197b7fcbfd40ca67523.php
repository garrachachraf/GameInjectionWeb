<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_bd88f0b52cd4cb6ef6a1afebf43fc114053a4041840b67e60cf69877e7002b0a extends Twig_Template
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
        $__internal_6bf496c295f149256d2accad9ed0da12f8a3dc8884e92cba74312428974f0780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf496c295f149256d2accad9ed0da12f8a3dc8884e92cba74312428974f0780->enter($__internal_6bf496c295f149256d2accad9ed0da12f8a3dc8884e92cba74312428974f0780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a0b6fffe643ea9f6a3f0cf3fcc6bc86c17ca2d1f27b288d1cdc84e45e31bf279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b6fffe643ea9f6a3f0cf3fcc6bc86c17ca2d1f27b288d1cdc84e45e31bf279->enter($__internal_a0b6fffe643ea9f6a3f0cf3fcc6bc86c17ca2d1f27b288d1cdc84e45e31bf279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6bf496c295f149256d2accad9ed0da12f8a3dc8884e92cba74312428974f0780->leave($__internal_6bf496c295f149256d2accad9ed0da12f8a3dc8884e92cba74312428974f0780_prof);

        
        $__internal_a0b6fffe643ea9f6a3f0cf3fcc6bc86c17ca2d1f27b288d1cdc84e45e31bf279->leave($__internal_a0b6fffe643ea9f6a3f0cf3fcc6bc86c17ca2d1f27b288d1cdc84e45e31bf279_prof);

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
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
