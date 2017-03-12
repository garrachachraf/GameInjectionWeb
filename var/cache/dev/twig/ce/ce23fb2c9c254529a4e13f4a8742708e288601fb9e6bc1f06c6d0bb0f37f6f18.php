<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_686020099b23d669e0bcc09c6ad4701c9158106e3299c0ce75f53d0bde018515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686020099b23d669e0bcc09c6ad4701c9158106e3299c0ce75f53d0bde018515->enter($__internal_686020099b23d669e0bcc09c6ad4701c9158106e3299c0ce75f53d0bde018515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5bf539fb0a66a2d058cd4df8d6dadb9f5c62e3047b41f3d876e42d98c767b301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf539fb0a66a2d058cd4df8d6dadb9f5c62e3047b41f3d876e42d98c767b301->enter($__internal_5bf539fb0a66a2d058cd4df8d6dadb9f5c62e3047b41f3d876e42d98c767b301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_686020099b23d669e0bcc09c6ad4701c9158106e3299c0ce75f53d0bde018515->leave($__internal_686020099b23d669e0bcc09c6ad4701c9158106e3299c0ce75f53d0bde018515_prof);

        
        $__internal_5bf539fb0a66a2d058cd4df8d6dadb9f5c62e3047b41f3d876e42d98c767b301->leave($__internal_5bf539fb0a66a2d058cd4df8d6dadb9f5c62e3047b41f3d876e42d98c767b301_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
