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
        $__internal_f462a4949e6d41fecd3e86be26f1478a2e9f90771850fc00e00dcdcda8b1c41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f462a4949e6d41fecd3e86be26f1478a2e9f90771850fc00e00dcdcda8b1c41d->enter($__internal_f462a4949e6d41fecd3e86be26f1478a2e9f90771850fc00e00dcdcda8b1c41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_83fc9ee1235fe42d3cf6f66913504e51e3a4b0bbdc68a7f34dbbcad4ab94f9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fc9ee1235fe42d3cf6f66913504e51e3a4b0bbdc68a7f34dbbcad4ab94f9db->enter($__internal_83fc9ee1235fe42d3cf6f66913504e51e3a4b0bbdc68a7f34dbbcad4ab94f9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f462a4949e6d41fecd3e86be26f1478a2e9f90771850fc00e00dcdcda8b1c41d->leave($__internal_f462a4949e6d41fecd3e86be26f1478a2e9f90771850fc00e00dcdcda8b1c41d_prof);

        
        $__internal_83fc9ee1235fe42d3cf6f66913504e51e3a4b0bbdc68a7f34dbbcad4ab94f9db->leave($__internal_83fc9ee1235fe42d3cf6f66913504e51e3a4b0bbdc68a7f34dbbcad4ab94f9db_prof);

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
", "@Framework/Form/attributes.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
