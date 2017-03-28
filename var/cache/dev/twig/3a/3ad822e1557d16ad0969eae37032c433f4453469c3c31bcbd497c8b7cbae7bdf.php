<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0bb7e6b8630edd06e7a98062ff4a9b607c09da7c736d116a38aad018ee9e694e extends Twig_Template
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
        $__internal_1b204af595b36f732645887c406368393a16f00132df844ceed37c3fe0eef048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b204af595b36f732645887c406368393a16f00132df844ceed37c3fe0eef048->enter($__internal_1b204af595b36f732645887c406368393a16f00132df844ceed37c3fe0eef048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0b86ddd7f907701ebe70175f2742e124f1d9fef5a89d7041deb86f280823de2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b86ddd7f907701ebe70175f2742e124f1d9fef5a89d7041deb86f280823de2d->enter($__internal_0b86ddd7f907701ebe70175f2742e124f1d9fef5a89d7041deb86f280823de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1b204af595b36f732645887c406368393a16f00132df844ceed37c3fe0eef048->leave($__internal_1b204af595b36f732645887c406368393a16f00132df844ceed37c3fe0eef048_prof);

        
        $__internal_0b86ddd7f907701ebe70175f2742e124f1d9fef5a89d7041deb86f280823de2d->leave($__internal_0b86ddd7f907701ebe70175f2742e124f1d9fef5a89d7041deb86f280823de2d_prof);

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
