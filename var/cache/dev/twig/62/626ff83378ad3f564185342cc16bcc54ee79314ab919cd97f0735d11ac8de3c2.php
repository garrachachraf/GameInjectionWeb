<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_42ee6093573438f476bb43fe9c125525b115487e4e408bc0c9392570c84941e2 extends Twig_Template
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
        $__internal_aa7f8742bea61e864aba1b5b7b86227fa38b4557968bf9efc8248f8219061db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7f8742bea61e864aba1b5b7b86227fa38b4557968bf9efc8248f8219061db3->enter($__internal_aa7f8742bea61e864aba1b5b7b86227fa38b4557968bf9efc8248f8219061db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ffdc094e682b6b78e0b5236216e5f69729bd7e1f632106db6bfd8914cdf83277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdc094e682b6b78e0b5236216e5f69729bd7e1f632106db6bfd8914cdf83277->enter($__internal_ffdc094e682b6b78e0b5236216e5f69729bd7e1f632106db6bfd8914cdf83277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aa7f8742bea61e864aba1b5b7b86227fa38b4557968bf9efc8248f8219061db3->leave($__internal_aa7f8742bea61e864aba1b5b7b86227fa38b4557968bf9efc8248f8219061db3_prof);

        
        $__internal_ffdc094e682b6b78e0b5236216e5f69729bd7e1f632106db6bfd8914cdf83277->leave($__internal_ffdc094e682b6b78e0b5236216e5f69729bd7e1f632106db6bfd8914cdf83277_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
