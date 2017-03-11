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
        $__internal_d9baff006a627f558dae4d029f4dd3ec7bde24e3da9bab947513800ebdc601ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9baff006a627f558dae4d029f4dd3ec7bde24e3da9bab947513800ebdc601ed->enter($__internal_d9baff006a627f558dae4d029f4dd3ec7bde24e3da9bab947513800ebdc601ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_84e7449e2afd753c12ad5318a03c01f62b832479f171b1ddab666f854025bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e7449e2afd753c12ad5318a03c01f62b832479f171b1ddab666f854025bc19->enter($__internal_84e7449e2afd753c12ad5318a03c01f62b832479f171b1ddab666f854025bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d9baff006a627f558dae4d029f4dd3ec7bde24e3da9bab947513800ebdc601ed->leave($__internal_d9baff006a627f558dae4d029f4dd3ec7bde24e3da9bab947513800ebdc601ed_prof);

        
        $__internal_84e7449e2afd753c12ad5318a03c01f62b832479f171b1ddab666f854025bc19->leave($__internal_84e7449e2afd753c12ad5318a03c01f62b832479f171b1ddab666f854025bc19_prof);

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
", "@Framework/Form/number_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
