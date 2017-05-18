<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_81ccad196e1571cf26fd82da5ffe8f1446ae8077a801ec3c131bccb6156c4ef1 extends Twig_Template
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
        $__internal_44fff3dc7fe9b6e37da959151b38cc506eeb1fc757b7b74f35cb6b5883d9859d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fff3dc7fe9b6e37da959151b38cc506eeb1fc757b7b74f35cb6b5883d9859d->enter($__internal_44fff3dc7fe9b6e37da959151b38cc506eeb1fc757b7b74f35cb6b5883d9859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_16ca184964688b92bfb646305adc2aef8015f4d2701249c6b28a3a5b672dec94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ca184964688b92bfb646305adc2aef8015f4d2701249c6b28a3a5b672dec94->enter($__internal_16ca184964688b92bfb646305adc2aef8015f4d2701249c6b28a3a5b672dec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_44fff3dc7fe9b6e37da959151b38cc506eeb1fc757b7b74f35cb6b5883d9859d->leave($__internal_44fff3dc7fe9b6e37da959151b38cc506eeb1fc757b7b74f35cb6b5883d9859d_prof);

        
        $__internal_16ca184964688b92bfb646305adc2aef8015f4d2701249c6b28a3a5b672dec94->leave($__internal_16ca184964688b92bfb646305adc2aef8015f4d2701249c6b28a3a5b672dec94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
