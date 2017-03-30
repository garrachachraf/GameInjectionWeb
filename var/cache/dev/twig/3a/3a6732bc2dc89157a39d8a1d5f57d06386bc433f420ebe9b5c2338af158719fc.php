<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_76f1cda471b5404dd4ce616282cd00350922afcc7f4fc17ed16e063222d3c6a6 extends Twig_Template
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
        $__internal_3d56c0a21c2d43d43dbe7603413176ab621990d1ea692e5bdfa5843205db45ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d56c0a21c2d43d43dbe7603413176ab621990d1ea692e5bdfa5843205db45ff->enter($__internal_3d56c0a21c2d43d43dbe7603413176ab621990d1ea692e5bdfa5843205db45ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b9aae2f29d3c67ef529e1c077657688a0e54f79419e86c2587e03146f972a130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9aae2f29d3c67ef529e1c077657688a0e54f79419e86c2587e03146f972a130->enter($__internal_b9aae2f29d3c67ef529e1c077657688a0e54f79419e86c2587e03146f972a130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3d56c0a21c2d43d43dbe7603413176ab621990d1ea692e5bdfa5843205db45ff->leave($__internal_3d56c0a21c2d43d43dbe7603413176ab621990d1ea692e5bdfa5843205db45ff_prof);

        
        $__internal_b9aae2f29d3c67ef529e1c077657688a0e54f79419e86c2587e03146f972a130->leave($__internal_b9aae2f29d3c67ef529e1c077657688a0e54f79419e86c2587e03146f972a130_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
