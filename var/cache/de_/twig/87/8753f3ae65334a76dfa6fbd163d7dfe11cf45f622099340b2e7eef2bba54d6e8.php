<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_679716c9e80d6c2699af82c06ce9294406e74065eb7d64031f63e7f704a4dddd extends Twig_Template
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
        $__internal_ce4c0adece93bddd765a0d021af32d679144bac750ebd06c5bcac0f64cf58105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4c0adece93bddd765a0d021af32d679144bac750ebd06c5bcac0f64cf58105->enter($__internal_ce4c0adece93bddd765a0d021af32d679144bac750ebd06c5bcac0f64cf58105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1631f7f11e749af1a78e9cce8ebcf41059e3826950543756759dc59476f91a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1631f7f11e749af1a78e9cce8ebcf41059e3826950543756759dc59476f91a0e->enter($__internal_1631f7f11e749af1a78e9cce8ebcf41059e3826950543756759dc59476f91a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ce4c0adece93bddd765a0d021af32d679144bac750ebd06c5bcac0f64cf58105->leave($__internal_ce4c0adece93bddd765a0d021af32d679144bac750ebd06c5bcac0f64cf58105_prof);

        
        $__internal_1631f7f11e749af1a78e9cce8ebcf41059e3826950543756759dc59476f91a0e->leave($__internal_1631f7f11e749af1a78e9cce8ebcf41059e3826950543756759dc59476f91a0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
