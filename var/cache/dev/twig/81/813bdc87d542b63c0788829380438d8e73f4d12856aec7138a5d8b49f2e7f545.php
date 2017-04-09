<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_cc1fe90076d468c92c9535babec9eb87d07f7229ca7a9d9ee1ea2e94434a1e7d extends Twig_Template
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
        $__internal_35c955047103dce31cf8882bb771c91a4bbb626ac4cfdf0fe7859260aef67dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c955047103dce31cf8882bb771c91a4bbb626ac4cfdf0fe7859260aef67dd9->enter($__internal_35c955047103dce31cf8882bb771c91a4bbb626ac4cfdf0fe7859260aef67dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_df9f0dea9a57ffea52222a13d62e3b3521e5ee1ef9124bcf2fd0d3717b1b4f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9f0dea9a57ffea52222a13d62e3b3521e5ee1ef9124bcf2fd0d3717b1b4f86->enter($__internal_df9f0dea9a57ffea52222a13d62e3b3521e5ee1ef9124bcf2fd0d3717b1b4f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_35c955047103dce31cf8882bb771c91a4bbb626ac4cfdf0fe7859260aef67dd9->leave($__internal_35c955047103dce31cf8882bb771c91a4bbb626ac4cfdf0fe7859260aef67dd9_prof);

        
        $__internal_df9f0dea9a57ffea52222a13d62e3b3521e5ee1ef9124bcf2fd0d3717b1b4f86->leave($__internal_df9f0dea9a57ffea52222a13d62e3b3521e5ee1ef9124bcf2fd0d3717b1b4f86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
