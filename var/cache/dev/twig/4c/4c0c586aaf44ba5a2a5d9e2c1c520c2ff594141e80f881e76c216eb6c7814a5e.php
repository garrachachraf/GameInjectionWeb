<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_d045fe370c19ae18cc493f97f7bbacc2c0ad5565df5042ca41d4ee7afc583e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d045fe370c19ae18cc493f97f7bbacc2c0ad5565df5042ca41d4ee7afc583e21->enter($__internal_d045fe370c19ae18cc493f97f7bbacc2c0ad5565df5042ca41d4ee7afc583e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f3f00e694b4199dbdb19814c2df8ae2c189588d7d08d8745421d0b14804b3395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f00e694b4199dbdb19814c2df8ae2c189588d7d08d8745421d0b14804b3395->enter($__internal_f3f00e694b4199dbdb19814c2df8ae2c189588d7d08d8745421d0b14804b3395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d045fe370c19ae18cc493f97f7bbacc2c0ad5565df5042ca41d4ee7afc583e21->leave($__internal_d045fe370c19ae18cc493f97f7bbacc2c0ad5565df5042ca41d4ee7afc583e21_prof);

        
        $__internal_f3f00e694b4199dbdb19814c2df8ae2c189588d7d08d8745421d0b14804b3395->leave($__internal_f3f00e694b4199dbdb19814c2df8ae2c189588d7d08d8745421d0b14804b3395_prof);

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
", "@Framework/Form/password_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
