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
        $__internal_1289072c04ea696653459c2406a9ff8470264c6c4d0b9c8365bccfd8c22ce517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1289072c04ea696653459c2406a9ff8470264c6c4d0b9c8365bccfd8c22ce517->enter($__internal_1289072c04ea696653459c2406a9ff8470264c6c4d0b9c8365bccfd8c22ce517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_da9295ca8a93e969b7c445c9f5e80b8976cdac5b11bd18b75862a214fd09d5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9295ca8a93e969b7c445c9f5e80b8976cdac5b11bd18b75862a214fd09d5ac->enter($__internal_da9295ca8a93e969b7c445c9f5e80b8976cdac5b11bd18b75862a214fd09d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1289072c04ea696653459c2406a9ff8470264c6c4d0b9c8365bccfd8c22ce517->leave($__internal_1289072c04ea696653459c2406a9ff8470264c6c4d0b9c8365bccfd8c22ce517_prof);

        
        $__internal_da9295ca8a93e969b7c445c9f5e80b8976cdac5b11bd18b75862a214fd09d5ac->leave($__internal_da9295ca8a93e969b7c445c9f5e80b8976cdac5b11bd18b75862a214fd09d5ac_prof);

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
