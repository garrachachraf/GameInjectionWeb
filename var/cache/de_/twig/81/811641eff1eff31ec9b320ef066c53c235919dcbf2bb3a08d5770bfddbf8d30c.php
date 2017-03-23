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
        $__internal_2a55de17d1294881decb06b4b0f7db591802a80d87d5eb3496ded935399fecaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a55de17d1294881decb06b4b0f7db591802a80d87d5eb3496ded935399fecaf->enter($__internal_2a55de17d1294881decb06b4b0f7db591802a80d87d5eb3496ded935399fecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2a0c77a1e967cac5b8cd1086580cbf0b4a412ef6da82d0f042957ddc649a261a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0c77a1e967cac5b8cd1086580cbf0b4a412ef6da82d0f042957ddc649a261a->enter($__internal_2a0c77a1e967cac5b8cd1086580cbf0b4a412ef6da82d0f042957ddc649a261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a55de17d1294881decb06b4b0f7db591802a80d87d5eb3496ded935399fecaf->leave($__internal_2a55de17d1294881decb06b4b0f7db591802a80d87d5eb3496ded935399fecaf_prof);

        
        $__internal_2a0c77a1e967cac5b8cd1086580cbf0b4a412ef6da82d0f042957ddc649a261a->leave($__internal_2a0c77a1e967cac5b8cd1086580cbf0b4a412ef6da82d0f042957ddc649a261a_prof);

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
