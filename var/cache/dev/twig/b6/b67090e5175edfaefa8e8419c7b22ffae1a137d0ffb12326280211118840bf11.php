<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_57e3bb54b3a720afddc36c24adb8e973ad4fe6dede0def83e25099c71376de83 extends Twig_Template
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
        $__internal_0f78bcb51eb3b3631336a0d97343f798a0f0966cea26f7e6f23792584cf067a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f78bcb51eb3b3631336a0d97343f798a0f0966cea26f7e6f23792584cf067a9->enter($__internal_0f78bcb51eb3b3631336a0d97343f798a0f0966cea26f7e6f23792584cf067a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3157e95a4983f8497c0830777d85f3ee80381cb9a44a66efc0d281914187ccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3157e95a4983f8497c0830777d85f3ee80381cb9a44a66efc0d281914187ccdf->enter($__internal_3157e95a4983f8497c0830777d85f3ee80381cb9a44a66efc0d281914187ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0f78bcb51eb3b3631336a0d97343f798a0f0966cea26f7e6f23792584cf067a9->leave($__internal_0f78bcb51eb3b3631336a0d97343f798a0f0966cea26f7e6f23792584cf067a9_prof);

        
        $__internal_3157e95a4983f8497c0830777d85f3ee80381cb9a44a66efc0d281914187ccdf->leave($__internal_3157e95a4983f8497c0830777d85f3ee80381cb9a44a66efc0d281914187ccdf_prof);

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
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
