<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ecbbfc9e51139e8f39bec55f79ce445d0c165f94bf7aec4f8a009a9f7a7d31c0 extends Twig_Template
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
        $__internal_166feb942777f63d3a5aead36ae37b4c40d1396c9de4b84e61ab1fb68a896afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166feb942777f63d3a5aead36ae37b4c40d1396c9de4b84e61ab1fb68a896afe->enter($__internal_166feb942777f63d3a5aead36ae37b4c40d1396c9de4b84e61ab1fb68a896afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3e317cbe44f12e03841d9aad97cd92530de4759fa481b48d4bd92517781e3b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e317cbe44f12e03841d9aad97cd92530de4759fa481b48d4bd92517781e3b1c->enter($__internal_3e317cbe44f12e03841d9aad97cd92530de4759fa481b48d4bd92517781e3b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_166feb942777f63d3a5aead36ae37b4c40d1396c9de4b84e61ab1fb68a896afe->leave($__internal_166feb942777f63d3a5aead36ae37b4c40d1396c9de4b84e61ab1fb68a896afe_prof);

        
        $__internal_3e317cbe44f12e03841d9aad97cd92530de4759fa481b48d4bd92517781e3b1c->leave($__internal_3e317cbe44f12e03841d9aad97cd92530de4759fa481b48d4bd92517781e3b1c_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
