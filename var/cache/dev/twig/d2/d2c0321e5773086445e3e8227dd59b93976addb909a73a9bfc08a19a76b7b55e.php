<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6af53ad795c923292bbddb5aa38f4aaec1efc4ecab9408536aa078f79ef137c2 extends Twig_Template
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
        $__internal_d834eb78f722d3e5135f5847d50b1ef78f2f33853ed0e23097e26a452e069b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d834eb78f722d3e5135f5847d50b1ef78f2f33853ed0e23097e26a452e069b2b->enter($__internal_d834eb78f722d3e5135f5847d50b1ef78f2f33853ed0e23097e26a452e069b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e38ae0345eb33cc2a49787a1df989de78d3be3c715d73adba0903f30bdf3b394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38ae0345eb33cc2a49787a1df989de78d3be3c715d73adba0903f30bdf3b394->enter($__internal_e38ae0345eb33cc2a49787a1df989de78d3be3c715d73adba0903f30bdf3b394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d834eb78f722d3e5135f5847d50b1ef78f2f33853ed0e23097e26a452e069b2b->leave($__internal_d834eb78f722d3e5135f5847d50b1ef78f2f33853ed0e23097e26a452e069b2b_prof);

        
        $__internal_e38ae0345eb33cc2a49787a1df989de78d3be3c715d73adba0903f30bdf3b394->leave($__internal_e38ae0345eb33cc2a49787a1df989de78d3be3c715d73adba0903f30bdf3b394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
