<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e077cb5c9a6491da44cfec9ae309b3b2fef62503a08fe561d823f631768b2525 extends Twig_Template
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
        $__internal_0bdd5ae7cc934b50428a0ca2119d800d2349c949cfa8b9c6d4b42abec0179371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdd5ae7cc934b50428a0ca2119d800d2349c949cfa8b9c6d4b42abec0179371->enter($__internal_0bdd5ae7cc934b50428a0ca2119d800d2349c949cfa8b9c6d4b42abec0179371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2922b1929dc54fd43125751bcbc086fa2665b522137b2b3d3b71f3908cca9ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2922b1929dc54fd43125751bcbc086fa2665b522137b2b3d3b71f3908cca9ee6->enter($__internal_2922b1929dc54fd43125751bcbc086fa2665b522137b2b3d3b71f3908cca9ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0bdd5ae7cc934b50428a0ca2119d800d2349c949cfa8b9c6d4b42abec0179371->leave($__internal_0bdd5ae7cc934b50428a0ca2119d800d2349c949cfa8b9c6d4b42abec0179371_prof);

        
        $__internal_2922b1929dc54fd43125751bcbc086fa2665b522137b2b3d3b71f3908cca9ee6->leave($__internal_2922b1929dc54fd43125751bcbc086fa2665b522137b2b3d3b71f3908cca9ee6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}