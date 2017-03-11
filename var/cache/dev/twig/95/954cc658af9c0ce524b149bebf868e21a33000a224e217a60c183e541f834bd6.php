<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_49af8c85665817fe3d3bd77f9071cd683ef4143eb682d507097120dcf81dc9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49af8c85665817fe3d3bd77f9071cd683ef4143eb682d507097120dcf81dc9a0->enter($__internal_49af8c85665817fe3d3bd77f9071cd683ef4143eb682d507097120dcf81dc9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e3563fb7a6c3dde28761252d851c6d5d8316f1d69a36f3e5b99b7ecc650daa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3563fb7a6c3dde28761252d851c6d5d8316f1d69a36f3e5b99b7ecc650daa25->enter($__internal_e3563fb7a6c3dde28761252d851c6d5d8316f1d69a36f3e5b99b7ecc650daa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_49af8c85665817fe3d3bd77f9071cd683ef4143eb682d507097120dcf81dc9a0->leave($__internal_49af8c85665817fe3d3bd77f9071cd683ef4143eb682d507097120dcf81dc9a0_prof);

        
        $__internal_e3563fb7a6c3dde28761252d851c6d5d8316f1d69a36f3e5b99b7ecc650daa25->leave($__internal_e3563fb7a6c3dde28761252d851c6d5d8316f1d69a36f3e5b99b7ecc650daa25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
