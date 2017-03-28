<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7b6b24dad2c3d09f0721cbbae4f095fbbe739271ec7e70aef6fd1ae7a24a029 extends Twig_Template
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
        $__internal_ad939aa4aacff902def8583ebe7e6307819e930b79be4b91a02c5f2c0624e513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad939aa4aacff902def8583ebe7e6307819e930b79be4b91a02c5f2c0624e513->enter($__internal_ad939aa4aacff902def8583ebe7e6307819e930b79be4b91a02c5f2c0624e513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3a97fc53610a104fd673bca7428724066bc4214f865f6acd15b7cd628626a091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a97fc53610a104fd673bca7428724066bc4214f865f6acd15b7cd628626a091->enter($__internal_3a97fc53610a104fd673bca7428724066bc4214f865f6acd15b7cd628626a091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ad939aa4aacff902def8583ebe7e6307819e930b79be4b91a02c5f2c0624e513->leave($__internal_ad939aa4aacff902def8583ebe7e6307819e930b79be4b91a02c5f2c0624e513_prof);

        
        $__internal_3a97fc53610a104fd673bca7428724066bc4214f865f6acd15b7cd628626a091->leave($__internal_3a97fc53610a104fd673bca7428724066bc4214f865f6acd15b7cd628626a091_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
