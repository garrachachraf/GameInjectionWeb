<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_19829e25a8f3c84b075fa36fbd039ae3f32f646d8fc0d5daacce268d62629aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19829e25a8f3c84b075fa36fbd039ae3f32f646d8fc0d5daacce268d62629aec->enter($__internal_19829e25a8f3c84b075fa36fbd039ae3f32f646d8fc0d5daacce268d62629aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_37f138c2460d9c5678d48bbf50350d2476e24edfbb55a16de6f5fbdb65215e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f138c2460d9c5678d48bbf50350d2476e24edfbb55a16de6f5fbdb65215e0a->enter($__internal_37f138c2460d9c5678d48bbf50350d2476e24edfbb55a16de6f5fbdb65215e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_19829e25a8f3c84b075fa36fbd039ae3f32f646d8fc0d5daacce268d62629aec->leave($__internal_19829e25a8f3c84b075fa36fbd039ae3f32f646d8fc0d5daacce268d62629aec_prof);

        
        $__internal_37f138c2460d9c5678d48bbf50350d2476e24edfbb55a16de6f5fbdb65215e0a->leave($__internal_37f138c2460d9c5678d48bbf50350d2476e24edfbb55a16de6f5fbdb65215e0a_prof);

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
", "@Framework/Form/url_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
