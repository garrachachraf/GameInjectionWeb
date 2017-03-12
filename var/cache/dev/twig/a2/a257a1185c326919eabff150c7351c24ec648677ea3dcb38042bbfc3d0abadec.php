<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_0963bc50396c73b4a5b7c33b0ed8153b88cb5826b291c87655347c386cf1b56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0963bc50396c73b4a5b7c33b0ed8153b88cb5826b291c87655347c386cf1b56e->enter($__internal_0963bc50396c73b4a5b7c33b0ed8153b88cb5826b291c87655347c386cf1b56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e5921f22b644443d5589c3ba75d88208216748f9f488e520bb943ad645ae586e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5921f22b644443d5589c3ba75d88208216748f9f488e520bb943ad645ae586e->enter($__internal_e5921f22b644443d5589c3ba75d88208216748f9f488e520bb943ad645ae586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0963bc50396c73b4a5b7c33b0ed8153b88cb5826b291c87655347c386cf1b56e->leave($__internal_0963bc50396c73b4a5b7c33b0ed8153b88cb5826b291c87655347c386cf1b56e_prof);

        
        $__internal_e5921f22b644443d5589c3ba75d88208216748f9f488e520bb943ad645ae586e->leave($__internal_e5921f22b644443d5589c3ba75d88208216748f9f488e520bb943ad645ae586e_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
