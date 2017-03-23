<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_02d24cc7f4ea27c304ae7af21763294d9faa26e23386674a995abc6d55e77901 extends Twig_Template
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
        $__internal_1997a04dac07cfc8835333a41600322e56b130cbc7c5f3cb7be27f07b5617eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1997a04dac07cfc8835333a41600322e56b130cbc7c5f3cb7be27f07b5617eeb->enter($__internal_1997a04dac07cfc8835333a41600322e56b130cbc7c5f3cb7be27f07b5617eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fa30f6c0411ce868585bb01bf7c1a59368ad8776f7b59b0baf559af58f6c0de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa30f6c0411ce868585bb01bf7c1a59368ad8776f7b59b0baf559af58f6c0de3->enter($__internal_fa30f6c0411ce868585bb01bf7c1a59368ad8776f7b59b0baf559af58f6c0de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1997a04dac07cfc8835333a41600322e56b130cbc7c5f3cb7be27f07b5617eeb->leave($__internal_1997a04dac07cfc8835333a41600322e56b130cbc7c5f3cb7be27f07b5617eeb_prof);

        
        $__internal_fa30f6c0411ce868585bb01bf7c1a59368ad8776f7b59b0baf559af58f6c0de3->leave($__internal_fa30f6c0411ce868585bb01bf7c1a59368ad8776f7b59b0baf559af58f6c0de3_prof);

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
