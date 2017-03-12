<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
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
        $__internal_bce1b540c8a7ffc35dc0a7280d82c2a97658c0fdedaaedf36103046965951163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce1b540c8a7ffc35dc0a7280d82c2a97658c0fdedaaedf36103046965951163->enter($__internal_bce1b540c8a7ffc35dc0a7280d82c2a97658c0fdedaaedf36103046965951163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_feb9308f2a87d3782eb9133f4234a83367b5fbc3a747db19b51ccd91b8ff90fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb9308f2a87d3782eb9133f4234a83367b5fbc3a747db19b51ccd91b8ff90fa->enter($__internal_feb9308f2a87d3782eb9133f4234a83367b5fbc3a747db19b51ccd91b8ff90fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bce1b540c8a7ffc35dc0a7280d82c2a97658c0fdedaaedf36103046965951163->leave($__internal_bce1b540c8a7ffc35dc0a7280d82c2a97658c0fdedaaedf36103046965951163_prof);

        
        $__internal_feb9308f2a87d3782eb9133f4234a83367b5fbc3a747db19b51ccd91b8ff90fa->leave($__internal_feb9308f2a87d3782eb9133f4234a83367b5fbc3a747db19b51ccd91b8ff90fa_prof);

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
", "@Framework/Form/attributes.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
