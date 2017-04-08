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
        $__internal_6b7d50a54d8a6a1dd4e7d3182172dc6321c149d4c565d6759ccee9870e3a7988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7d50a54d8a6a1dd4e7d3182172dc6321c149d4c565d6759ccee9870e3a7988->enter($__internal_6b7d50a54d8a6a1dd4e7d3182172dc6321c149d4c565d6759ccee9870e3a7988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8dedd5bfe8c11b70915ebf9776cef749bab5fd595fd97c450f642e70bb0e4890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dedd5bfe8c11b70915ebf9776cef749bab5fd595fd97c450f642e70bb0e4890->enter($__internal_8dedd5bfe8c11b70915ebf9776cef749bab5fd595fd97c450f642e70bb0e4890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6b7d50a54d8a6a1dd4e7d3182172dc6321c149d4c565d6759ccee9870e3a7988->leave($__internal_6b7d50a54d8a6a1dd4e7d3182172dc6321c149d4c565d6759ccee9870e3a7988_prof);

        
        $__internal_8dedd5bfe8c11b70915ebf9776cef749bab5fd595fd97c450f642e70bb0e4890->leave($__internal_8dedd5bfe8c11b70915ebf9776cef749bab5fd595fd97c450f642e70bb0e4890_prof);

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
