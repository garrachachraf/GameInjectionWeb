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
        $__internal_5853292b81aa10c3c94a9d1ef51ae8e3dc084346b91c266db8f7e0fe8cb5b91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5853292b81aa10c3c94a9d1ef51ae8e3dc084346b91c266db8f7e0fe8cb5b91e->enter($__internal_5853292b81aa10c3c94a9d1ef51ae8e3dc084346b91c266db8f7e0fe8cb5b91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bf54b840022eae45ba0e733dbe1151c6422b29f50877bf335f634521e591beb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf54b840022eae45ba0e733dbe1151c6422b29f50877bf335f634521e591beb6->enter($__internal_bf54b840022eae45ba0e733dbe1151c6422b29f50877bf335f634521e591beb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5853292b81aa10c3c94a9d1ef51ae8e3dc084346b91c266db8f7e0fe8cb5b91e->leave($__internal_5853292b81aa10c3c94a9d1ef51ae8e3dc084346b91c266db8f7e0fe8cb5b91e_prof);

        
        $__internal_bf54b840022eae45ba0e733dbe1151c6422b29f50877bf335f634521e591beb6->leave($__internal_bf54b840022eae45ba0e733dbe1151c6422b29f50877bf335f634521e591beb6_prof);

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
", "@Framework/Form/search_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
