<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_abf8ec3816ef6f61bdc22e73f9f2d960e63f3d52aa2e8ed7775680e6dbdbf7a9 extends Twig_Template
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
        $__internal_0e6a287f7d43b3bf5e49ac9d697e5db8a0e0a3a8c5e3ce57459ffcd55264127e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6a287f7d43b3bf5e49ac9d697e5db8a0e0a3a8c5e3ce57459ffcd55264127e->enter($__internal_0e6a287f7d43b3bf5e49ac9d697e5db8a0e0a3a8c5e3ce57459ffcd55264127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_55f1e292c427ae998f76b467c547dd7997d3a5ed52b64994eed57b304402c35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f1e292c427ae998f76b467c547dd7997d3a5ed52b64994eed57b304402c35c->enter($__internal_55f1e292c427ae998f76b467c547dd7997d3a5ed52b64994eed57b304402c35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0e6a287f7d43b3bf5e49ac9d697e5db8a0e0a3a8c5e3ce57459ffcd55264127e->leave($__internal_0e6a287f7d43b3bf5e49ac9d697e5db8a0e0a3a8c5e3ce57459ffcd55264127e_prof);

        
        $__internal_55f1e292c427ae998f76b467c547dd7997d3a5ed52b64994eed57b304402c35c->leave($__internal_55f1e292c427ae998f76b467c547dd7997d3a5ed52b64994eed57b304402c35c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
