<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_49c3b971564033ad3243ebb66f500e748fc8b8779702f72d9bee1954fd468597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c3b971564033ad3243ebb66f500e748fc8b8779702f72d9bee1954fd468597->enter($__internal_49c3b971564033ad3243ebb66f500e748fc8b8779702f72d9bee1954fd468597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6719863c584a7c7f149512fd4cbce89d893aaa845d2449ff667be5916cfcf3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6719863c584a7c7f149512fd4cbce89d893aaa845d2449ff667be5916cfcf3a4->enter($__internal_6719863c584a7c7f149512fd4cbce89d893aaa845d2449ff667be5916cfcf3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_49c3b971564033ad3243ebb66f500e748fc8b8779702f72d9bee1954fd468597->leave($__internal_49c3b971564033ad3243ebb66f500e748fc8b8779702f72d9bee1954fd468597_prof);

        
        $__internal_6719863c584a7c7f149512fd4cbce89d893aaa845d2449ff667be5916cfcf3a4->leave($__internal_6719863c584a7c7f149512fd4cbce89d893aaa845d2449ff667be5916cfcf3a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
