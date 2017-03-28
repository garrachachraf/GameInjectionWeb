<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_a2437f496249e103dc28a053f1916611c284807327d26c68304fbc0166d61000 extends Twig_Template
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
        $__internal_b417d7f44c87f0734cf51553e32d71c6074b53976e46ec38f4497b085814b2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b417d7f44c87f0734cf51553e32d71c6074b53976e46ec38f4497b085814b2bd->enter($__internal_b417d7f44c87f0734cf51553e32d71c6074b53976e46ec38f4497b085814b2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e49e01a9130225a8db51d01084a7ccd06919f91d12439cc2eb62ea2612413698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49e01a9130225a8db51d01084a7ccd06919f91d12439cc2eb62ea2612413698->enter($__internal_e49e01a9130225a8db51d01084a7ccd06919f91d12439cc2eb62ea2612413698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b417d7f44c87f0734cf51553e32d71c6074b53976e46ec38f4497b085814b2bd->leave($__internal_b417d7f44c87f0734cf51553e32d71c6074b53976e46ec38f4497b085814b2bd_prof);

        
        $__internal_e49e01a9130225a8db51d01084a7ccd06919f91d12439cc2eb62ea2612413698->leave($__internal_e49e01a9130225a8db51d01084a7ccd06919f91d12439cc2eb62ea2612413698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
