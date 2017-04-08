<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8e6b9aeac5e357319edefeaed1bb9bcc9c9bde868b03f3d3b0d19dfdd8c10ed6 extends Twig_Template
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
        $__internal_a1887f457f264eee3b5db7349639a03af3c624f18e0a6bf29581e598848b98fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1887f457f264eee3b5db7349639a03af3c624f18e0a6bf29581e598848b98fb->enter($__internal_a1887f457f264eee3b5db7349639a03af3c624f18e0a6bf29581e598848b98fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b7d0b726a734b183c8455591f0673a16fea4295b0897f78abd37a1c9ee9b46a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d0b726a734b183c8455591f0673a16fea4295b0897f78abd37a1c9ee9b46a6->enter($__internal_b7d0b726a734b183c8455591f0673a16fea4295b0897f78abd37a1c9ee9b46a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a1887f457f264eee3b5db7349639a03af3c624f18e0a6bf29581e598848b98fb->leave($__internal_a1887f457f264eee3b5db7349639a03af3c624f18e0a6bf29581e598848b98fb_prof);

        
        $__internal_b7d0b726a734b183c8455591f0673a16fea4295b0897f78abd37a1c9ee9b46a6->leave($__internal_b7d0b726a734b183c8455591f0673a16fea4295b0897f78abd37a1c9ee9b46a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
