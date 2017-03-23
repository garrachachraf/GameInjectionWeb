<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_eadb7737c3bccb4b29bf441e6bf5cf227e32f76b3f7cdb2d2d6e12011030d530 extends Twig_Template
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
        $__internal_cdd9b1df585f28da7e731d589943b9a9aacc49693aeb9902e4f6240ff39ecb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd9b1df585f28da7e731d589943b9a9aacc49693aeb9902e4f6240ff39ecb8a->enter($__internal_cdd9b1df585f28da7e731d589943b9a9aacc49693aeb9902e4f6240ff39ecb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_96e78bb71fd3f63ba556947c5318648fb51f28cdea2263b1c4ec16fb06c7ebe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e78bb71fd3f63ba556947c5318648fb51f28cdea2263b1c4ec16fb06c7ebe8->enter($__internal_96e78bb71fd3f63ba556947c5318648fb51f28cdea2263b1c4ec16fb06c7ebe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cdd9b1df585f28da7e731d589943b9a9aacc49693aeb9902e4f6240ff39ecb8a->leave($__internal_cdd9b1df585f28da7e731d589943b9a9aacc49693aeb9902e4f6240ff39ecb8a_prof);

        
        $__internal_96e78bb71fd3f63ba556947c5318648fb51f28cdea2263b1c4ec16fb06c7ebe8->leave($__internal_96e78bb71fd3f63ba556947c5318648fb51f28cdea2263b1c4ec16fb06c7ebe8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
