<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ecbbfc9e51139e8f39bec55f79ce445d0c165f94bf7aec4f8a009a9f7a7d31c0 extends Twig_Template
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
        $__internal_1c94da7bf7b9611d61def30fbcb64d2d8abbfb7203cb8adba560e589086c961e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c94da7bf7b9611d61def30fbcb64d2d8abbfb7203cb8adba560e589086c961e->enter($__internal_1c94da7bf7b9611d61def30fbcb64d2d8abbfb7203cb8adba560e589086c961e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b93443d853d8235015e1950af6074cc1f9e435f5600dffdb7761e58db295ac1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93443d853d8235015e1950af6074cc1f9e435f5600dffdb7761e58db295ac1a->enter($__internal_b93443d853d8235015e1950af6074cc1f9e435f5600dffdb7761e58db295ac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1c94da7bf7b9611d61def30fbcb64d2d8abbfb7203cb8adba560e589086c961e->leave($__internal_1c94da7bf7b9611d61def30fbcb64d2d8abbfb7203cb8adba560e589086c961e_prof);

        
        $__internal_b93443d853d8235015e1950af6074cc1f9e435f5600dffdb7761e58db295ac1a->leave($__internal_b93443d853d8235015e1950af6074cc1f9e435f5600dffdb7761e58db295ac1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
