<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ec6be0b41a723e43ae146a5be648835ed2756b41a97070aa1ad80755f9617d45 extends Twig_Template
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
        $__internal_4f6f42952706b0714531f200675e515616f16fea7668780bf6ceb2996e4dfa5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6f42952706b0714531f200675e515616f16fea7668780bf6ceb2996e4dfa5f->enter($__internal_4f6f42952706b0714531f200675e515616f16fea7668780bf6ceb2996e4dfa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c81450ebe0c11c5fbfb2ae4cf75a210bd000604ea2e50837ca28c7c783e51b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81450ebe0c11c5fbfb2ae4cf75a210bd000604ea2e50837ca28c7c783e51b2e->enter($__internal_c81450ebe0c11c5fbfb2ae4cf75a210bd000604ea2e50837ca28c7c783e51b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4f6f42952706b0714531f200675e515616f16fea7668780bf6ceb2996e4dfa5f->leave($__internal_4f6f42952706b0714531f200675e515616f16fea7668780bf6ceb2996e4dfa5f_prof);

        
        $__internal_c81450ebe0c11c5fbfb2ae4cf75a210bd000604ea2e50837ca28c7c783e51b2e->leave($__internal_c81450ebe0c11c5fbfb2ae4cf75a210bd000604ea2e50837ca28c7c783e51b2e_prof);

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
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
