<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_71c3c39b0768a950edb6a3b803350197bb5e670a3115e6649902333535c16ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c3c39b0768a950edb6a3b803350197bb5e670a3115e6649902333535c16ccd->enter($__internal_71c3c39b0768a950edb6a3b803350197bb5e670a3115e6649902333535c16ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_25ca9bdf027737a9e667e193f08359830178d39f05a72841d5dbf3e7ea6a7a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ca9bdf027737a9e667e193f08359830178d39f05a72841d5dbf3e7ea6a7a70->enter($__internal_25ca9bdf027737a9e667e193f08359830178d39f05a72841d5dbf3e7ea6a7a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_71c3c39b0768a950edb6a3b803350197bb5e670a3115e6649902333535c16ccd->leave($__internal_71c3c39b0768a950edb6a3b803350197bb5e670a3115e6649902333535c16ccd_prof);

        
        $__internal_25ca9bdf027737a9e667e193f08359830178d39f05a72841d5dbf3e7ea6a7a70->leave($__internal_25ca9bdf027737a9e667e193f08359830178d39f05a72841d5dbf3e7ea6a7a70_prof);

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
", "@Framework/Form/reset_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
