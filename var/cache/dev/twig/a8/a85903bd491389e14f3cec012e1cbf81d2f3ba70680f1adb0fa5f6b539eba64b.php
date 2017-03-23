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
        $__internal_5b4fcc71e9c526ee005e7d6c93bec46f0839702890766d7f9bcab2839908b92a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4fcc71e9c526ee005e7d6c93bec46f0839702890766d7f9bcab2839908b92a->enter($__internal_5b4fcc71e9c526ee005e7d6c93bec46f0839702890766d7f9bcab2839908b92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_08b5ce454f0a63c39df0a8d87ec2748225fcdb1a3db3594a266cbd39b5df67cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b5ce454f0a63c39df0a8d87ec2748225fcdb1a3db3594a266cbd39b5df67cd->enter($__internal_08b5ce454f0a63c39df0a8d87ec2748225fcdb1a3db3594a266cbd39b5df67cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5b4fcc71e9c526ee005e7d6c93bec46f0839702890766d7f9bcab2839908b92a->leave($__internal_5b4fcc71e9c526ee005e7d6c93bec46f0839702890766d7f9bcab2839908b92a_prof);

        
        $__internal_08b5ce454f0a63c39df0a8d87ec2748225fcdb1a3db3594a266cbd39b5df67cd->leave($__internal_08b5ce454f0a63c39df0a8d87ec2748225fcdb1a3db3594a266cbd39b5df67cd_prof);

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
