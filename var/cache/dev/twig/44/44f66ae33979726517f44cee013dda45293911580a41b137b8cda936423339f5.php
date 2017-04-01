<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d8fd8ee81abe48459c960969ac57b6d6c0306b08a6692daff1e4dbe26134fa18 extends Twig_Template
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
        $__internal_0d1e6d0ae4eea1e680de70b0307b3c0e459f973f9c38c18da16e5659d940c724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1e6d0ae4eea1e680de70b0307b3c0e459f973f9c38c18da16e5659d940c724->enter($__internal_0d1e6d0ae4eea1e680de70b0307b3c0e459f973f9c38c18da16e5659d940c724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_80ba28e32c613d294ecbf7537b96e7e9173a718fc4c70602bbd0d1c2b2c82420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ba28e32c613d294ecbf7537b96e7e9173a718fc4c70602bbd0d1c2b2c82420->enter($__internal_80ba28e32c613d294ecbf7537b96e7e9173a718fc4c70602bbd0d1c2b2c82420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d1e6d0ae4eea1e680de70b0307b3c0e459f973f9c38c18da16e5659d940c724->leave($__internal_0d1e6d0ae4eea1e680de70b0307b3c0e459f973f9c38c18da16e5659d940c724_prof);

        
        $__internal_80ba28e32c613d294ecbf7537b96e7e9173a718fc4c70602bbd0d1c2b2c82420->leave($__internal_80ba28e32c613d294ecbf7537b96e7e9173a718fc4c70602bbd0d1c2b2c82420_prof);

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
