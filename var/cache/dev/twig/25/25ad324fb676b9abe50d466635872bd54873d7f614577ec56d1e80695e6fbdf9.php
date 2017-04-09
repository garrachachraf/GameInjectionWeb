<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3c28b78d6b26471c0417b73fe6745ccf94cc04411900d7a01ebf36744a735864 extends Twig_Template
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
        $__internal_f53d509a26bb05c878a793521bfb16d88ab247bf741414b69c929e6ed3010e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53d509a26bb05c878a793521bfb16d88ab247bf741414b69c929e6ed3010e89->enter($__internal_f53d509a26bb05c878a793521bfb16d88ab247bf741414b69c929e6ed3010e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_17d1d3dafb87c46be0c53ea3fd2301223c5da1d7c7b18eabe9c1f988783856a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d1d3dafb87c46be0c53ea3fd2301223c5da1d7c7b18eabe9c1f988783856a4->enter($__internal_17d1d3dafb87c46be0c53ea3fd2301223c5da1d7c7b18eabe9c1f988783856a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f53d509a26bb05c878a793521bfb16d88ab247bf741414b69c929e6ed3010e89->leave($__internal_f53d509a26bb05c878a793521bfb16d88ab247bf741414b69c929e6ed3010e89_prof);

        
        $__internal_17d1d3dafb87c46be0c53ea3fd2301223c5da1d7c7b18eabe9c1f988783856a4->leave($__internal_17d1d3dafb87c46be0c53ea3fd2301223c5da1d7c7b18eabe9c1f988783856a4_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
