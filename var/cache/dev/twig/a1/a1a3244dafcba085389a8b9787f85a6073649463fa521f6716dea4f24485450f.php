<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f51c0aae0db50ba48225198c4380051bf858e8783a09f47ebe023147bdeddea5 extends Twig_Template
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
        $__internal_48665bd036115edb4fd7a216500c2997d1f8047c4af418917a5cdb399e4c578d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48665bd036115edb4fd7a216500c2997d1f8047c4af418917a5cdb399e4c578d->enter($__internal_48665bd036115edb4fd7a216500c2997d1f8047c4af418917a5cdb399e4c578d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_429d52e81a299b4f017e938f4bf91ae1c423b0913a71a230c4866f1d81fe83d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429d52e81a299b4f017e938f4bf91ae1c423b0913a71a230c4866f1d81fe83d4->enter($__internal_429d52e81a299b4f017e938f4bf91ae1c423b0913a71a230c4866f1d81fe83d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_48665bd036115edb4fd7a216500c2997d1f8047c4af418917a5cdb399e4c578d->leave($__internal_48665bd036115edb4fd7a216500c2997d1f8047c4af418917a5cdb399e4c578d_prof);

        
        $__internal_429d52e81a299b4f017e938f4bf91ae1c423b0913a71a230c4866f1d81fe83d4->leave($__internal_429d52e81a299b4f017e938f4bf91ae1c423b0913a71a230c4866f1d81fe83d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
