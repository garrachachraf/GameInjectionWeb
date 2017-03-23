<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3dc0418d96bc3b000e87ad5e8e6c2cf073117378e8c4b75194b6ae08c64a86b1 extends Twig_Template
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
        $__internal_fd477c0a0f13cf0e444354ccdded8c172e351a2ceed762ecff7fd8b8ffd3c81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd477c0a0f13cf0e444354ccdded8c172e351a2ceed762ecff7fd8b8ffd3c81f->enter($__internal_fd477c0a0f13cf0e444354ccdded8c172e351a2ceed762ecff7fd8b8ffd3c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4d3a03bdba543ebe4aa1cab2486e5c61fbc152f672c526fb64b200d981942307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3a03bdba543ebe4aa1cab2486e5c61fbc152f672c526fb64b200d981942307->enter($__internal_4d3a03bdba543ebe4aa1cab2486e5c61fbc152f672c526fb64b200d981942307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fd477c0a0f13cf0e444354ccdded8c172e351a2ceed762ecff7fd8b8ffd3c81f->leave($__internal_fd477c0a0f13cf0e444354ccdded8c172e351a2ceed762ecff7fd8b8ffd3c81f_prof);

        
        $__internal_4d3a03bdba543ebe4aa1cab2486e5c61fbc152f672c526fb64b200d981942307->leave($__internal_4d3a03bdba543ebe4aa1cab2486e5c61fbc152f672c526fb64b200d981942307_prof);

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
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
