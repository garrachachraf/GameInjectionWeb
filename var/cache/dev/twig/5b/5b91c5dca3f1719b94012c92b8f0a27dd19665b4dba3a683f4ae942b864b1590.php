<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_d44791a33ee0c6c24a638155b9267fc81af97c8b8d0a789bfde71fe83d48c194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44791a33ee0c6c24a638155b9267fc81af97c8b8d0a789bfde71fe83d48c194->enter($__internal_d44791a33ee0c6c24a638155b9267fc81af97c8b8d0a789bfde71fe83d48c194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_209d5ad9546d5bc30379f6832452833c28e071325f1f572f136557cac6b46084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209d5ad9546d5bc30379f6832452833c28e071325f1f572f136557cac6b46084->enter($__internal_209d5ad9546d5bc30379f6832452833c28e071325f1f572f136557cac6b46084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d44791a33ee0c6c24a638155b9267fc81af97c8b8d0a789bfde71fe83d48c194->leave($__internal_d44791a33ee0c6c24a638155b9267fc81af97c8b8d0a789bfde71fe83d48c194_prof);

        
        $__internal_209d5ad9546d5bc30379f6832452833c28e071325f1f572f136557cac6b46084->leave($__internal_209d5ad9546d5bc30379f6832452833c28e071325f1f572f136557cac6b46084_prof);

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
", "@Framework/Form/search_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
