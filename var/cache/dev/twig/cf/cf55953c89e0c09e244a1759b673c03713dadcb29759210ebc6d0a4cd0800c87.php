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
        $__internal_119b21af5c913fe799972268b4cdc1d0717312de4f633aa4466ffe204902cda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119b21af5c913fe799972268b4cdc1d0717312de4f633aa4466ffe204902cda3->enter($__internal_119b21af5c913fe799972268b4cdc1d0717312de4f633aa4466ffe204902cda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8096dbab6d2f59eb7293fb59c60716b731854d903b8e6fe6d568f47431862ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8096dbab6d2f59eb7293fb59c60716b731854d903b8e6fe6d568f47431862ab1->enter($__internal_8096dbab6d2f59eb7293fb59c60716b731854d903b8e6fe6d568f47431862ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_119b21af5c913fe799972268b4cdc1d0717312de4f633aa4466ffe204902cda3->leave($__internal_119b21af5c913fe799972268b4cdc1d0717312de4f633aa4466ffe204902cda3_prof);

        
        $__internal_8096dbab6d2f59eb7293fb59c60716b731854d903b8e6fe6d568f47431862ab1->leave($__internal_8096dbab6d2f59eb7293fb59c60716b731854d903b8e6fe6d568f47431862ab1_prof);

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
