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
        $__internal_818f9629ecaa91e07777acf5dfa5ec1c5361d9f880fa4894ebdbe6ea1e1549b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818f9629ecaa91e07777acf5dfa5ec1c5361d9f880fa4894ebdbe6ea1e1549b5->enter($__internal_818f9629ecaa91e07777acf5dfa5ec1c5361d9f880fa4894ebdbe6ea1e1549b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_61adbaefb396a076f618004d30586a3c712fba41000bf40b7e0e0210c80dbd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61adbaefb396a076f618004d30586a3c712fba41000bf40b7e0e0210c80dbd7f->enter($__internal_61adbaefb396a076f618004d30586a3c712fba41000bf40b7e0e0210c80dbd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_818f9629ecaa91e07777acf5dfa5ec1c5361d9f880fa4894ebdbe6ea1e1549b5->leave($__internal_818f9629ecaa91e07777acf5dfa5ec1c5361d9f880fa4894ebdbe6ea1e1549b5_prof);

        
        $__internal_61adbaefb396a076f618004d30586a3c712fba41000bf40b7e0e0210c80dbd7f->leave($__internal_61adbaefb396a076f618004d30586a3c712fba41000bf40b7e0e0210c80dbd7f_prof);

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
