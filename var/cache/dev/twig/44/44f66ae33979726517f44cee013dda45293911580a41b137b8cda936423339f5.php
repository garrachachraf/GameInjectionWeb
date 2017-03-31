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
        $__internal_bb6c10c402c4907ff2b69c522248c79cd2418c67f5c282c5cbc7ec2ebe6291f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6c10c402c4907ff2b69c522248c79cd2418c67f5c282c5cbc7ec2ebe6291f1->enter($__internal_bb6c10c402c4907ff2b69c522248c79cd2418c67f5c282c5cbc7ec2ebe6291f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_120a8a4cfca744f1b31ce4ba28045e5946058aa7d29f012b32aa1a3500996cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120a8a4cfca744f1b31ce4ba28045e5946058aa7d29f012b32aa1a3500996cae->enter($__internal_120a8a4cfca744f1b31ce4ba28045e5946058aa7d29f012b32aa1a3500996cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bb6c10c402c4907ff2b69c522248c79cd2418c67f5c282c5cbc7ec2ebe6291f1->leave($__internal_bb6c10c402c4907ff2b69c522248c79cd2418c67f5c282c5cbc7ec2ebe6291f1_prof);

        
        $__internal_120a8a4cfca744f1b31ce4ba28045e5946058aa7d29f012b32aa1a3500996cae->leave($__internal_120a8a4cfca744f1b31ce4ba28045e5946058aa7d29f012b32aa1a3500996cae_prof);

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
