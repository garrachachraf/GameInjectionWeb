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
        $__internal_3af13bb79257e1f8cf110d62f33b6c2e22ae87a9d6f5c09112a6a8c4f9ef34a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af13bb79257e1f8cf110d62f33b6c2e22ae87a9d6f5c09112a6a8c4f9ef34a8->enter($__internal_3af13bb79257e1f8cf110d62f33b6c2e22ae87a9d6f5c09112a6a8c4f9ef34a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1e8fedd032a1ff8d67ce2c3dec67289d24345da320c0bce081bd541f984de0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8fedd032a1ff8d67ce2c3dec67289d24345da320c0bce081bd541f984de0bb->enter($__internal_1e8fedd032a1ff8d67ce2c3dec67289d24345da320c0bce081bd541f984de0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3af13bb79257e1f8cf110d62f33b6c2e22ae87a9d6f5c09112a6a8c4f9ef34a8->leave($__internal_3af13bb79257e1f8cf110d62f33b6c2e22ae87a9d6f5c09112a6a8c4f9ef34a8_prof);

        
        $__internal_1e8fedd032a1ff8d67ce2c3dec67289d24345da320c0bce081bd541f984de0bb->leave($__internal_1e8fedd032a1ff8d67ce2c3dec67289d24345da320c0bce081bd541f984de0bb_prof);

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
