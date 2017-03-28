<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1fc3d96efa07560a65a7a733f765cd8c2f7a286da5276fefd206333baa2146e6 extends Twig_Template
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
        $__internal_9a16a09d8e60360fd6882ed63cb29265ccd45fdb81b452cbbbaf242736745a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a16a09d8e60360fd6882ed63cb29265ccd45fdb81b452cbbbaf242736745a53->enter($__internal_9a16a09d8e60360fd6882ed63cb29265ccd45fdb81b452cbbbaf242736745a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0bd35b2c155706ad9f1bde084bf7ca8c7a64098b221107e98b26ceaebd3be098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd35b2c155706ad9f1bde084bf7ca8c7a64098b221107e98b26ceaebd3be098->enter($__internal_0bd35b2c155706ad9f1bde084bf7ca8c7a64098b221107e98b26ceaebd3be098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9a16a09d8e60360fd6882ed63cb29265ccd45fdb81b452cbbbaf242736745a53->leave($__internal_9a16a09d8e60360fd6882ed63cb29265ccd45fdb81b452cbbbaf242736745a53_prof);

        
        $__internal_0bd35b2c155706ad9f1bde084bf7ca8c7a64098b221107e98b26ceaebd3be098->leave($__internal_0bd35b2c155706ad9f1bde084bf7ca8c7a64098b221107e98b26ceaebd3be098_prof);

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
