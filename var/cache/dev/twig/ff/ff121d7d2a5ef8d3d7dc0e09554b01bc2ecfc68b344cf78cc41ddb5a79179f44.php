<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c1ad68cc5ae486936961bb10386c5815d72196d16180f6e5eef6fed14a30e991 extends Twig_Template
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
        $__internal_260a46859e5972175544205daf73e9658248935daea30129d83e9d157853c7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260a46859e5972175544205daf73e9658248935daea30129d83e9d157853c7cd->enter($__internal_260a46859e5972175544205daf73e9658248935daea30129d83e9d157853c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cd099b9074c8be882d99fd0455bcb1a90872dc9cf90bada0a98d36757c00dd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd099b9074c8be882d99fd0455bcb1a90872dc9cf90bada0a98d36757c00dd9c->enter($__internal_cd099b9074c8be882d99fd0455bcb1a90872dc9cf90bada0a98d36757c00dd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_260a46859e5972175544205daf73e9658248935daea30129d83e9d157853c7cd->leave($__internal_260a46859e5972175544205daf73e9658248935daea30129d83e9d157853c7cd_prof);

        
        $__internal_cd099b9074c8be882d99fd0455bcb1a90872dc9cf90bada0a98d36757c00dd9c->leave($__internal_cd099b9074c8be882d99fd0455bcb1a90872dc9cf90bada0a98d36757c00dd9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
