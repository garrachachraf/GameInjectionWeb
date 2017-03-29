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
        $__internal_7f823a98a65a43d10b3412c13ee5f2cd637ad73ef0e27463c5f1efcbd7182fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f823a98a65a43d10b3412c13ee5f2cd637ad73ef0e27463c5f1efcbd7182fa6->enter($__internal_7f823a98a65a43d10b3412c13ee5f2cd637ad73ef0e27463c5f1efcbd7182fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f6e792ca0de28f5b7dbc5b95b2fb777bbc02108c96e68e8f243aa1ff31be4666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e792ca0de28f5b7dbc5b95b2fb777bbc02108c96e68e8f243aa1ff31be4666->enter($__internal_f6e792ca0de28f5b7dbc5b95b2fb777bbc02108c96e68e8f243aa1ff31be4666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7f823a98a65a43d10b3412c13ee5f2cd637ad73ef0e27463c5f1efcbd7182fa6->leave($__internal_7f823a98a65a43d10b3412c13ee5f2cd637ad73ef0e27463c5f1efcbd7182fa6_prof);

        
        $__internal_f6e792ca0de28f5b7dbc5b95b2fb777bbc02108c96e68e8f243aa1ff31be4666->leave($__internal_f6e792ca0de28f5b7dbc5b95b2fb777bbc02108c96e68e8f243aa1ff31be4666_prof);

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
