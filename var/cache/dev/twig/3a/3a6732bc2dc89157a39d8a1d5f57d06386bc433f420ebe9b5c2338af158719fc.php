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
        $__internal_57d8420459d457f8625c40fc29f4fe5160c4f38330f1c5b14ef6a8f5924750f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d8420459d457f8625c40fc29f4fe5160c4f38330f1c5b14ef6a8f5924750f6->enter($__internal_57d8420459d457f8625c40fc29f4fe5160c4f38330f1c5b14ef6a8f5924750f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8d875611fa21a30531cc1d64c08af0c76f7e0860d48c9afb654a2f5619a730d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d875611fa21a30531cc1d64c08af0c76f7e0860d48c9afb654a2f5619a730d7->enter($__internal_8d875611fa21a30531cc1d64c08af0c76f7e0860d48c9afb654a2f5619a730d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_57d8420459d457f8625c40fc29f4fe5160c4f38330f1c5b14ef6a8f5924750f6->leave($__internal_57d8420459d457f8625c40fc29f4fe5160c4f38330f1c5b14ef6a8f5924750f6_prof);

        
        $__internal_8d875611fa21a30531cc1d64c08af0c76f7e0860d48c9afb654a2f5619a730d7->leave($__internal_8d875611fa21a30531cc1d64c08af0c76f7e0860d48c9afb654a2f5619a730d7_prof);

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
