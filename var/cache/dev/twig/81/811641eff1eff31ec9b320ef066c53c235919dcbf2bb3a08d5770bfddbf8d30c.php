<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e6db0f05d6cecb8c94af4b0dd6575198d6a4708a85396fe67d027e6abd7705d1 extends Twig_Template
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
        $__internal_ce470e325e6a51cb2a0c50ff45c66d4d882779bd4126ca6ecb0ecc22b1417e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce470e325e6a51cb2a0c50ff45c66d4d882779bd4126ca6ecb0ecc22b1417e49->enter($__internal_ce470e325e6a51cb2a0c50ff45c66d4d882779bd4126ca6ecb0ecc22b1417e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ec7cbbbb1f49116efe8e5f169de45adc45c9e91078e8dc4e69dde6443568171f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7cbbbb1f49116efe8e5f169de45adc45c9e91078e8dc4e69dde6443568171f->enter($__internal_ec7cbbbb1f49116efe8e5f169de45adc45c9e91078e8dc4e69dde6443568171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ce470e325e6a51cb2a0c50ff45c66d4d882779bd4126ca6ecb0ecc22b1417e49->leave($__internal_ce470e325e6a51cb2a0c50ff45c66d4d882779bd4126ca6ecb0ecc22b1417e49_prof);

        
        $__internal_ec7cbbbb1f49116efe8e5f169de45adc45c9e91078e8dc4e69dde6443568171f->leave($__internal_ec7cbbbb1f49116efe8e5f169de45adc45c9e91078e8dc4e69dde6443568171f_prof);

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
