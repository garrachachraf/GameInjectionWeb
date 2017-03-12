<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_42f625caf7ed984087d8465e2b5f6a0af5f6e0eaa4263308aac86d856b64bee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f625caf7ed984087d8465e2b5f6a0af5f6e0eaa4263308aac86d856b64bee5->enter($__internal_42f625caf7ed984087d8465e2b5f6a0af5f6e0eaa4263308aac86d856b64bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_297a83476364215cd7564221f0b89f5f8dec625911b5f10050494b432e9f9fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297a83476364215cd7564221f0b89f5f8dec625911b5f10050494b432e9f9fea->enter($__internal_297a83476364215cd7564221f0b89f5f8dec625911b5f10050494b432e9f9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_42f625caf7ed984087d8465e2b5f6a0af5f6e0eaa4263308aac86d856b64bee5->leave($__internal_42f625caf7ed984087d8465e2b5f6a0af5f6e0eaa4263308aac86d856b64bee5_prof);

        
        $__internal_297a83476364215cd7564221f0b89f5f8dec625911b5f10050494b432e9f9fea->leave($__internal_297a83476364215cd7564221f0b89f5f8dec625911b5f10050494b432e9f9fea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
