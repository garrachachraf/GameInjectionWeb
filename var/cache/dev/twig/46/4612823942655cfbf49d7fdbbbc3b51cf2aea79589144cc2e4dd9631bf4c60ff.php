<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_f8cfdb1e941b64360036c71e3af1e1de3c415657eecf3c8eb07de50f31c7dc23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cfdb1e941b64360036c71e3af1e1de3c415657eecf3c8eb07de50f31c7dc23->enter($__internal_f8cfdb1e941b64360036c71e3af1e1de3c415657eecf3c8eb07de50f31c7dc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c74b0a505331e1355029eb3f0d6b1d27e6b27fd96dc20e4ade50beccfcf9d5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74b0a505331e1355029eb3f0d6b1d27e6b27fd96dc20e4ade50beccfcf9d5c1->enter($__internal_c74b0a505331e1355029eb3f0d6b1d27e6b27fd96dc20e4ade50beccfcf9d5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f8cfdb1e941b64360036c71e3af1e1de3c415657eecf3c8eb07de50f31c7dc23->leave($__internal_f8cfdb1e941b64360036c71e3af1e1de3c415657eecf3c8eb07de50f31c7dc23_prof);

        
        $__internal_c74b0a505331e1355029eb3f0d6b1d27e6b27fd96dc20e4ade50beccfcf9d5c1->leave($__internal_c74b0a505331e1355029eb3f0d6b1d27e6b27fd96dc20e4ade50beccfcf9d5c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
