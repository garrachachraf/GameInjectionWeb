<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_81daa688dd35e3d1a632cdfce396f080dbf75d3998efa2a19c75a16b2adb314e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81daa688dd35e3d1a632cdfce396f080dbf75d3998efa2a19c75a16b2adb314e->enter($__internal_81daa688dd35e3d1a632cdfce396f080dbf75d3998efa2a19c75a16b2adb314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dc7b2d11c7e816f30dcb0b0138314d99e32085a960c22a691928afeb67ffc0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7b2d11c7e816f30dcb0b0138314d99e32085a960c22a691928afeb67ffc0b8->enter($__internal_dc7b2d11c7e816f30dcb0b0138314d99e32085a960c22a691928afeb67ffc0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_81daa688dd35e3d1a632cdfce396f080dbf75d3998efa2a19c75a16b2adb314e->leave($__internal_81daa688dd35e3d1a632cdfce396f080dbf75d3998efa2a19c75a16b2adb314e_prof);

        
        $__internal_dc7b2d11c7e816f30dcb0b0138314d99e32085a960c22a691928afeb67ffc0b8->leave($__internal_dc7b2d11c7e816f30dcb0b0138314d99e32085a960c22a691928afeb67ffc0b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
