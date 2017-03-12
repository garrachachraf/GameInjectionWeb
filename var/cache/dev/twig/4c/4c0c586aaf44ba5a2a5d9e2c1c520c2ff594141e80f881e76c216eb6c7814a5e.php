<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_dcf09ef115ad475e35053e1e75acf96a2b5ea8f24c2a89da80af25d647968159 extends Twig_Template
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
        $__internal_a4f3feec0ed6b36b0a47ecfb077a6e78642872664c847ec8e070aadc9252eefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f3feec0ed6b36b0a47ecfb077a6e78642872664c847ec8e070aadc9252eefb->enter($__internal_a4f3feec0ed6b36b0a47ecfb077a6e78642872664c847ec8e070aadc9252eefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_041e8b43a037e4eef0882e9094504185a30b4667fedcc2379a58f81b2aeba022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041e8b43a037e4eef0882e9094504185a30b4667fedcc2379a58f81b2aeba022->enter($__internal_041e8b43a037e4eef0882e9094504185a30b4667fedcc2379a58f81b2aeba022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a4f3feec0ed6b36b0a47ecfb077a6e78642872664c847ec8e070aadc9252eefb->leave($__internal_a4f3feec0ed6b36b0a47ecfb077a6e78642872664c847ec8e070aadc9252eefb_prof);

        
        $__internal_041e8b43a037e4eef0882e9094504185a30b4667fedcc2379a58f81b2aeba022->leave($__internal_041e8b43a037e4eef0882e9094504185a30b4667fedcc2379a58f81b2aeba022_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
