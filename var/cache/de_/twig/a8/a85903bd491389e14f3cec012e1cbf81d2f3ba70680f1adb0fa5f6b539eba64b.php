<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4f438a6a069dad2c9e595ae33688fd3ea7f4376dc09badbcdcb99dfd97c22f38 extends Twig_Template
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
        $__internal_90bb682a59b068ac38236e2fa2628994d5996ba6234d5ffc2a6be2449c083efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bb682a59b068ac38236e2fa2628994d5996ba6234d5ffc2a6be2449c083efa->enter($__internal_90bb682a59b068ac38236e2fa2628994d5996ba6234d5ffc2a6be2449c083efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_62113fb25ad023017053b2f01ef8b178c341660ac7db58eb2e4c29fb82fd92c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62113fb25ad023017053b2f01ef8b178c341660ac7db58eb2e4c29fb82fd92c8->enter($__internal_62113fb25ad023017053b2f01ef8b178c341660ac7db58eb2e4c29fb82fd92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_90bb682a59b068ac38236e2fa2628994d5996ba6234d5ffc2a6be2449c083efa->leave($__internal_90bb682a59b068ac38236e2fa2628994d5996ba6234d5ffc2a6be2449c083efa_prof);

        
        $__internal_62113fb25ad023017053b2f01ef8b178c341660ac7db58eb2e4c29fb82fd92c8->leave($__internal_62113fb25ad023017053b2f01ef8b178c341660ac7db58eb2e4c29fb82fd92c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
