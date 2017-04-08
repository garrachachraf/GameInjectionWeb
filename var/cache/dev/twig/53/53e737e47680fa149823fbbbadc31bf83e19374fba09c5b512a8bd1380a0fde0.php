<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c5e5c2011ac595a996c63e9a2066e1d57879e47deb8ed7a8f9f94978fa3cf48b extends Twig_Template
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
        $__internal_a9efaca788826f8aad76e64a253ff7baf8566d43b5cec65b5da138515a8e2df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9efaca788826f8aad76e64a253ff7baf8566d43b5cec65b5da138515a8e2df3->enter($__internal_a9efaca788826f8aad76e64a253ff7baf8566d43b5cec65b5da138515a8e2df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b96cf83b85901f4e9cf08678fddef9624517e01e84bcc1fe340e4d857d1e9e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96cf83b85901f4e9cf08678fddef9624517e01e84bcc1fe340e4d857d1e9e82->enter($__internal_b96cf83b85901f4e9cf08678fddef9624517e01e84bcc1fe340e4d857d1e9e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a9efaca788826f8aad76e64a253ff7baf8566d43b5cec65b5da138515a8e2df3->leave($__internal_a9efaca788826f8aad76e64a253ff7baf8566d43b5cec65b5da138515a8e2df3_prof);

        
        $__internal_b96cf83b85901f4e9cf08678fddef9624517e01e84bcc1fe340e4d857d1e9e82->leave($__internal_b96cf83b85901f4e9cf08678fddef9624517e01e84bcc1fe340e4d857d1e9e82_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
