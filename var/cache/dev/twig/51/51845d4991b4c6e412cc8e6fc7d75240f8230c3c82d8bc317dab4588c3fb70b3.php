<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f37504d08c7b74ee457cf5ea54d812efaa6783e257332b4edcf650eed1145fee extends Twig_Template
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
        $__internal_7f781bcc4da0a82d301986275dfaf6a1f306284871fc896cb658e7245979c853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f781bcc4da0a82d301986275dfaf6a1f306284871fc896cb658e7245979c853->enter($__internal_7f781bcc4da0a82d301986275dfaf6a1f306284871fc896cb658e7245979c853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9a43973f94465bfd1c6721f4733758ccffc30c7f94d4c9fa715b3623c9a27671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a43973f94465bfd1c6721f4733758ccffc30c7f94d4c9fa715b3623c9a27671->enter($__internal_9a43973f94465bfd1c6721f4733758ccffc30c7f94d4c9fa715b3623c9a27671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7f781bcc4da0a82d301986275dfaf6a1f306284871fc896cb658e7245979c853->leave($__internal_7f781bcc4da0a82d301986275dfaf6a1f306284871fc896cb658e7245979c853_prof);

        
        $__internal_9a43973f94465bfd1c6721f4733758ccffc30c7f94d4c9fa715b3623c9a27671->leave($__internal_9a43973f94465bfd1c6721f4733758ccffc30c7f94d4c9fa715b3623c9a27671_prof);

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
