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
        $__internal_4f7c63447097489c0e251e1e257db0c9abca492621ae6601480984480ff8a2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7c63447097489c0e251e1e257db0c9abca492621ae6601480984480ff8a2f6->enter($__internal_4f7c63447097489c0e251e1e257db0c9abca492621ae6601480984480ff8a2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fa2aa7aa33d34d7bc6945c69e4e535de95d5407f0b3b796088ae4b7bb0cdc83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2aa7aa33d34d7bc6945c69e4e535de95d5407f0b3b796088ae4b7bb0cdc83a->enter($__internal_fa2aa7aa33d34d7bc6945c69e4e535de95d5407f0b3b796088ae4b7bb0cdc83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4f7c63447097489c0e251e1e257db0c9abca492621ae6601480984480ff8a2f6->leave($__internal_4f7c63447097489c0e251e1e257db0c9abca492621ae6601480984480ff8a2f6_prof);

        
        $__internal_fa2aa7aa33d34d7bc6945c69e4e535de95d5407f0b3b796088ae4b7bb0cdc83a->leave($__internal_fa2aa7aa33d34d7bc6945c69e4e535de95d5407f0b3b796088ae4b7bb0cdc83a_prof);

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
", "@Framework/Form/url_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
