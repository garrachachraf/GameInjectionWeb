<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fb9b4ca6755961104d61660692a4cd45ea716a822306301ec3e61d11aaf27bc9 extends Twig_Template
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
        $__internal_2a6ded526a336b01e753a47e7c13238c4e45bbbe617b5dc3b51885b2fd961e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6ded526a336b01e753a47e7c13238c4e45bbbe617b5dc3b51885b2fd961e53->enter($__internal_2a6ded526a336b01e753a47e7c13238c4e45bbbe617b5dc3b51885b2fd961e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_33107fec429832327d35a2f6868e15ed9dd80d38b866476450175e728a9011e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33107fec429832327d35a2f6868e15ed9dd80d38b866476450175e728a9011e4->enter($__internal_33107fec429832327d35a2f6868e15ed9dd80d38b866476450175e728a9011e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a6ded526a336b01e753a47e7c13238c4e45bbbe617b5dc3b51885b2fd961e53->leave($__internal_2a6ded526a336b01e753a47e7c13238c4e45bbbe617b5dc3b51885b2fd961e53_prof);

        
        $__internal_33107fec429832327d35a2f6868e15ed9dd80d38b866476450175e728a9011e4->leave($__internal_33107fec429832327d35a2f6868e15ed9dd80d38b866476450175e728a9011e4_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
