<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_264689c2a72372725105b5e9150e12df5d198c08c537b968f0dda1917854d5c2 extends Twig_Template
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
        $__internal_8e6b7bd0a525c96269d29dc0d8358daec9e333f8e6393d31fe2bfd0297ef1d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6b7bd0a525c96269d29dc0d8358daec9e333f8e6393d31fe2bfd0297ef1d3d->enter($__internal_8e6b7bd0a525c96269d29dc0d8358daec9e333f8e6393d31fe2bfd0297ef1d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_34f2fb1bfa715930d3db5ba7b9332c5aa37fd8fd1f8ffc2c136c23a26adef622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f2fb1bfa715930d3db5ba7b9332c5aa37fd8fd1f8ffc2c136c23a26adef622->enter($__internal_34f2fb1bfa715930d3db5ba7b9332c5aa37fd8fd1f8ffc2c136c23a26adef622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8e6b7bd0a525c96269d29dc0d8358daec9e333f8e6393d31fe2bfd0297ef1d3d->leave($__internal_8e6b7bd0a525c96269d29dc0d8358daec9e333f8e6393d31fe2bfd0297ef1d3d_prof);

        
        $__internal_34f2fb1bfa715930d3db5ba7b9332c5aa37fd8fd1f8ffc2c136c23a26adef622->leave($__internal_34f2fb1bfa715930d3db5ba7b9332c5aa37fd8fd1f8ffc2c136c23a26adef622_prof);

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
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
