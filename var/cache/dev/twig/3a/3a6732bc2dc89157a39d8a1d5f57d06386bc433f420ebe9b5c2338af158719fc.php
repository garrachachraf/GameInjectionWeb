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
        $__internal_ba42f80ca261827d16e27a2b034cd1af76ed3fdd3bf61680b56f48a92d15335b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba42f80ca261827d16e27a2b034cd1af76ed3fdd3bf61680b56f48a92d15335b->enter($__internal_ba42f80ca261827d16e27a2b034cd1af76ed3fdd3bf61680b56f48a92d15335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_74c0098e16622c6a1cb147e53e395548ed648dc7035b330033f977fd9344a3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c0098e16622c6a1cb147e53e395548ed648dc7035b330033f977fd9344a3b1->enter($__internal_74c0098e16622c6a1cb147e53e395548ed648dc7035b330033f977fd9344a3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ba42f80ca261827d16e27a2b034cd1af76ed3fdd3bf61680b56f48a92d15335b->leave($__internal_ba42f80ca261827d16e27a2b034cd1af76ed3fdd3bf61680b56f48a92d15335b_prof);

        
        $__internal_74c0098e16622c6a1cb147e53e395548ed648dc7035b330033f977fd9344a3b1->leave($__internal_74c0098e16622c6a1cb147e53e395548ed648dc7035b330033f977fd9344a3b1_prof);

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
