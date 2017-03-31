<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3f3af8a4d7c61b7524b52901f407ab123a9c775b06da14eeb538bffae96d107e extends Twig_Template
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
        $__internal_f0856ca0bc1ce2cf48c0c329d04476d234f947bf58a82c6e2f9cc3fa87d97002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0856ca0bc1ce2cf48c0c329d04476d234f947bf58a82c6e2f9cc3fa87d97002->enter($__internal_f0856ca0bc1ce2cf48c0c329d04476d234f947bf58a82c6e2f9cc3fa87d97002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f11eb2339fac772af078a5178f1fa64f5fb2b349354b98ea11f25f48e53066ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11eb2339fac772af078a5178f1fa64f5fb2b349354b98ea11f25f48e53066ac->enter($__internal_f11eb2339fac772af078a5178f1fa64f5fb2b349354b98ea11f25f48e53066ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f0856ca0bc1ce2cf48c0c329d04476d234f947bf58a82c6e2f9cc3fa87d97002->leave($__internal_f0856ca0bc1ce2cf48c0c329d04476d234f947bf58a82c6e2f9cc3fa87d97002_prof);

        
        $__internal_f11eb2339fac772af078a5178f1fa64f5fb2b349354b98ea11f25f48e53066ac->leave($__internal_f11eb2339fac772af078a5178f1fa64f5fb2b349354b98ea11f25f48e53066ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
