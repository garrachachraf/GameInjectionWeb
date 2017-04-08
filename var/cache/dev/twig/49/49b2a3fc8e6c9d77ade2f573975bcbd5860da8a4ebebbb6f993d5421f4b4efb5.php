<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_585a57a251235b2ecda471c17c7ca0009b0469eb2ee56cad319d4949aa0865f3 extends Twig_Template
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
        $__internal_4ba935b2c82d69e14622649e7953557a0b37501e74407c1e4464f60d92905e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba935b2c82d69e14622649e7953557a0b37501e74407c1e4464f60d92905e32->enter($__internal_4ba935b2c82d69e14622649e7953557a0b37501e74407c1e4464f60d92905e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2fb950950efbe94c414bfbb0ca2693c5281ac77651e15d9272f46fd2490c0b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb950950efbe94c414bfbb0ca2693c5281ac77651e15d9272f46fd2490c0b25->enter($__internal_2fb950950efbe94c414bfbb0ca2693c5281ac77651e15d9272f46fd2490c0b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4ba935b2c82d69e14622649e7953557a0b37501e74407c1e4464f60d92905e32->leave($__internal_4ba935b2c82d69e14622649e7953557a0b37501e74407c1e4464f60d92905e32_prof);

        
        $__internal_2fb950950efbe94c414bfbb0ca2693c5281ac77651e15d9272f46fd2490c0b25->leave($__internal_2fb950950efbe94c414bfbb0ca2693c5281ac77651e15d9272f46fd2490c0b25_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
