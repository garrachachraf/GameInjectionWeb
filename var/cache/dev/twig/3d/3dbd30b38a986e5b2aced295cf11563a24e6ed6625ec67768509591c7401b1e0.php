<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62bacc5a0f9d3df79902b5e33fbbe19d48a29061758406b9db30598371b3c872 extends Twig_Template
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
        $__internal_7f3260546ba22dc71bed7ca7dd782ed15361fc0196a80fb336ee9854dffd1c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3260546ba22dc71bed7ca7dd782ed15361fc0196a80fb336ee9854dffd1c0d->enter($__internal_7f3260546ba22dc71bed7ca7dd782ed15361fc0196a80fb336ee9854dffd1c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_000867e9464f5c2197b0d9298cbe1596046d192a3dd8359df4bc6bf7b99a3fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000867e9464f5c2197b0d9298cbe1596046d192a3dd8359df4bc6bf7b99a3fad->enter($__internal_000867e9464f5c2197b0d9298cbe1596046d192a3dd8359df4bc6bf7b99a3fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7f3260546ba22dc71bed7ca7dd782ed15361fc0196a80fb336ee9854dffd1c0d->leave($__internal_7f3260546ba22dc71bed7ca7dd782ed15361fc0196a80fb336ee9854dffd1c0d_prof);

        
        $__internal_000867e9464f5c2197b0d9298cbe1596046d192a3dd8359df4bc6bf7b99a3fad->leave($__internal_000867e9464f5c2197b0d9298cbe1596046d192a3dd8359df4bc6bf7b99a3fad_prof);

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
