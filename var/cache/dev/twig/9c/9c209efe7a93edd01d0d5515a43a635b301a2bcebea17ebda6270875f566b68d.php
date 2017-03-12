<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_b87a0477857a36f66d3625d2e340277cf0a92966cdaa241cb7cf4d62717c41ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87a0477857a36f66d3625d2e340277cf0a92966cdaa241cb7cf4d62717c41ed->enter($__internal_b87a0477857a36f66d3625d2e340277cf0a92966cdaa241cb7cf4d62717c41ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_68d0c34a6383c495033a0c6f6f7ceb43bc14aa9cac859c09f0e23d101cd6965e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d0c34a6383c495033a0c6f6f7ceb43bc14aa9cac859c09f0e23d101cd6965e->enter($__internal_68d0c34a6383c495033a0c6f6f7ceb43bc14aa9cac859c09f0e23d101cd6965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b87a0477857a36f66d3625d2e340277cf0a92966cdaa241cb7cf4d62717c41ed->leave($__internal_b87a0477857a36f66d3625d2e340277cf0a92966cdaa241cb7cf4d62717c41ed_prof);

        
        $__internal_68d0c34a6383c495033a0c6f6f7ceb43bc14aa9cac859c09f0e23d101cd6965e->leave($__internal_68d0c34a6383c495033a0c6f6f7ceb43bc14aa9cac859c09f0e23d101cd6965e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
