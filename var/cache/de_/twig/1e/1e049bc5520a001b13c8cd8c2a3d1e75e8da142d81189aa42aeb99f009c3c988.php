<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c056c8a56280ec1e36bb26e6d4aeee590f26b0e947e0ed3576d6230e1125e8b7 extends Twig_Template
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
        $__internal_ae45a7e250401f00fe0a9e3e5712216c0fd50c8445bb7cfbbf879132d91a8741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae45a7e250401f00fe0a9e3e5712216c0fd50c8445bb7cfbbf879132d91a8741->enter($__internal_ae45a7e250401f00fe0a9e3e5712216c0fd50c8445bb7cfbbf879132d91a8741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_ce2c04635264071157af59a8c6f988c21a09620d976a664e3b5c142ac92bba03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2c04635264071157af59a8c6f988c21a09620d976a664e3b5c142ac92bba03->enter($__internal_ce2c04635264071157af59a8c6f988c21a09620d976a664e3b5c142ac92bba03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ae45a7e250401f00fe0a9e3e5712216c0fd50c8445bb7cfbbf879132d91a8741->leave($__internal_ae45a7e250401f00fe0a9e3e5712216c0fd50c8445bb7cfbbf879132d91a8741_prof);

        
        $__internal_ce2c04635264071157af59a8c6f988c21a09620d976a664e3b5c142ac92bba03->leave($__internal_ce2c04635264071157af59a8c6f988c21a09620d976a664e3b5c142ac92bba03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
