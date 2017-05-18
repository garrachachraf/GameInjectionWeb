<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f60550199d1c6e5c33e6dae75bf323761a43f5e5f1a8571668c154dddcd863a1 extends Twig_Template
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
        $__internal_9ccc6c0c095eb55dd1fc61bc751a70439753390f25c48fd422adaedde1d5d2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccc6c0c095eb55dd1fc61bc751a70439753390f25c48fd422adaedde1d5d2c8->enter($__internal_9ccc6c0c095eb55dd1fc61bc751a70439753390f25c48fd422adaedde1d5d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3eb41e39f566142eb2d261cf069d7c0c2dcde7968ef8517753338ed83f950914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb41e39f566142eb2d261cf069d7c0c2dcde7968ef8517753338ed83f950914->enter($__internal_3eb41e39f566142eb2d261cf069d7c0c2dcde7968ef8517753338ed83f950914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9ccc6c0c095eb55dd1fc61bc751a70439753390f25c48fd422adaedde1d5d2c8->leave($__internal_9ccc6c0c095eb55dd1fc61bc751a70439753390f25c48fd422adaedde1d5d2c8_prof);

        
        $__internal_3eb41e39f566142eb2d261cf069d7c0c2dcde7968ef8517753338ed83f950914->leave($__internal_3eb41e39f566142eb2d261cf069d7c0c2dcde7968ef8517753338ed83f950914_prof);

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
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
